<?php

namespace Hjbdev\LaravelCredentialFiles;

use Illuminate\Support\Facades\Storage;

class CredentialFiles
{
    public function __construct()
    {
        if (! Storage::exists('credentials')) {
            Storage::makeDirectory('credentials');
        }
    }

    public function get($key)
    {
        if (Storage::exists('credentials/'.$key)) {
            return decrypt(Storage::get('credentials/' . $key));
        }

        return null;
    }

    public function set($key, $value)
    {
        Storage::put('credentials/' . $key, encrypt($value));
    }

    public function delete($key)
    {
        Storage::delete('credentials/' . $key);
    }

    public function __get($key)
    {
        return $this->get($key);
    }

    public function __set($key, $value)
    {
        $this->set($key, $value);
    }

    public function __call($method, $params)
    {
        if (count($params) === 0) {
            return $this->get($method);
        } else {
            $this->set($method, ...$params);
        }
    }
}
