<?php

namespace Sohophp\SchemaOrg\Test;

use Sohophp\SchemaOrg\Tests\TestCase;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

class WebPageTest extends TestCase
{
    public function testWebPage()
    {
        $WebPage = new WebPage();
        $WebPage->name('one test')->text('one content');
        $params = $WebPage->toArray();
        /*
        array(3) {
           ["@type"]=> string(7) "WebPage"
           ["name"]=>string(8) "one test"
           ["text"]=>string(11) "one content"
          }
        */
        $this->assertCount(3, $params);
    }

}
