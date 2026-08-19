<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
  * The legal availability status of a medical drug.
  * @see schema:DrugLegalStatus
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DrugLegalStatus extends MedicalIntangible
{


  /**
      * The location in which the status applies.
    * @param AdministrativeArea|array $value
  * @return $this
  */
  public function applicableLocation($value)
  {
  $this->setProperty('applicableLocation', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea|array $value
  * @return $this
  */
  public function setApplicableLocation($value)
  {
  $this->setProperty('applicableLocation', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea $value
  * @return $this
  */
  public function addApplicableLocation($value)
  {
  $current = $this->getProperty('applicableLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('applicableLocation', $current);
  return $this;
  }

  /**
  * @return AdministrativeArea|array
  */
  public function getApplicableLocation()
  {
  return $this->getProperty('applicableLocation');
  }


}
