# JSON-LD Output

Every `BaseType` serializes as JSON-LD with `@context` and `@type` by default.

## Node identifiers

Use `setId()` for a stable JSON-LD node identifier:

```php
$page->setId('https://example.com/pages/about');
```

Use `setContext()` for a custom context and `setJsonLdType()` when a node needs a string or array of JSON-LD types:

```php
$page->setContext(['https://schema.org', 'https://example.com/context.jsonld'])
    ->setJsonLdType(['WebPage', 'Article']);
```

## Graph output

Use `SchemaCollection` when several related nodes should share one JSON-LD graph:

```php
$collection = new SchemaCollection([$page, $organization]);

$graph = $collection->toGraphArray();
$json = $collection->toGraphJson();
$script = $collection->toGraphScript();
```

The graph output has one top-level `@context` and an `@graph` array. Google eligibility and required properties remain dependent on the specific Google feature documentation.
