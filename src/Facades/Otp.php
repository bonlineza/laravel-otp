<?php

namespace Ichtrojan\Otp\Facades;

use Illuminate\Support\Facades\Facade;

class Otp extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'otp';
    }
}
