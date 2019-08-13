<?php declare(strict_types=1);
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\WebPageElement','Thing\\WebPageElement');

