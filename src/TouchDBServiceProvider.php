<?php

namespace SaaberDev\TouchDB;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SaaberDev\TouchDB\Commands\TouchDBCommand;

class TouchDBServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('touch-db')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_touch-db_table')
            ->hasAssets()
            ->hasCommand(TouchDBCommand::class);
    }
}
