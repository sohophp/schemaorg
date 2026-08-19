<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\BioChemEntity;

use Sohophp\SchemaOrg\Thing\BioChemEntity;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
 * Any constitutionally or isotopically distinct atom, molecule, ion, ion pair, radical, radical ion, complex, conformer etc., identifiable as a separately distinguishable entity.
 * @see https://schema.org/MolecularEntity
 * @package Sohophp\SchemaOrg\Thing\BioChemEntity
 */
class MolecularEntity extends BioChemEntity
{
    /**
     * The empirical formula is the simplest whole number ratio of all the atoms in a molecule.
     * @see https://schema.org/molecularFormula
     * @param string|array $value
     * @return $this
     */
    public function molecularFormula($value)
    {
        $this->setProperty('molecularFormula', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setMolecularFormula($value)
    {
        $this->setProperty('molecularFormula', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addMolecularFormula($value)
    {
        $current = $this->getProperty('molecularFormula');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('molecularFormula', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getMolecularFormula()
    {
        return $this->getProperty('molecularFormula');
    }
    /**
     * The monoisotopic mass is the sum of the masses of the atoms in a molecule using the unbound, ground-state, rest mass of the principal (most abundant) isotope for each element instead of the isotopic average mass. Please include the units in the form '<Number> <unit>', for example '770.230488 g/mol' or as '<QuantitativeValue>.
     * @see https://schema.org/monoisotopicMolecularWeight
     * @param string|QuantitativeValue|array $value
     * @return $this
     */
    public function monoisotopicMolecularWeight($value)
    {
        $this->setProperty('monoisotopicMolecularWeight', $value);
        return $this;
    }

    /**
     * @param string|QuantitativeValue|array $value
     * @return $this
     */
    public function setMonoisotopicMolecularWeight($value)
    {
        $this->setProperty('monoisotopicMolecularWeight', $value);
        return $this;
    }

    /**
     * @param string|QuantitativeValue $value
     * @return $this
     */
    public function addMonoisotopicMolecularWeight($value)
    {
        $current = $this->getProperty('monoisotopicMolecularWeight');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('monoisotopicMolecularWeight', $current);
        return $this;
    }

    /**
     * @return string|QuantitativeValue|array
     */
    public function getMonoisotopicMolecularWeight()
    {
        return $this->getProperty('monoisotopicMolecularWeight');
    }
    /**
     * A specification in form of a line notation for describing the structure of chemical species using short ASCII strings. Double bond stereochemistry \ indicators may need to be escaped in the string in formats where the backslash is an escape character.
     * @see https://schema.org/smiles
     * @param string|array $value
     * @return $this
     */
    public function smiles($value)
    {
        $this->setProperty('smiles', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSmiles($value)
    {
        $this->setProperty('smiles', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSmiles($value)
    {
        $current = $this->getProperty('smiles');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('smiles', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSmiles()
    {
        return $this->getProperty('smiles');
    }
    /**
     * Non-proprietary identifier for molecular entity that can be used in printed and electronic data sources thus enabling easier linking of diverse data compilations.
     * @see https://schema.org/inChI
     * @param string|array $value
     * @return $this
     */
    public function inChI($value)
    {
        $this->setProperty('inChI', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setInChI($value)
    {
        $this->setProperty('inChI', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addInChI($value)
    {
        $current = $this->getProperty('inChI');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inChI', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getInChI()
    {
        return $this->getProperty('inChI');
    }
    /**
     * Intended use of the BioChemEntity by humans.
     * @see https://schema.org/potentialUse
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function potentialUse($value)
    {
        $this->setProperty('potentialUse', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function setPotentialUse($value)
    {
        $this->setProperty('potentialUse', $value);
        return $this;
    }

    /**
     * @param DefinedTerm $value
     * @return $this
     */
    public function addPotentialUse($value)
    {
        $current = $this->getProperty('potentialUse');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('potentialUse', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|array
     */
    public function getPotentialUse()
    {
        return $this->getProperty('potentialUse');
    }
    /**
     * This is the molecular weight of the entity being described, not of the parent. Units should be included in the form '<Number> <unit>', for example '12 amu' or as '<QuantitativeValue>.
     * @see https://schema.org/molecularWeight
     * @param QuantitativeValue|string|array $value
     * @return $this
     */
    public function molecularWeight($value)
    {
        $this->setProperty('molecularWeight', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|string|array $value
     * @return $this
     */
    public function setMolecularWeight($value)
    {
        $this->setProperty('molecularWeight', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|string $value
     * @return $this
     */
    public function addMolecularWeight($value)
    {
        $current = $this->getProperty('molecularWeight');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('molecularWeight', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|string|array
     */
    public function getMolecularWeight()
    {
        return $this->getProperty('molecularWeight');
    }
    /**
     * Systematic method of naming chemical compounds as recommended by the International Union of Pure and Applied Chemistry (IUPAC).
     * @see https://schema.org/iupacName
     * @param string|array $value
     * @return $this
     */
    public function iupacName($value)
    {
        $this->setProperty('iupacName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setIupacName($value)
    {
        $this->setProperty('iupacName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addIupacName($value)
    {
        $current = $this->getProperty('iupacName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('iupacName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIupacName()
    {
        return $this->getProperty('iupacName');
    }
    /**
     * InChIKey is a hashed version of the full InChI (using the SHA-256 algorithm).
     * @see https://schema.org/inChIKey
     * @param string|array $value
     * @return $this
     */
    public function inChIKey($value)
    {
        $this->setProperty('inChIKey', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setInChIKey($value)
    {
        $this->setProperty('inChIKey', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addInChIKey($value)
    {
        $current = $this->getProperty('inChIKey');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inChIKey', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getInChIKey()
    {
        return $this->getProperty('inChIKey');
    }
    /**
     * A role played by the BioChemEntity within a chemical context.
     * @see https://schema.org/chemicalRole
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function chemicalRole($value)
    {
        $this->setProperty('chemicalRole', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function setChemicalRole($value)
    {
        $this->setProperty('chemicalRole', $value);
        return $this;
    }

    /**
     * @param DefinedTerm $value
     * @return $this
     */
    public function addChemicalRole($value)
    {
        $current = $this->getProperty('chemicalRole');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('chemicalRole', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|array
     */
    public function getChemicalRole()
    {
        return $this->getProperty('chemicalRole');
    }
}
