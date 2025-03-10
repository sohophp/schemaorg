<?php
namespace Sohophp\SchemaOrg\Thing\BioChemEntity;

use Sohophp\SchemaOrg\Thing\BioChemEntity;

/**
* A chemical substance is 'a portion of matter of constant composition,
 * composed of molecular entities of the same type or of different types'
 * (source:
 * [ChEBI:59999](https://www.ebi.ac.uk/chebi/searchId.do?chebiId=59999)).
* @see schema:ChemicalSubstance
* @package Sohophp\SchemaOrg\Thing\BioChemEntity
*/
class ChemicalSubstance extends BioChemEntity
{


    /**
        * The chemical composition describes the identity and relative ratio of the
 * chemical elements that make up the substance.
        * @param array|string|mixed $value
    * @return $this
    */
    public function chemicalComposition($value)
    {
        $this->setProperty('chemicalComposition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setChemicalComposition($value)
    {
        $this->setProperty('chemicalComposition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getChemicalComposition()
    {
       return $this->getProperty('chemicalComposition');
    }


    /**
        * Intended use of the BioChemEntity by humans.
        * @param array|string|mixed $value
    * @return $this
    */
    public function potentialUse($value)
    {
        $this->setProperty('potentialUse', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPotentialUse($value)
    {
        $this->setProperty('potentialUse', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPotentialUse()
    {
       return $this->getProperty('potentialUse');
    }


    /**
        * A role played by the BioChemEntity within a chemical context.
        * @param array|string|mixed $value
    * @return $this
    */
    public function chemicalRole($value)
    {
        $this->setProperty('chemicalRole', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setChemicalRole($value)
    {
        $this->setProperty('chemicalRole', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getChemicalRole()
    {
       return $this->getProperty('chemicalRole');
    }


}
