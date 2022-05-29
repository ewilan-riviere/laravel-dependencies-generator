<?php

namespace EwilanRiviere\LaravelDependenciesGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use EwilanRiviere\LaravelDependenciesGenerator\Commands\LaravelDependenciesGeneratorCommand;

class LaravelDependenciesGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dependencies-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-dependencies-generator_table')
            ->hasCommand(LaravelDependenciesGeneratorCommand::class);
    }
}
