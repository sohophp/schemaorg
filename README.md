# schema.org PHP Library

[![CI](https://github.com/sohophp/schemaorg/actions/workflows/ci.yml/badge.svg)](https://github.com/sohophp/schemaorg/actions/workflows/ci.yml)
[![Latest Stable Version](https://poser.pugx.org/sohophp/schema-org/v/stable)](https://packagist.org/packages/sohophp/schema-org)
[![Total Downloads](https://poser.pugx.org/sohophp/schema-org/downloads)](https://packagist.org/packages/sohophp/schema-org)
[![License](https://poser.pugx.org/sohophp/schema-org/license)](https://github.com/sohophp/schemaorg/blob/master/LICENSE)

A modern PHP library for building [Schema.org](https://schema.org/) objects and serializing them as JSON-LD for websites, APIs, and Google structured-data workflows.

The project ships generated PHP classes based on the official schema.org dataset and a small runtime API for fluent property access, repeated values, node identifiers, custom contexts, and `@graph` documents.

> **Current release:** `v5.0.3` · **Schema.org dataset:** `v30.0` · **PHP:** `8.1 - 8.5`

## What it provides
- Generated classes covering the bundled schema.org vocabulary.
- Fluent `setX()`, `getX()`, and `addX()` methods with IDE-friendly PHPDoc.
- JSON-LD metadata support for `@id`, `@context`, and explicit `@type`.
- Scalar, object, array, and repeated property values.
- `SchemaCollection` helpers for regular documents and `@graph` output.
- A schema data parser and generator for upgrading the bundled vocabulary.
- Exception-based JSON encoding and parsing failures.
- PHP 8.1+ typing, PHPUnit tests, PHPStan analysis, and GitHub Actions coverage for PHP 8.1-8.5.

### Multiple schema.org parents

Schema.org allows a type to have multiple direct parents, while PHP classes can
extend only one class. When `fullpath` generation is enabled, the generator
creates one same-named class under each parent path. For example, `LocalBusiness`
is generated as both `Thing\\Place\\LocalBusiness` and
`Thing\\Organization\\LocalBusiness`, with each class extending its corresponding
parent. This preserves both schema.org paths without pretending that PHP
supports multiple class inheritance.

## Requirements

- PHP `^8.1`
- PHP extensions: `json` and `curl`
- `curl` is required by the schema generator; runtime JSON-LD serialization requires `json`.

## Installation

Install the Composer package:

```bash
composer require sohophp/schema-org:^5.0
```

Or clone the repository when working on the generator or templates:

```bash
git clone https://github.com/sohophp/schemaorg.git
cd schemaorg
composer install
```

## Quick start

```php
<?php

use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

$page = (new WebPage())
    ->setId('https://example.com/about')
    ->setName('About Example')
    ->setText('A short description of the page.');

echo $page->toScript();
```

The generated script contains a JSON-LD object with `@context`, `@type`, `@id`, and the properties that were set.

## Repeated properties and graphs

Use `setX()` to replace a value and `addX()` to append a value without manually managing arrays:

```php
$page->setName('Primary title')
    ->addName('Alternative title')
    ->addName('Another title');
```

For related nodes, use `SchemaCollection` and emit one JSON-LD `@graph` document:

```php
use Sohophp\SchemaOrg\SchemaCollection;
use Sohophp\SchemaOrg\Thing\Organization\Organization;

$organization = (new Organization())
    ->setId('https://example.com/#organization')
    ->setName('Example Organization');

$collection = new SchemaCollection([$organization, $page]);
echo $collection->toGraphScript();
```

For properties not yet represented by a generated method, use the generic API:

```php
$page->addProperty('customProperty', 'first')
    ->addProperty('customProperty', 'second');

$value = $page->getProperty('customProperty');
```

## Custom JSON-LD metadata

```php
$page->setContext([
    'schema' => 'https://schema.org/',
    'custom' => 'https://example.com/vocabulary#',
])->setJsonLdType(['WebPage', 'custom:LandingPage']);
```

`SchemaCollection::toGraphJson()` and `toGraphScript()` also accept a custom context. Keep `@id` values stable when several nodes describe the same real-world entity.

## Documentation

- [Installation](docs/installation.md) — requirements and Composer setup
- [Basic usage](docs/basic-usage.md) — fluent API and common patterns
- [JSON-LD output](docs/json-ld.md) — serialization methods and errors
- [Schema generator](docs/generator.md) — dataset upgrades and generated classes
- [Google structured data](docs/google-structured-data.md) — validation and search features
- [Compatibility](docs/compatibility.md) — PHP versions and API compatibility
- [Release and distribution](docs/release.md) — Composer, Packagist, GitHub, and release steps
- [Troubleshooting](docs/troubleshooting.md) — common setup and generation problems
- [Migration notes](docs/migration-4.1.md) — upgrading older applications
- [Changelog](CHANGELOG.md) — release history

## Schema.org data

The bundled dataset is the official `schemaorg-all-https.jsonld` release for schema.org v30.0. Its source, checksum, and generated class count are recorded in [data/manifest.json](data/manifest.json).

Generated classes under `src/Thing/` should not be edited by hand. Update the parser, generator, template, or dataset, then run:

```bash
composer build
git diff --exit-code -- src/Thing
```

## Development checks

```bash
composer validate --no-check-publish
composer lint
composer analyse
composer format:check
composer test
composer audit
```

CI runs these checks on PHP 8.1 through PHP 8.5 and verifies that schema generation is reproducible.

## Links

- GitHub: <https://github.com/sohophp/schemaorg>
- GitHub Actions: <https://github.com/sohophp/schemaorg/actions>
- Packagist: <https://packagist.org/packages/sohophp/schema-org>
- Schema.org: <https://schema.org/>

## License

MIT. See [LICENSE](LICENSE).



