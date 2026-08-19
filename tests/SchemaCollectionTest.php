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

        $graph = $Jsonld->toGraphArray();
        $this->assertSame('https://schema.org', $graph['@context']);
        $this->assertCount(2, $graph['@graph']);
        $graphJson = json_decode($Jsonld->toGraphJson(0, 'https://example.test/context'), true, 512, JSON_THROW_ON_ERROR);
        $this->assertSame('https://example.test/context', $graphJson['@context']);
        $this->assertStringContainsString('example.test', $Jsonld->toGraphScript(0, 'https://example.test/context'));
    }

    public function testGraphJsonThrowsWhenEncodingFails(): void
    {
        $resource = fopen('php://memory', 'r');
        $collection = new SchemaCollection();
        $collection->add((new AboutPage())->setProperty('invalid', $resource));

        try {
            $this->expectException(\JsonException::class);
            $collection->toGraphJson();
        } finally {
            fclose($resource);
        }
    }
}
