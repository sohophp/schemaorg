<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;

/**
 * A set of organisms asserted to represent a natural cohesive biological unit.
 * @see https://schema.org/Taxon
 * @package Sohophp\SchemaOrg\Thing
 */
class Taxon extends Thing
{
    /**
     * A Defined Term contained in this term set.
     * @see https://schema.org/hasDefinedTerm
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function hasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function setHasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }

    /**
     * @param DefinedTerm $value
     * @return $this
     */
    public function addHasDefinedTerm($value)
    {
        $current = $this->getProperty('hasDefinedTerm');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasDefinedTerm', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|array
     */
    public function getHasDefinedTerm()
    {
        return $this->getProperty('hasDefinedTerm');
    }
    /**
     * The taxonomic rank of this taxon given preferably as a URI from a controlled vocabulary – typically the ranks from TDWG TaxonRank ontology or equivalent Wikidata URIs.
     * @see https://schema.org/taxonRank
     * @param string|PropertyValue|array $value
     * @return $this
     */
    public function taxonRank($value)
    {
        $this->setProperty('taxonRank', $value);
        return $this;
    }

    /**
     * @param string|PropertyValue|array $value
     * @return $this
     */
    public function setTaxonRank($value)
    {
        $this->setProperty('taxonRank', $value);
        return $this;
    }

    /**
     * @param string|PropertyValue $value
     * @return $this
     */
    public function addTaxonRank($value)
    {
        $current = $this->getProperty('taxonRank');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('taxonRank', $current);
        return $this;
    }

    /**
     * @return string|PropertyValue|array
     */
    public function getTaxonRank()
    {
        return $this->getProperty('taxonRank');
    }
    /**
     * Closest child taxa of the taxon in question.
     * @see https://schema.org/childTaxon
     * @param Taxon|string|array $value
     * @return $this
     */
    public function childTaxon($value)
    {
        $this->setProperty('childTaxon', $value);
        return $this;
    }

    /**
     * @param Taxon|string|array $value
     * @return $this
     */
    public function setChildTaxon($value)
    {
        $this->setProperty('childTaxon', $value);
        return $this;
    }

    /**
     * @param Taxon|string $value
     * @return $this
     */
    public function addChildTaxon($value)
    {
        $current = $this->getProperty('childTaxon');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('childTaxon', $current);
        return $this;
    }

    /**
     * @return Taxon|string|array
     */
    public function getChildTaxon()
    {
        return $this->getProperty('childTaxon');
    }
    /**
     * Closest parent taxon of the taxon in question.
     * @see https://schema.org/parentTaxon
     * @param string|Taxon|array $value
     * @return $this
     */
    public function parentTaxon($value)
    {
        $this->setProperty('parentTaxon', $value);
        return $this;
    }

    /**
     * @param string|Taxon|array $value
     * @return $this
     */
    public function setParentTaxon($value)
    {
        $this->setProperty('parentTaxon', $value);
        return $this;
    }

    /**
     * @param string|Taxon $value
     * @return $this
     */
    public function addParentTaxon($value)
    {
        $current = $this->getProperty('parentTaxon');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('parentTaxon', $current);
        return $this;
    }

    /**
     * @return string|Taxon|array
     */
    public function getParentTaxon()
    {
        return $this->getProperty('parentTaxon');
    }
}
