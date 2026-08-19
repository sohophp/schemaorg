<?php

namespace Sohophp\SchemaOrg\Test;

use Sohophp\SchemaOrg\Tests\TestCase;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

class WebPageTest extends TestCase
{
    public function testWebPage()
    {
        $WebPage = new WebPage();

        $WebPage->setName('one test')->setText('one content');
        $this->assertSame('one test', $WebPage->getName());
        $params = $WebPage->toArray();
        /*
        array(3) {
        ["@type"]=> string(7) "WebPage"
        ["name"]=>string(8) "one test"
        ["text"]=>string(11) "one content"
        }
         */
        $this->assertCount(4, $params);
    }

    public function testMetadataAndRepeatedProperties()
    {
        $webPage = new WebPage();
        $webPage->setId('https://example.test/page')
            ->addName('First title')
            ->addName('Second title');

        $params = $webPage->toArray();

        $this->assertSame('https://example.test/page', $params['@id']);
        $this->assertSame(['First title', 'Second title'], $params['name']);
    }

    public function testGenericPropertyCollectionApi()
    {
        $webPage = new WebPage();
        $webPage->addProperty('customProperty', 'first')
            ->addProperty('customProperty', 'second')
            ->clearProperty('unusedProperty');

        $this->assertSame(['first', 'second'], $webPage->getProperty('customProperty'));
        $this->assertNull($webPage->getProperty('unusedProperty'));
    }

    public function testMagicApiRejectsInvalidCalls(): void
    {
        $webPage = new WebPage();

        $this->expectException(\BadMethodCallException::class);
        $webPage->unknownProperty('value');
    }
}
