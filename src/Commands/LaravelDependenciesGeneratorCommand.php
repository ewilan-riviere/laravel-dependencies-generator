<?php

namespace EwilanRiviere\LaravelDependenciesGenerator\Commands;

use Illuminate\Console\Command;

class LaravelDependenciesGeneratorCommand extends Command
{
    public $signature = 'laravel-dependencies-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
