# Release and Distribution

This repository publishes a PHP package through Composer and Packagist. GitHub is the source repository and release-tag host.

## Current release

- Package: `sohophp/schema-org`
- Current version: `v5.0.4`
- PHP requirement: `^8.1.0`
- Bundled schema.org data: v30.0
- Schema data manifest: [`data/manifest.json`](../data/manifest.json)

## Official URLs

- GitHub repository: <https://github.com/sohophp/schemaorg>
- GitHub releases: <https://github.com/sohophp/schemaorg/releases>
- GitHub Actions: <https://github.com/sohophp/schemaorg/actions>
- Current tag: <https://github.com/sohophp/schemaorg/tree/v5.0.4>
- GitHub tag release page: <https://github.com/sohophp/schemaorg/releases/tag/v5.0.4> (create a GitHub Release from this tag if release notes should be shown there)
- Packagist: <https://packagist.org/packages/sohophp/schema-org>
- Composer metadata: <https://repo.packagist.org/p2/sohophp/schema-org.json>
- Schema.org: <https://schema.org/>

## Install the PHP package

```bash
composer require sohophp/schema-org:^5.0
```

Composer resolves the package from Packagist. Packagist reads the source repository and its Git tags; the `v5.0.4` GitHub tag identifies the current release.

## Release flow

1. Update the schema.org dataset and `data/manifest.json` when needed.
2. Update `CHANGELOG.md` and documentation.
3. Run the release checks locally:

   ```bash
   composer validate --no-check-publish
   composer lint
   composer analyse
   composer format:check
   composer build
   git diff --exit-code -- src/Thing
   composer test
   composer audit
   ```

4. Commit the changes on `master`.
5. Create an annotated semantic-version tag:

   ```bash
   git tag -a v5.0.4 -m "Release v5.0.4"
   git push origin master
   git push origin v5.0.3
   ```

6. Confirm the workflow at GitHub Actions and the package at Packagist.

The repository workflow tests PHP 8.1 through PHP 8.5, validates generated classes, runs PHPStan and CS Fixer, and runs PHPUnit. A GitHub tag is the release source of truth; Packagist may take a short time to import the tag.
