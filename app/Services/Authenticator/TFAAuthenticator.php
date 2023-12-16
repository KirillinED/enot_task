<?php

namespace App\Services\Authenticator;

use App\Services\Contracts\Authenticator\AuthenticatorContract;

class TFAAuthenticator implements AuthenticatorContract
{
    public static function generateCode(): int
    {
        return 123456;
    }

    public static function verify(int $code, string $hash): bool
    {
        // TODO: Implement verify() method.

        return true;
    }
}