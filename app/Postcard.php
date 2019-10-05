<?php

namespace App;

use App\PostcardSendingService;

class Postcard
{
    public static function any()
    {
        dd('inside');
    }

    protected static function resolveFacade($name)
    {
        return app()[$name];
    }

    public static function __callStatic($method, $arguments)
    {
        return (self::resolveFacade('Postcard'))
            ->$method(...$arguments);
    }
}
