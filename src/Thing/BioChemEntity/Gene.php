<?php
namespace Sohophp\SchemaOrg\Thing\BioChemEntity;

  use Sohophp\SchemaOrg\Thing\BioChemEntity;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
  * A discrete unit of inheritance which affects one or more biological traits
 * (Source:
 * [https://en.wikipedia.org/wiki/Gene](https://en.wikipedia.org/wiki/Gene)).
 * Examples include FOXP2 (Forkhead box protein P2), SCARNA21 (small Cajal
 * body-specific RNA 21), A- (agouti genotype).
  * @see schema:Gene
* @package Sohophp\SchemaOrg\Thing\BioChemEntity
*/
class Gene extends BioChemEntity
{


  /**
      * Tissue, organ, biological sample, etc in which activity of this gene has been
 * observed experimentally. For example brain, digestive system.
    * @param AnatomicalSystem|DefinedTerm|BioChemEntity|AnatomicalStructure|array $value
  * @return $this
  */
  public function expressedIn($value)
  {
  $this->setProperty('expressedIn', $value);
  return $this;
  }

  /**
  * @param AnatomicalSystem|DefinedTerm|BioChemEntity|AnatomicalStructure|array $value
  * @return $this
  */
  public function setExpressedIn($value)
  {
  $this->setProperty('expressedIn', $value);
  return $this;
  }

  /**
  * @param AnatomicalSystem|DefinedTerm|BioChemEntity|AnatomicalStructure $value
  * @return $this
  */
  public function addExpressedIn($value)
  {
  $current = $this->getProperty('expressedIn');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('expressedIn', $current);
  return $this;
  }

  /**
  * @return AnatomicalSystem|DefinedTerm|BioChemEntity|AnatomicalStructure|array
  */
  public function getExpressedIn()
  {
  return $this->getProperty('expressedIn');
  }


  /**
      * A symbolic representation of a BioChemEntity. For example, a nucleotide
 * sequence of a Gene or an amino acid sequence of a Protein.
    * @param string|array $value
  * @return $this
  */
  public function hasBioPolymerSequence($value)
  {
  $this->setProperty('hasBioPolymerSequence', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHasBioPolymerSequence($value)
  {
  $this->setProperty('hasBioPolymerSequence', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHasBioPolymerSequence($value)
  {
  $current = $this->getProperty('hasBioPolymerSequence');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasBioPolymerSequence', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHasBioPolymerSequence()
  {
  return $this->getProperty('hasBioPolymerSequence');
  }


  /**
      * Another BioChemEntity encoded by this one.
    * @param BioChemEntity|array $value
  * @return $this
  */
  public function encodesBioChemEntity($value)
  {
  $this->setProperty('encodesBioChemEntity', $value);
  return $this;
  }

  /**
  * @param BioChemEntity|array $value
  * @return $this
  */
  public function setEncodesBioChemEntity($value)
  {
  $this->setProperty('encodesBioChemEntity', $value);
  return $this;
  }

  /**
  * @param BioChemEntity $value
  * @return $this
  */
  public function addEncodesBioChemEntity($value)
  {
  $current = $this->getProperty('encodesBioChemEntity');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('encodesBioChemEntity', $current);
  return $this;
  }

  /**
  * @return BioChemEntity|array
  */
  public function getEncodesBioChemEntity()
  {
  return $this->getProperty('encodesBioChemEntity');
  }


  /**
      * Another gene which is a variation of this one.
    * @param Gene|array $value
  * @return $this
  */
  public function alternativeOf($value)
  {
  $this->setProperty('alternativeOf', $value);
  return $this;
  }

  /**
  * @param Gene|array $value
  * @return $this
  */
  public function setAlternativeOf($value)
  {
  $this->setProperty('alternativeOf', $value);
  return $this;
  }

  /**
  * @param Gene $value
  * @return $this
  */
  public function addAlternativeOf($value)
  {
  $current = $this->getProperty('alternativeOf');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('alternativeOf', $current);
  return $this;
  }

  /**
  * @return Gene|array
  */
  public function getAlternativeOf()
  {
  return $this->getProperty('alternativeOf');
  }


}
