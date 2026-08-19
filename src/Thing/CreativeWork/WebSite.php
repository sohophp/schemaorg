<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A WebSite is a set of related web pages and other items typically served from a single web domain and accessible via URLs.
 * @see https://schema.org/WebSite
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class WebSite extends CreativeWork
{
    /**
     * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     * @see https://schema.org/issn
     * @param string|array $value
     * @return $this
     */
    public function issn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setIssn($value)
    {
        $this->setProperty('issn', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addIssn($value)
    {
        $current = $this->getProperty('issn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('issn', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIssn()
    {
        return $this->getProperty('issn');
    }
}
