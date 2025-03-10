<?php
namespace Sohophp\SchemaOrg\Thing\BioChemEntity;

use Sohophp\SchemaOrg\Thing\BioChemEntity;

/**
* Any constitutionally or isotopically distinct atom, molecule, ion, ion pair,
 * radical, radical ion, complex, conformer etc., identifiable as a separately
 * distinguishable entity.
* @see schema:MolecularEntity
* @package Sohophp\SchemaOrg\Thing\BioChemEntity
*/
class MolecularEntity extends BioChemEntity
{


    /**
        * A specification in form of a line notation for describing the structure of
 * chemical species using short ASCII strings.  Double bond stereochemistry \
 * indicators may need to be escaped in the string in formats where the
 * backslash is an escape character.
        * @param array|string|mixed $value
    * @return $this
    */
    public function smiles($value)
    {
        $this->setProperty('smiles', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSmiles($value)
    {
        $this->setProperty('smiles', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSmiles()
    {
       return $this->getProperty('smiles');
    }


    /**
        * This is the molecular weight of the entity being described, not of the
 * parent. Units should be included in the form '<Number> <unit>', for example
 * '12 amu' or as '<QuantitativeValue>.
        * @param array|string|mixed $value
    * @return $this
    */
    public function molecularWeight($value)
    {
        $this->setProperty('molecularWeight', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMolecularWeight($value)
    {
        $this->setProperty('molecularWeight', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMolecularWeight()
    {
       return $this->getProperty('molecularWeight');
    }


    /**
        * Systematic method of naming chemical compounds as recommended by the
 * International Union of Pure and Applied Chemistry (IUPAC).
        * @param array|string|mixed $value
    * @return $this
    */
    public function iupacName($value)
    {
        $this->setProperty('iupacName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIupacName($value)
    {
        $this->setProperty('iupacName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIupacName()
    {
       return $this->getProperty('iupacName');
    }


    /**
        * The monoisotopic mass is the sum of the masses of the atoms in a molecule
 * using the unbound, ground-state, rest mass of the principal (most abundant)
 * isotope for each element instead of the isotopic average mass. Please include
 * the units in the form '<Number> <unit>', for example '770.230488 g/mol' or as
 * '<QuantitativeValue>.
        * @param array|string|mixed $value
    * @return $this
    */
    public function monoisotopicMolecularWeight($value)
    {
        $this->setProperty('monoisotopicMolecularWeight', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMonoisotopicMolecularWeight($value)
    {
        $this->setProperty('monoisotopicMolecularWeight', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMonoisotopicMolecularWeight()
    {
       return $this->getProperty('monoisotopicMolecularWeight');
    }


    /**
        * Non-proprietary identifier for molecular entity that can be used in printed
 * and electronic data sources thus enabling easier linking of diverse data
 * compilations.
        * @param array|string|mixed $value
    * @return $this
    */
    public function inChI($value)
    {
        $this->setProperty('inChI', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInChI($value)
    {
        $this->setProperty('inChI', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInChI()
    {
       return $this->getProperty('inChI');
    }


    /**
        * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
        * @param array|string|mixed $value
    * @return $this
    */
    public function inChIKey($value)
    {
        $this->setProperty('inChIKey', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInChIKey($value)
    {
        $this->setProperty('inChIKey', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInChIKey()
    {
       return $this->getProperty('inChIKey');
    }


    /**
        * The empirical formula is the simplest whole number ratio of all the atoms in
 * a molecule.
        * @param array|string|mixed $value
    * @return $this
    */
    public function molecularFormula($value)
    {
        $this->setProperty('molecularFormula', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMolecularFormula($value)
    {
        $this->setProperty('molecularFormula', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMolecularFormula()
    {
       return $this->getProperty('molecularFormula');
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
