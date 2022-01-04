<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Text\CssSelectorType;
use Sohophp\SchemaOrg\Text\XPathType;

/**
* A web page element, like a table or an image.
* @see http://schema.org/WebPageElement
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class WebPageElement extends CreativeWork
{

    /**
    * A CSS selector, e.g. of a <a class="localLink" href="http://schema.org/SpeakableSpecification">SpeakableSpecification</a> or <a class="localLink" href="http://schema.org/WebPageElement">WebPageElement</a>. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
    * @param CssSelectorType|array|string $value
    * @return $this
    * @deprecated use setCssSelector
    */
    public function cssSelector($value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }
   /**
    * @param CssSelectorType|array|string $value
    * @return $this
    */
    public function setCssSelector($value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCssSelector()
    {
       return $this->getProperty('cssSelector');
    }

    /**
    * An XPath, e.g. of a <a class="localLink" href="http://schema.org/SpeakableSpecification">SpeakableSpecification</a> or <a class="localLink" href="http://schema.org/WebPageElement">WebPageElement</a>. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
    * @param XPathType|array|string $value
    * @return $this
    * @deprecated use setXpath
    */
    public function xpath($value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }
   /**
    * @param XPathType|array|string $value
    * @return $this
    */
    public function setXpath($value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getXpath()
    {
       return $this->getProperty('xpath');
    }


}
