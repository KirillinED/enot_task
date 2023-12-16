<?php

namespace App\Contracts;

use App\Models\User;

interface Request {
    public function user(): User;

    public function get(string $key): mixed;
}