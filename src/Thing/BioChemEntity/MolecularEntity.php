<?php
namespace Sohophp\SchemaOrg\Thing\BioChemEntity;

use Sohophp\SchemaOrg\Thing\BioChemEntity;

/**
* Any constitutionally or isotopically distinct atom, molecule, ion, ion pair, radical, radical ion, complex, conformer etc., identifiable as a separately distinguishable entity.
* @see schema:MolecularEntity
* @package Sohophp\SchemaOrg\Thing\BioChemEntity
*/
class MolecularEntity extends BioChemEntity
{
   /**
        * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings.  Double bond stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
        */
    protected $smiles = null;

   /**
        * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form '&lt;Number&gt; &lt;unit&gt;', for example '12 amu' or as '&lt;QuantitativeValue&gt;.
        */
    protected $molecularWeight = null;

   /**
        * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
        */
    protected $iupacName = null;

   /**
        * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the form '&lt;Number&gt; &lt;unit&gt;', for example '770.230488 g/mol' or as '&lt;QuantitativeValue&gt;.
        */
    protected $monoisotopicMolecularWeight = null;

   /**
        * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse data compilations.
        */
    protected $inChI = null;

   /**
        * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
        */
    protected $inChIKey = null;

   /**
        * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
        */
    protected $molecularFormula = null;

   /**
        * Intended use of the BioChemEntity by humans.
        */
    protected $potentialUse = null;

   /**
        * A role played by the BioChemEntity within a chemical context.
        */
    protected $chemicalRole = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
