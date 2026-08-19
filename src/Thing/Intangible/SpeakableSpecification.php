<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Text\XPathType;
use Sohophp\SchemaOrg\Text\CssSelectorType;

/**
 * A SpeakableSpecification indicates (typically via [[xpath]] or [[cssSelector]]) sections of a document that are highlighted as particularly [[speakable]]. Instances of this type are expected to be used primarily as values of the [[speakable]] property.
 * @see https://schema.org/SpeakableSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class SpeakableSpecification extends Intangible
{
    /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
     * @see https://schema.org/xpath
     * @param XPathType|array $value
     * @return $this
     */
    public function xpath($value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }

    /**
     * @param XPathType|array $value
     * @return $this
     */
    public function setXpath($value)
    {
        $this->setProperty('xpath', $value);
        return $this;
    }

    /**
     * @param XPathType $value
     * @return $this
     */
    public function addXpath($value)
    {
        $current = $this->getProperty('xpath');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('xpath', $current);
        return $this;
    }

    /**
     * @return XPathType|array
     */
    public function getXpath()
    {
        return $this->getProperty('xpath');
    }
    /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
     * @see https://schema.org/cssSelector
     * @param CssSelectorType|array $value
     * @return $this
     */
    public function cssSelector($value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }

    /**
     * @param CssSelectorType|array $value
     * @return $this
     */
    public function setCssSelector($value)
    {
        $this->setProperty('cssSelector', $value);
        return $this;
    }

    /**
     * @param CssSelectorType $value
     * @return $this
     */
    public function addCssSelector($value)
    {
        $current = $this->getProperty('cssSelector');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('cssSelector', $current);
        return $this;
    }

    /**
     * @return CssSelectorType|array
     */
    public function getCssSelector()
    {
        return $this->getProperty('cssSelector');
    }
}
