<?php

namespace App\Services\Sender\Contracts;

use App\Models\User;

interface SenderContract
{
    public function __construct(User $user);

    public function send(string $data): bool;
}