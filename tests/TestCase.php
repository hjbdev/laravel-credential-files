<?php

namespace Hjbdev\LaravelCredentialFiles\Tests;

use Hjbdev\LaravelCredentialFiles\LaravelCredentialFilesServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Hjbdev\\LaravelCredentialFiles\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelCredentialFilesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('app.key', 'base64:6ReyUqCkLWrtTJ9zUmauXNWcTsg0FXTmr/LvWP1cLGI=');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-credential-files_table.php.stub';
        $migration->up();
        */
    }
}
