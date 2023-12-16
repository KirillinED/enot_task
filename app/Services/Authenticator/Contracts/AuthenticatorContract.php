<?php

namespace App\Services\Contracts\Authenticator;

interface AuthenticatorContract
{
    public static function verify(int $code, string $hash): bool;
}