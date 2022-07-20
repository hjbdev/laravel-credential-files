# Helper for storing encrypted credentials in files.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hjbdev/laravel-credential-files.svg?style=flat-square)](https://packagist.org/packages/hjbdev/laravel-credential-files)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/hjbdev/laravel-credential-files/run-tests?label=tests)](https://github.com/hjbdev/laravel-credential-files/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/hjbdev/laravel-credential-files/Check%20&%20fix%20styling?label=code%20style)](https://github.com/hjbdev/laravel-credential-files/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hjbdev/laravel-credential-files.svg?style=flat-square)](https://packagist.org/packages/hjbdev/laravel-credential-files)

A simple way to securely store data in your Laravel app.

## Installation

You can install the package via composer:

```bash
composer require hjbdev/laravel-credential-files
```
## Usage

```php
$credentials = new CredentialFiles();

$credentials->set('foo', 'bar');
$credentials->get('foo'); // 'bar'

$credentials->foo = 'bonk';
$credentials->foo; // 'bonk'

$credentials->foo('baa');
$credentails->foo(); // 'baa'

$credentials->delete('foo');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/hjbdev/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Harry Bayliss (hjbdev)](https://github.com/hjbdev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
