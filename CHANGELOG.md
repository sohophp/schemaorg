# Changelog

## 5.0.2 - 2026-08-19

- Add complete schema.org URLs to generated class and property PHPDoc `@see` annotations.
- Apply PHP CS Fixer formatting and strict type declarations to generated classes.
- Add generator regression coverage for generated documentation and formatting.

## 5.0.1 - 2026-08-19

- Make the generator executable portable across local and GitHub Actions PHP installations.

## 5.0.0 - 2026-08-19

- Upgrade the bundled schema.org dataset to v30.0.
- Require PHP 8.1 or newer and verify PHP 8.1 through PHP 8.5 in CI.
- Add JSON-LD `@id`, custom `@context`, explicit `@type`, repeated-property, and `@graph` APIs.
- Make JSON parsing and encoding failures throw exceptions instead of returning ambiguous values.
- Harden schema JSON-LD parsing and graph identity validation.
- Make schema class generation staging-based and preserve the previous output on failure.
- Add `fullpath=false` generator coverage and generated-file consistency checks.
- Add Google structured-data guidance, schema source manifest, PHPStan, and PHP CS Fixer checks.
- Fix PHP 8.1 cURL handle typing and Monolog compatibility.

## Release history

See the Git tags for previously published versions.
