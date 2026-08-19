# Troubleshooting

## The generator exits with an error

Check that the configured JSON-LD file exists and contains a top-level `@graph` array. Run:

```bash
composer validate
composer build
```

The generator keeps the previous generated class directory when staging fails.

## A property accepts one value or an array

Use `setX()` to replace a value and `addX()` to append values. The schema.org range describes the value type; it does not by itself determine whether Google accepts a property for a particular search feature.

## Google does not show a rich result

Validate the output with Google's Rich Results Test. Check the feature-specific required properties, page content, canonical URL, indexing status, and structured-data policies.

## JSON encoding throws `JsonException`

This indicates that a property contains a value that cannot be encoded as JSON. Check resources, closures, invalid UTF-8 strings, and custom objects. Use schema types, scalar values, arrays, or JSON-serializable objects.

## A generated class is missing

Confirm that the class exists in the selected schema.org release and that the generator is using the intended file under `data/`. Run `composer build` after changing the data source.
