# Schema Generator

The repository includes the official schema.org JSON-LD dataset under `data/`. The default source is configured in `src/Generator/Configure.php`.

The selected release and SHA-256 checksum are recorded in [`data/manifest.json`](../data/manifest.json). Update the manifest whenever the official dataset changes, then regenerate the classes and verify that the generated diff is intentional.

Run generation with:

```bash
composer build
```

Generated classes are written under `src/Thing/`. Do not edit generated classes by hand. Change the parser, generator, or Twig template and regenerate instead.

Generation uses a staging directory and replaces `src/Thing/` only after all classes are generated successfully. A failed generation therefore keeps the previous generated class set.

When upgrading schema.org data:

1. Add the official release file under a versioned `data/` directory.
2. Update the configured data path.
3. Run `composer build`.
4. Run `composer test` and PHP 8.1 syntax checks.
5. Review representative classes and the generated diff.
