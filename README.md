# A small package to interact with database schema.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/saaberdev/touch-db.svg?style=flat-square)](https://packagist.org/packages/saaberdev/touch-db)
[![GitHub Tests Action Status](https://github.com/SaaberDev/touch-db/actions/workflows/run-tests.yml/badge.svg)](https://github.com/SaaberDev/touch-db/actions/workflows/run-tests.yml)
[![GitHub Code Style Action Status](https://github.com/SaaberDev/touch-db/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/SaaberDev/touch-db/actions/workflows/fix-php-code-style-issues.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/saaberdev/touch-db.svg?style=flat-square)](https://packagist.org/packages/saaberdev/touch-db)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require saaberdev/touch-db
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="touch-db-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="touch-db-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="touch-db-views"
```

## Usage

```php
$touchDB = new SaaberDev\TouchDB();
echo $touchDB->echoPhrase('Hello, SaaberDev!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
