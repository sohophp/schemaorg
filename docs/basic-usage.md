# Basic Usage

Generated schema types use fluent setters and getters:

```php
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

$page = new WebPage();
$page->setName('Example page')
    ->setDescription('A schema.org WebPage');

$array = $page->toArray();
$json = $page->toJson();
$script = $page->toScript();
```

`setX()` replaces the property value. The generated `addX()` methods append values and normalize a scalar into an array:

```php
$page->addName('First title')
    ->addName('Alternative title');
```

For a property that is not present in the generated release yet, use the generic runtime API:

```php
$page->addProperty('customProperty', 'first')
    ->addProperty('customProperty', 'second')
    ->clearProperty('customProperty');
```

`setProperty()` replaces a value and `getProperty()` reads it.

The library accepts schema objects, scalars, and arrays because schema.org properties have different ranges and Google structured-data features may accept repeated values.
