<?php namespace Srmklive\FlashAlert\Facades;

/**
 * Class Facade
 * @package Srmklive\FlashAlert\Facades
 * @see Srmklive\FlashAlert\FlashAlertHandler
 */

use Illuminate\Support\Facades\Facade;

class FlashAlert extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Srmklive\FlashAlert\FlashAlertHandler';
    }
}