<?php

namespace Vlados\LaravelOutdatedPackages;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vlados\LaravelOutdatedPackages\LaravelOutdatedPackages
 */
class LaravelOutdatedPackagesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-outdated-packages';
    }
}
