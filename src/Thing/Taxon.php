<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* A set of organisms asserted to represent a natural cohesive biological unit.
* @see schema:Taxon
* @package Sohophp\SchemaOrg\Thing
*/
class Taxon extends Thing
{


    /**
        * Closest parent taxon of the taxon in question.
        * @param array|string|mixed $value
    * @return $this
    */
    public function parentTaxon($value)
    {
        $this->setProperty('parentTaxon', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setParentTaxon($value)
    {
        $this->setProperty('parentTaxon', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getParentTaxon()
    {
       return $this->getProperty('parentTaxon');
    }


    /**
        * The taxonomic rank of this taxon given preferably as a URI from a controlled
 * vocabulary – typically the ranks from TDWG TaxonRank ontology or equivalent
 * Wikidata URIs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function taxonRank($value)
    {
        $this->setProperty('taxonRank', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTaxonRank($value)
    {
        $this->setProperty('taxonRank', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTaxonRank()
    {
       return $this->getProperty('taxonRank');
    }


    /**
        * Closest child taxa of the taxon in question.
        * @param array|string|mixed $value
    * @return $this
    */
    public function childTaxon($value)
    {
        $this->setProperty('childTaxon', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setChildTaxon($value)
    {
        $this->setProperty('childTaxon', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getChildTaxon()
    {
       return $this->getProperty('childTaxon');
    }


    /**
        * A Defined Term contained in this term set.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasDefinedTerm()
    {
       return $this->getProperty('hasDefinedTerm');
    }


}
