# Compatibility

- Minimum PHP version: 8.1
- Targeted PHP versions: 8.1 through 8.5
- Current schema.org dataset: v30.0

The CI matrix checks all targeted PHP versions. Runtime and generator code is checked with PHPStan, while PHP CS Fixer checks maintained source and test files. Generated classes under `src/Thing/` are validated by regeneration and the generated-diff check instead of being formatted independently.

The existing fluent API remains supported:

```php
setX($value);
getX();
toArray();
toJson();
toScript();
```

`setX()` does not enforce a PHP union type at runtime. This preserves compatibility with existing applications that pass scalars, schema objects, or arrays. Generated PHPDoc documents the schema range and array form for IDEs and static analysis.
