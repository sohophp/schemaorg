<?php

namespace Sohophp\SchemaOrg\Test;

use Sohophp\SchemaOrg\SchemaCollection;
use Sohophp\SchemaOrg\Tests\TestCase;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage\AboutPage;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage\ContactPage;

class SchemaCollectionTest extends TestCase
{
    public function testSchemaCollection()
    {
        $Jsonld = new SchemaCollection();
        $AboutPage = new AboutPage();
        $AboutPage->name("About Us")->text("test content");
        $Jsonld->add($AboutPage);
        $ContactPage = new ContactPage();
        $ContactPage->name("Contact Us")->description("test description");
        $Jsonld->add($ContactPage);
        $this->assertCount(2, $Jsonld);
    }
}
