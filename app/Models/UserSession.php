<?php

namespace App\Models;

abstract class UserSession extends Model
{
    public int $id;

    public int $user_id;

    public string $token;

    public string $session_data;

    abstract public function get(string $key): mixed;

    abstract public function set(string $key, mixed $value): void;

    abstract public function exists(string $key): bool;
}