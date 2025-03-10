<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Text\CssSelectorType;
use Sohophp\SchemaOrg\Text\XPathType;

/**
* A web page element, like a table or an image.
* @see http://schema.org/WebPageElement
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class WebPageElement extends CreativeWork
{


    /**
        * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]].
 * In the latter case, multiple matches within a page can constitute a single
 * conceptual "Web page element".
        * @param CssSelectorType|array|string|mixed $value
    * @return $this
    */
    public function cssSelector($value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }

    /**
    * @param CssSelectorType|array|string|mixed $value
    * @return $this
    */
    public function setCssSelector($value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCssSelector()
    {
       return $this->getProperty('cssSelector');
    }


    /**
        * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the
 * latter case, multiple matches within a page can constitute a single
 * conceptual "Web page element".
        * @param XPathType|array|string|mixed $value
    * @return $this
    */
    public function xpath($value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }

    /**
    * @param XPathType|array|string|mixed $value
    * @return $this
    */
    public function setXpath($value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getXpath()
    {
       return $this->getProperty('xpath');
    }


}
