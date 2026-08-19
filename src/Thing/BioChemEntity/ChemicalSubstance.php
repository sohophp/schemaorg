<?php
namespace Sohophp\SchemaOrg\Thing\BioChemEntity;

  use Sohophp\SchemaOrg\Thing\BioChemEntity;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

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
      * Intended use of the BioChemEntity by humans.
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
      * A role played by the BioChemEntity within a chemical context.
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


  /**
      * The chemical composition describes the identity and relative ratio of the
 * chemical elements that make up the substance.
    * @param string|array $value
  * @return $this
  */
  public function chemicalComposition($value)
  {
  $this->setProperty('chemicalComposition', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setChemicalComposition($value)
  {
  $this->setProperty('chemicalComposition', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addChemicalComposition($value)
  {
  $current = $this->getProperty('chemicalComposition');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('chemicalComposition', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getChemicalComposition()
  {
  return $this->getProperty('chemicalComposition');
  }


}
