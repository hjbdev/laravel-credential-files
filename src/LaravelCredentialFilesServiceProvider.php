<?php

namespace Hjbdev\LaravelCredentialFiles;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Hjbdev\LaravelCredentialFiles\Commands\LaravelCredentialFilesCommand;

class LaravelCredentialFilesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-credential-files')
            ->hasConfigFile();
    }
}
