<?php

namespace Vlados\LaravelOutdatedPackages;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Queue\Jobs\Job;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vlados\LaravelOutdatedPackages\Commands\LaravelOutdatedPackagesCommand;

class LaravelOutdatedPackagesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-outdated-packages')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-outdated-packages_table')
            ->hasCommand(LaravelOutdatedPackagesCommand::class);
    }
    public function boot()
    {
        
//        $this->callAfterResolving(Job::class, function (Schedule $schedule) {
//            $schedule->job('some:command')->everyMinute();
//        });
    }

}
