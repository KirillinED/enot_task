<?php

namespace App\Models;

abstract class UserSetting extends Model
{
    public int $user_id;

    public mixed $setting_1;

    public mixed $setting_2;

    // public mixed $setting_n;
}