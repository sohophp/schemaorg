<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Text\CssSelectorType;
use Sohophp\SchemaOrg\Text\XPathType;

/**
* A SpeakableSpecification indicates (typically via <a class="localLink" href="http://schema.org/xpath">xpath</a> or <a class="localLink" href="http://schema.org/cssSelector">cssSelector</a>) sections of a document that are highlighted as particularly <a class="localLink" href="http://schema.org/speakable">speakable</a>. Instances of this type are expected to be used primarily as values of the <a class="localLink" href="http://schema.org/speakable">speakable</a> property.
* @see http://schema.org/SpeakableSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class SpeakableSpecification extends Intangible
{

    /**
    * A CSS selector, e.g. of a <a class="localLink" href="http://schema.org/SpeakableSpecification">SpeakableSpecification</a> or <a class="localLink" href="http://schema.org/WebPageElement">WebPageElement</a>. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
    * @param CssSelectorType $value
    * @return $this
    */
    public function cssSelector(?CssSelectorType $value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }

    /**
    * An XPath, e.g. of a <a class="localLink" href="http://schema.org/SpeakableSpecification">SpeakableSpecification</a> or <a class="localLink" href="http://schema.org/WebPageElement">WebPageElement</a>. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
    * @param XPathType $value
    * @return $this
    */
    public function xpath(?XPathType $value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\SpeakableSpecification','Thing\\SpeakableSpecification');

