# Playground: CRM

[![Playground CI Workflow](https://github.com/gammamatrix/playground-crm/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-crm/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-crm/testing/develop/coverage.svg)](tests)
[![PHPStan Level 10](https://img.shields.io/badge/PHPStan-level%2010-brightgreen)](.github/workflows/ci.yml#L128)

The Playground CRM is a package for [Laravel](https://laravel.com/docs/12.x) applications.

Playground: Provides the CRM models for the Playground Client Relationship Management System.

Read more on using [Playground: CRM at Read the Docs](https://gammamatrix-playground.readthedocs.io/en/develop/built-components/crm.html)

## Installation

**NOTE:** This package is required by:
- [Playground: CRM API](https://github.com/gammamatrix/playground-crm-api): API without UI
- [Playground: CRM Resource](https://github.com/gammamatrix/playground-crm-resource): API with UI

Install this package, with composer, to get access to the CRM Models:

```bash
composer require gammamatrix/playground-crm
```

## `artisan:about`

Playground CRM provides information in the `artisan about` command.

<img src="resources/docs/artisan-about-playground-crm.png" alt="screenshot of artisan about command with Playground: CRM.">

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-crm.php](config/playground-crm.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Crm\ServiceProvider" --tag="playground-config"
```

### Environment Variables

| env()                                | config()                         | Default |
|--------------------------------------|----------------------------------|---------|
| `PLAYGROUND_CRM_ABOUT`           | `playground-crm.about`           | `true`  |
| `PLAYGROUND_CRM_LOAD_MIGRATIONS` | `playground-crm.load.migrations` | `false` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Client](src/Models/Client.php)
- [Contact](src/Models/Contact.php)
- [Location](src/Models/Location.php)
- [Organization](src/Models/Organization.php)
- [People](src/Models/People.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 5 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Crm\ServiceProvider" --tag="playground-migrations"
```

## Cloc

```sh
composer cloc
```

```
➜  playground-crm git:(develop) ✗ composer cloc
> cloc --exclude-dir=node_modules,output,vendor .
       0 text files.
       0 unique files.
       0 files ignored.

github.com/AlDanial/cloc v 1.98  T=0.0 s (0.0 files/s, 0.0 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
JSON                             0              0              0              0
PHP                              0              0              0              0
YAML                             0              0              0              0
XML                              0              0              0              0
Markdown                         0              0              0              0
INI                              0              0              0              0
-------------------------------------------------------------------------------
SUM:                             0              0              0              0
-------------------------------------------------------------------------------
```

## PHPStan

Tests at level 10 on:
- `config/`
- `database/`
- `src/`
- `tests/Feature/`
- `tests/Unit/`

```sh
composer analyse
```

## Coding Standards

```sh
composer format
```

## Testing

Unit tests
```sh
composer test
```

Unit and feature tests
```sh
composer test-dev
```

Run unit and feature tests in parallel:
```sh
composer test-parallel
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
