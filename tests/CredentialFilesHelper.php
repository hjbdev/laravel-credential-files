<?php

use Hjbdev\LaravelCredentialFiles\CredentialFiles;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can create an encrypted file with set and get methods', function () {
    $credentialFiles = new CredentialFiles();
    $credentialFiles->set('foo', 'bar');
    expect($credentialFiles->get('foo'))->toBe('bar');
    $credentialFiles->delete('foo');
});

it('can create an encrypted file with setters and getters', function () {
    $credentialFiles = new CredentialFiles();
    $credentialFiles->foo = 'bar';
    expect($credentialFiles->foo)->toBe('bar');
    $credentialFiles->delete('foo');
});

it('can create an encrypted file with magic methods', function () {
    $credentialFiles = new CredentialFiles();
    $credentialFiles->foo('bar');
    expect($credentialFiles->foo())->toBe('bar');
    $credentialFiles->delete('foo');
});

it('can delete an encrypted file', function () {
    $credentialFiles = new CredentialFiles();
    $credentialFiles->set('foo', 'bar');
    expect($credentialFiles->get('foo'))->toBe('bar');
    $credentialFiles->delete('foo');
    expect($credentialFiles->get('foo'))->toBeNull();
});
