<?php

namespace EwilanRiviere\LaravelDependenciesGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EwilanRiviere\LaravelDependenciesGenerator\LaravelDependenciesGenerator
 */
class LaravelDependenciesGenerator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-dependencies-generator';
    }
}
