# This is my package filament-table-scroller

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mackhankins/filament-table-scroller.svg?style=flat-square)](https://packagist.org/packages/mackhankins/filament-table-scroller)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mackhankins/filament-table-scroller/run-tests?label=tests)](https://github.com/mackhankins/filament-table-scroller/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mackhankins/filament-table-scroller/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mackhankins/filament-table-scroller/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mackhankins/filament-table-scroller.svg?style=flat-square)](https://packagist.org/packages/mackhankins/filament-table-scroller)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require mackhankins/filament-table-scroller
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-table-scroller-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-table-scroller-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-table-scroller-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-table-scroller = new Mackhankins\FilamentTableScroller();
echo $filament-table-scroller->echoPhrase('Hello, Mackhankins!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mack Hankins](https://github.com/mackhankins)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
