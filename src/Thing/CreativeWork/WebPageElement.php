<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Text\XPathType;
use Sohophp\SchemaOrg\Text\CssSelectorType;

/**
 * A web page element, like a table or an image.
 * @see https://schema.org/WebPageElement
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class WebPageElement extends CreativeWork
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
