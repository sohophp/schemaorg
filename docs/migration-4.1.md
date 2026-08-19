# Migration Notes

## Schema.org data

The generated classes now use the official schema.org v30.0 dataset. New classes and properties may appear, and generated files may change when inheritance or property ranges change.

## JSON-LD APIs

New APIs include:

- `BaseType::setId()` and `getId()`
- `BaseType::setContext()` and `getContext()`
- `BaseType::setJsonLdType()`
- Generated `addX()` methods
- `SchemaCollection::toGraphArray()`
- `SchemaCollection::toGraphJson()`
- `SchemaCollection::toGraphScript()`

Existing `setX()`, `toArray()`, `toJson()`, and `toScript()` calls remain available.

JSON encoding now throws `JsonException` for invalid values instead of silently returning an empty string.
