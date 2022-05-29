<?php

namespace EwilanRiviere\LaravelDependenciesGenerator\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use EwilanRiviere\LaravelDependenciesGenerator\LaravelDependenciesGeneratorServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'EwilanRiviere\\LaravelDependenciesGenerator\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDependenciesGeneratorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-dependencies-generator_table.php.stub';
        $migration->up();
        */
    }
}
