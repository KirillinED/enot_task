<?php

namespace App\Config;

use App\Services\Sender\EmailSender;
use App\Services\Sender\SmsSender;
use App\Services\Sender\TelegramSender;

class Config
{
    public static array $data = [
        'tfa_types' => [
            'sms' => SmsSender::class,
            'telegram' => TelegramSender::class,
            'email' => EmailSender::class
        ]
    ];
}