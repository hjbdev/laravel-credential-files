<?php

namespace Hjbdev\LaravelCredentialFiles\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hjbdev\LaravelCredentialFiles\CredentialFiles
 */
class LaravelCredentialFiles extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-credential-files';
    }
}
