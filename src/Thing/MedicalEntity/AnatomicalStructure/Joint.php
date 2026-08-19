<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
  use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
  * The anatomical location at which two or more bones make contact.
  * @see schema:Joint
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
*/
class Joint extends AnatomicalStructure
{


  /**
      * The name given to how bone physically connects to each other.
    * @param string|array $value
  * @return $this
  */
  public function structuralClass($value)
  {
  $this->setProperty('structuralClass', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setStructuralClass($value)
  {
  $this->setProperty('structuralClass', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addStructuralClass($value)
  {
  $current = $this->getProperty('structuralClass');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('structuralClass', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getStructuralClass()
  {
  return $this->getProperty('structuralClass');
  }


  /**
      * The degree of mobility the joint allows.
    * @param MedicalEntity|string|array $value
  * @return $this
  */
  public function functionalClass($value)
  {
  $this->setProperty('functionalClass', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|string|array $value
  * @return $this
  */
  public function setFunctionalClass($value)
  {
  $this->setProperty('functionalClass', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|string $value
  * @return $this
  */
  public function addFunctionalClass($value)
  {
  $current = $this->getProperty('functionalClass');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('functionalClass', $current);
  return $this;
  }

  /**
  * @return MedicalEntity|string|array
  */
  public function getFunctionalClass()
  {
  return $this->getProperty('functionalClass');
  }


  /**
      * The biomechanical properties of the bone.
    * @param string|array $value
  * @return $this
  */
  public function biomechnicalClass($value)
  {
  $this->setProperty('biomechnicalClass', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setBiomechnicalClass($value)
  {
  $this->setProperty('biomechnicalClass', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addBiomechnicalClass($value)
  {
  $current = $this->getProperty('biomechnicalClass');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('biomechnicalClass', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getBiomechnicalClass()
  {
  return $this->getProperty('biomechnicalClass');
  }


}
