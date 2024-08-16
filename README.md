# Playground CRM

[![Playground CI Workflow](https://github.com/gammamatrix/playground-crm/actions/workflows/ci.yml/badge.svg?branch=develop)](https://raw.githubusercontent.com/gammamatrix/playground-crm/testing/develop/testdox.txt)
[![Test Coverage](https://raw.githubusercontent.com/gammamatrix/playground-crm/testing/develop/coverage.svg)](tests)
[![PHPStan Level 9](https://img.shields.io/badge/PHPStan-level%209-brightgreen)](.github/workflows/ci.yml#L120)

The Playground CRM is a package for [Laravel](https://laravel.com/docs/11.x) applications.

This application provides the models to use the Playground CRM, a Client Relationship Manager.

Read more on using [Playground CRM at Read the Docs: Playground Documentation.](https://gammamatrix-playground.readthedocs.io/en/develop/components/crm.html)

## Installation

**NOTE:** This package is required by:
- [Playground CRM API](https://github.com/gammamatrix/playground-crm-api): API without UI
- [Playground CRM Resource](https://github.com/gammamatrix/playground-crm-resource): API with UI

Install this package, with composer, to get access to the CRM Models:

```bash
composer require gammamatrix/playground-crm
```

## `artisan:about`

Playground CRM provides information in the `artisan about` command.

## Configuration

Migrations are disabled by default. This package may sometimes be installed where another system handles the migrations.

See the contents of the published config file: [config/playground-crm.php](config/playground-crm.php)

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Playground\Crm\ServiceProvider" --tag="playground-config"
```

## Cloc

```sh
composer cloc
```

```
➜  playground-crm git:(develop) ✗ composer cloc
> cloc --exclude-dir=node_modules,output,vendor .
      60 text files.
      49 unique files.
      12 files ignored.

github.com/AlDanial/cloc v 1.98  T=0.12 s (403.2 files/s, 152885.2 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
JSON                             7              0              0          13958
PHP                             34            306            983           2680
YAML                             1              5              0            275
XML                              3              0              7            215
Markdown                         3             43              0             93
INI                              1              3              0             12
-------------------------------------------------------------------------------
SUM:                            49            357            990          17233
-------------------------------------------------------------------------------
```

### Environment Variables

|  env()                           | config()                         | Default |
|----------------------------------|----------------------------------|---------|
| `PLAYGROUND_CRM_ABOUT`           | `playground-crm.about`           | `true`  |
| `PLAYGROUND_CRM_LOAD_MIGRATIONS` | `playground-crm.load.migrations` | `false` |
- The loading option for migrations does not take effect if the migrations have been exported to your app. The control for loading is handled in the package [ServiceProvider.](src/ServiceProvider.php)

## Models

This package includes [factories](database/factories), models and [migrations](database/migrations) for:
- [Clients](src/Models/Client.php)
- [Contacts](src/Models/Contact.php)
- [Locations](src/Models/Location.php)
- [Organizations](src/Models/Organization.php)
- [People](src/Models/People.php)

## Migrations

All migrations are disabled by default.

See the contents of the published config file: [database/migrations](database/migrations)
- NOTE: There are 4 tables that will be created, they do have indexes and unique constraints defined; however, this release does not have the foreign key constraint migrations included at this time.

You can publish the migrations file with:
```bash
php artisan vendor:publish --provider="Playground\Crm\ServiceProvider" --tag="playground-migrations"
```

## PHPStan

Tests at level 9 on:
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

```sh
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Jeremy Postlethwaite](https://github.com/gammamatrix)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
