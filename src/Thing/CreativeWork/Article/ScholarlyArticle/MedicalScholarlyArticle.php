<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

/**
 * A scholarly article in the medical domain.
 * @see https://schema.org/MedicalScholarlyArticle
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle
 */
class MedicalScholarlyArticle extends ScholarlyArticle
{
    /**
     * The type of the medical article, taken from the US NLM MeSH publication type catalog. See also [MeSH documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
     * @see https://schema.org/publicationType
     * @param string|array $value
     * @return $this
     */
    public function publicationType($value)
    {
        $this->setProperty('publicationType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPublicationType($value)
    {
        $this->setProperty('publicationType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPublicationType($value)
    {
        $current = $this->getProperty('publicationType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('publicationType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPublicationType()
    {
        return $this->getProperty('publicationType');
    }
}
