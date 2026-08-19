# Installation

Install the library with Composer:

```bash
composer require sohophp/schema-org
```

The runtime requires PHP 8.1 or newer and the `json` extension. The `curl` extension is required by the generator tooling.

## Verify the installation

```php
require __DIR__ . '/vendor/autoload.php';

use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

$page = new WebPage();
$page->setName('Example page');
echo $page->toScript();
```
