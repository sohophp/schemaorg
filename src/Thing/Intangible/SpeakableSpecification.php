<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A SpeakableSpecification indicates (typically via [[xpath]] or
 * [[cssSelector]]) sections of a document that are highlighted as particularly
 * [[speakable]]. Instances of this type are expected to be used primarily as
 * values of the [[speakable]] property.
* @see schema:SpeakableSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class SpeakableSpecification extends Intangible
{


    /**
        * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]].
 * In the latter case, multiple matches within a page can constitute a single
 * conceptual "Web page element".
        * @param array|string|mixed $value
    * @return $this
    */
    public function cssSelector($value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function xpath($value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
