<?php

namespace Tadascript\Sales\Facades;

use Illuminate\Support\Facades\Facade;

class Sales extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tadascript.sales';
    }
}
