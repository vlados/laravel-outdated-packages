<?php

namespace Vlados\LaravelOutdatedPackages\Commands;

use Illuminate\Console\Command;

class LaravelOutdatedPackagesCommand extends Command
{
    public $signature = 'laravel-outdated-packages';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
