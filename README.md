# Laravel Blueprint Streamlined Tests Addon

[![Latest Version on Packagist](https://img.shields.io/packagist/v/axitbv/laravel-blueprint-streamlined-test-addon.svg?style=flat-square)](https://packagist.org/packages/axitbv/laravel-blueprint-streamlined-test-addon)
[![Build Status](https://img.shields.io/travis/axitbv/laravel-blueprint-streamlined-test-addon/master.svg?style=flat-square)](https://travis-ci.org/axitbv/laravel-blueprint-streamlined-test-addon)
[![Quality Score](https://img.shields.io/scrutinizer/g/axitbv/laravel-blueprint-streamlined-test-addon.svg?style=flat-square)](https://scrutinizer-ci.com/g/axitbv/laravel-blueprint-streamlined-test-addon)
[![Total Downloads](https://img.shields.io/packagist/dt/axitbv/laravel-blueprint-streamlined-test-addon.svg?style=flat-square)](https://packagist.org/packages/axitbv/laravel-blueprint-streamlined-test-addon)

Swaps Blueprint's TestGenerator with my own [*too fancy* and *too specific*, *streamlined* tests](https://github.com/laravel-shift/blueprint/pull/220) for API Resource Controllers.

## Installation

You can install the package via composer:

```bash
composer require laravel-shift/blueprint axitbv/laravel-blueprint-streamlined-test-addon
```

## Usage

Create your blueprint draft.yaml as usual. In order to generate the streamlined tests that this package provides, be sure to include the `resource: api` shorthand in your `controllers:` section:

```yaml
models:
  Certificate:
    name: string
    certificate_type_id: id
    reference: string
    document: string
    expiry_date: date
    remarks: nullable text
  CertificateType:
    name: string
    relationships:
      hasMany: Certificate

controllers:
  Certificate:
    resource: api
  CertificateType:
    resource: api
```

This `resource: api` shorthand expands to generate an API resource controller, form requests, resources and resource collections. Yet, instead of the broken tests that currently come out of the box with Blueprint, it will provide you with a *very opinionated*, yet *working* testsuite for the geneated code, with 100% code coverage.

``` php
php artisan blueprint:build
```
Which will yield:
```shell script
- database/migrations/2020_07_01_073301_create_certificates_table.php
- database/migrations/2020_07_01_073302_create_certificate_types_table.php
- app/Certificate.php
- app/CertificateType.php
- database/factories/CertificateFactory.php
- database/factories/CertificateTypeFactory.php
- app/Http/Controllers/CertificateController.php
- app/Http/Controllers/CertificateTypeController.php
- app/Http/Requests/CertificateStoreRequest.php
- app/Http/Requests/CertificateUpdateRequest.php
- app/Http/Requests/CertificateTypeStoreRequest.php
- app/Http/Requests/CertificateTypeUpdateRequest.php
- app/Http/Resources/CertificateCollection.php
- app/Http/Resources/Certificate.php
- app/Http/Resources/CertificateTypeCollection.php
- app/Http/Resources/CertificateType.php
- tests/Feature/Http/Controllers/CertificateControllerTest.php
- tests/Feature/Http/Controllers/CertificateTypeControllerTest.php
```

Then, either run `php artisan test`:
```shell script
❯ php artisan test                                                            

   PASS  Tests\Unit\ExampleTest
  ✓ basic test

   PASS  Tests\Feature\ExampleTest
  ✓ basic test

   PASS  Tests\Feature\Http\Controllers\CertificateControllerTest
  ✓ index behaves as expected
  ✓ store uses form request validation
  ✓ store saves
  ✓ show behaves as expected
  ✓ update uses form request validation
  ✓ update behaves as expected
  ✓ destroy deletes and responds with

   PASS  Tests\Feature\Http\Controllers\CertificateTypeControllerTest
  ✓ index behaves as expected
  ✓ store uses form request validation
  ✓ store saves
  ✓ show behaves as expected
  ✓ update uses form request validation
  ✓ update behaves as expected
  ✓ destroy deletes and responds with

  Tests:  16 passed
  Time:   0.55s
```

Or use `phpunit`:
```shell script
❯ phpunit --coverage-text                                                                                                                                                                                                         72%
PHPUnit 8.5.8 by Sebastian Bergmann and contributors.

................                                                  16 / 16 (100%)

Time: 668 ms, Memory: 30.00 MB

OK (16 tests, 28 assertions)


Code Coverage Report:
  2020-07-01 07:41:44

 Summary:
  Classes: 51.85% (14/27)
  Methods: 64.58% (31/48)
  Lines:   63.16% (60/95)

\App\Console::App\Console\Kernel
  Methods:  50.00% ( 1/ 2)   Lines:  75.00% (  3/  4)
\App\Http\Controllers::App\Http\Controllers\CertificateController
  Methods: 100.00% ( 5/ 5)   Lines: 100.00% (  9/  9)
\App\Http\Controllers::App\Http\Controllers\CertificateTypeController
  Methods: 100.00% ( 5/ 5)   Lines: 100.00% (  9/  9)
\App\Http\Requests::App\Http\Requests\CertificateStoreRequest
  Methods: 100.00% ( 2/ 2)   Lines: 100.00% (  2/  2)
\App\Http\Requests::App\Http\Requests\CertificateTypeStoreRequest
  Methods: 100.00% ( 2/ 2)   Lines: 100.00% (  2/  2)
\App\Http\Requests::App\Http\Requests\CertificateTypeUpdateRequest
  Methods: 100.00% ( 2/ 2)   Lines: 100.00% (  2/  2)
\App\Http\Requests::App\Http\Requests\CertificateUpdateRequest
  Methods: 100.00% ( 2/ 2)   Lines: 100.00% (  2/  2)
\App\Http\Resources::App\Http\Resources\Certificate
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  7/  7)
\App\Http\Resources::App\Http\Resources\CertificateCollection
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
\App\Http\Resources::App\Http\Resources\CertificateType
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  2/  2)
\App\Http\Resources::App\Http\Resources\CertificateTypeCollection
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  1/  1)
\App\Providers::App\Providers\AppServiceProvider
  Methods: 100.00% ( 2/ 2)   Lines: 100.00% (  2/  2)
\App\Providers::App\Providers\AuthServiceProvider
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  2/  2)
\App\Providers::App\Providers\EventServiceProvider
  Methods: 100.00% ( 1/ 1)   Lines: 100.00% (  2/  2)
\App\Providers::App\Providers\RouteServiceProvider
  Methods: 100.00% ( 4/ 4)   Lines: 100.00% ( 14/ 14)
```

For code coverage reporting, install PCOV using `pecl install pcov` and invoke phpunit with `--coverage-text`.

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email j.jacobs@xit.nl instead of using the issue tracker.

## Credits

- [Joost Jacobs](https://github.com/axit-joost)
- [All Contributors](../../contributors)

## Big Thank You To

- [Jason McCreary](https://github.com/jasonmccreary) for creating [Blueprint](https://github.com/laravel-shift/blueprint), the constructive feedback, your vision and allowing Blueprint to swap Generators.
- [Daniel Mason](https://github.com/dmason30) for inspiring me with [Blueprint Pest Addon](https://github.com/fidum/laravel-blueprint-pestphp-addon) that generates PestPHP test code

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
