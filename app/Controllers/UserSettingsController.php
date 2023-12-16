<?php

namespace App\Controllers;

use App\Contracts\Request;
use App\Services\Authenticator\TFAAuthenticator;

class UserSettingsController
{
    /**
     * Подразумевается что запрос уже прошел валидацию
     * @param Request $request
     * @return false|string
     */
    public function update(Request $request)
    {
        $user = $request->user();

        if (
            $request->get('tfa_code') &&
            $user->session()->exists('tfa_hash')
        ) {
            if (TFAAuthenticator::verify((int)$request->get('tfa_code'), $user->session()->get('tfa_hash'))) {
                $user_settings = $user->getUserSettings();

                $setting_name = $request->get('setting_name');

                $user_settings->$setting_name = $request->get('setting_value');

                $user_settings->save();

                return json_encode(['status' => 'success', 'message' => 'ok']);
            }

            return json_encode(['status' => 'error', 'message' => 'not ok']);
        }

        return json_encode(['status' => 'error', 'message' => 'not code or hash']);
    }
}