<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Role;

use Sohophp\SchemaOrg\Thing\Intangible\Role;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
 * A Role that represents a Web link, e.g. as expressed via the 'url' property. Its linkRelationship property can indicate URL-based and plain textual link types, e.g. those in IANA link registry or others such as 'amphtml'. This structure provides a placeholder where details from HTML's link element can be represented outside of HTML, e.g. in JSON-LD feeds.
 * @see https://schema.org/LinkRole
 * @package Sohophp\SchemaOrg\Thing\Intangible\Role
 */
class LinkRole extends Role
{
    /**
     * Indicates the relationship type of a Web link.
     * @see https://schema.org/linkRelationship
     * @param string|array $value
     * @return $this
     */
    public function linkRelationship($value)
    {
        $this->setProperty('linkRelationship', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLinkRelationship($value)
    {
        $this->setProperty('linkRelationship', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLinkRelationship($value)
    {
        $current = $this->getProperty('linkRelationship');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('linkRelationship', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLinkRelationship()
    {
        return $this->getProperty('linkRelationship');
    }
    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @see https://schema.org/inLanguage
     * @param string|Language|array $value
     * @return $this
     */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language|array $value
     * @return $this
     */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language $value
     * @return $this
     */
    public function addInLanguage($value)
    {
        $current = $this->getProperty('inLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getInLanguage()
    {
        return $this->getProperty('inLanguage');
    }
}
