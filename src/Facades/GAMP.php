<?php

namespace Irazasyed\LaravelGAMP\Facades;

use Illuminate\Support\Facades\Facade;

class GAMP extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gamp';
    }
}
