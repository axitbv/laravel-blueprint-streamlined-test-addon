# Laravel Blueprint Streamlined Tests Addon

[![Latest Version on Packagist](https://img.shields.io/packagist/v/axitbv/laravel-blueprint-streamlined-test-addon.svg?style=flat-square)](https://packagist.org/packages/axitbv/laravel-blueprint-streamlined-test-addon)
[![Build Status](https://img.shields.io/travis/axitbv/laravel-blueprint-streamlined-test-addon/master.svg?style=flat-square)](https://travis-ci.org/axitbv/laravel-blueprint-streamlined-test-addon)
[![Quality Score](https://img.shields.io/scrutinizer/g/axitbv/laravel-blueprint-streamlined-test-addon.svg?style=flat-square)](https://scrutinizer-ci.com/g/axitbv/laravel-blueprint-streamlined-test-addon)
[![Total Downloads](https://img.shields.io/packagist/dt/axitbv/laravel-blueprint-streamlined-test-addon.svg?style=flat-square)](https://packagist.org/packages/axitbv/laravel-blueprint-streamlined-test-addon)

Swap Blueprint's TestGenerator with my own *too fancy* and *too specific*, *streamlined* tests for API Resource Controllers

## Installation

You can install the package via composer:

```bash
composer require laravel-shift/blueprint axitbv/laravel-blueprint-streamlined-test-addon
```

## Usage

Create your blueprint draft.yaml as usual. In order to generate the streamlined tests that this package provides, be sure to include the `resource: api` shorthand in your `controllers:` section:

```yaml
controllers:
  YourController:
    resource: api
```

This `resource: api` shorthand expands to generate an API resource controller. Instead of the broken tests that currently come out of the Box, it will provide you with a very opinionated, yet working testsuite for those controllers.

``` php
php artisan blueprint:build
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email j.jacobs@xit.nl instead of using the issue tracker.

## Credits

- [Joost Jacobs](https://github.com/axitbv)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
