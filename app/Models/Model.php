<?php

namespace App\Models;

abstract class Model
{
    abstract public function save(): bool;
}