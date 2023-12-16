<?php

namespace App\Services\Sender;

use App\Models\User;
use App\Services\Sender\Contracts\SenderContract;

abstract class Sender implements SenderContract
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}