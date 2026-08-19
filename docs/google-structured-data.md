# Google Structured Data

This library generates schema.org-compatible JSON-LD. A valid schema.org graph does not guarantee eligibility for a Google rich result.

## Recommended workflow

Before publishing a type, check the current Google Search documentation for:

- Required and recommended properties
- Supported `@type` values
- Content and policy requirements
- Feature-specific validation rules

1. Build the schema object with the generated API.
2. Serialize it with `toJson()` or `toScript()`.
3. Validate the URL or HTML with [Rich Results Test](https://search.google.com/test/rich-results).
4. Validate general Schema.org syntax with the [Schema Markup Validator](https://validator.schema.org/).
5. Confirm the page content matches the structured data and that required properties are visible to users.
6. Monitor Search Console after deployment.

Google feature documentation changes independently from schema.org. Use the current [Google Search Gallery](https://developers.google.com/search/docs/appearance/structured-data/search-gallery) to confirm whether a feature is eligible before adding it to a production page.

## Common feature mapping

The generated classes provide the schema.org vocabulary. Google eligibility still depends on the feature-specific documentation:

| Search feature | Typical schema.org type | Notes |
| --- | --- | --- |
| Article | `Article`, `NewsArticle`, `BlogPosting` | Match author, headline, image, and publication dates to visible content. |
| Product | `Product`, `Offer`, `Review` | Keep price, currency, availability, and review information current. |
| Breadcrumb | `BreadcrumbList`, `ListItem` | Use ordered positions and canonical URLs. |
| Organization | `Organization`, `LocalBusiness` | Use a stable `@id` and consistent identity information. |
| Event | `Event`, `Place`, `Offer` | Include the actual event status, dates, location, and offers. |

Google may change support or requirements for any feature. Treat this table as an implementation map, not a guarantee of search appearance.

## Example: related nodes

Use stable identifiers when several nodes describe the same entity. A graph keeps those nodes in one JSON-LD document while preserving their relationships:

```php
$organization = (new \Sohophp\SchemaOrg\Thing\Organization\Organization())
	->setId('https://example.com/#organization')
	->setName('Example Organization');

$page = (new \Sohophp\SchemaOrg\Thing\CreativeWork\WebPage())
	->setId('https://example.com/about')
	->setName('About Example Organization')
	->setAbout($organization);

$collection = new \Sohophp\SchemaOrg\SchemaCollection([$organization, $page]);
echo $collection->toGraphScript();
```

Keep `@id` values stable when several nodes describe the same real-world entity. Use `SchemaCollection::toGraphJson()` when related nodes should be emitted in one `@graph`.
