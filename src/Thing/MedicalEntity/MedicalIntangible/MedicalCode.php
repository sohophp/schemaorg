<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
  * A code for a medical entity.
  * @see schema:MedicalCode
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class MedicalCode extends MedicalIntangible
{


  /**
      * A short textual code that uniquely identifies the value.
    * @param string|array $value
  * @return $this
  */
  public function codeValue($value)
  {
  $this->setProperty('codeValue', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCodeValue($value)
  {
  $this->setProperty('codeValue', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCodeValue($value)
  {
  $current = $this->getProperty('codeValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('codeValue', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCodeValue()
  {
  return $this->getProperty('codeValue');
  }


  /**
      * The coding system, e.g. 'ICD-10'.
    * @param string|array $value
  * @return $this
  */
  public function codingSystem($value)
  {
  $this->setProperty('codingSystem', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCodingSystem($value)
  {
  $this->setProperty('codingSystem', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCodingSystem($value)
  {
  $current = $this->getProperty('codingSystem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('codingSystem', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCodingSystem()
  {
  return $this->getProperty('codingSystem');
  }


}
