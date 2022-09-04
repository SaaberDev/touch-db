<?php

namespace SaaberDev\TouchDB;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
        ;

        $this->registerFacades();
    }

    protected function registerFacades()
    {
        $this->app->bind('touchdb', function () {
            return new \SaaberDev\TouchDB\TouchDB;
        });
    }
}
