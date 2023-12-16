<?php

namespace App\Models;

use App\Config\Config;
use App\Services\Authenticator\TFAAuthenticator;

abstract class User extends Model
{
    public int $id;

    public string $phone;

    public string $telegram_id;

    public string $email;

    public string $remember_token;

    abstract public function getUserSettings(): UserSetting;

    abstract public function session(): UserSession;

    public function sendTFA(string $tfa_type): bool
    {
        $user_session = $this->session();

        $code = TFAAuthenticator::generateCode();

        $user_session->set('tfa_hash', base64_encode($user_session->token . '.' . $code));

        return (new Config::$data['tfa_types'][$tfa_type]($this))->send($code);
    }
}