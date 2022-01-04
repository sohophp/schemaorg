<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Text\CssSelectorType;
use Sohophp\SchemaOrg\Text\XPathType;

/**
* A SpeakableSpecification indicates (typically via <a class="localLink" href="http://schema.org/xpath">xpath</a> or <a class="localLink" href="http://schema.org/cssSelector">cssSelector</a>) sections of a document that are highlighted as particularly <a class="localLink" href="http://schema.org/speakable">speakable</a>. Instances of this type are expected to be used primarily as values of the <a class="localLink" href="http://schema.org/speakable">speakable</a> property.
* @see http://schema.org/SpeakableSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class SpeakableSpecification extends Intangible
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
