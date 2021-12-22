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
    * @param CssSelectorType|array $value
    * @return $this
    */
    public function cssSelector(?CssSelectorType $value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }
   /**
    * @param CssSelectorType|array $value
    * @return $this
    */
    public function setCssSelector(?CssSelectorType $value)
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
    * @param XPathType|array $value
    * @return $this
    */
    public function xpath(?XPathType $value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }
   /**
    * @param XPathType|array $value
    * @return $this
    */
    public function setXpath(?XPathType $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\WebPageElement','Thing\\WebPageElement');

