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
}
