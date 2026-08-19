<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty;

/**
  * A medical organization (physical or not), such as hospital, institution or
 * clinic.
  * @see schema:MedicalOrganization
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class MedicalOrganization extends Organization
{


  /**
      * Name or unique ID of network. (Networks are often reused across different
 * insurance plans.)
    * @param string|array $value
  * @return $this
  */
  public function healthPlanNetworkId($value)
  {
  $this->setProperty('healthPlanNetworkId', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHealthPlanNetworkId($value)
  {
  $this->setProperty('healthPlanNetworkId', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHealthPlanNetworkId($value)
  {
  $current = $this->getProperty('healthPlanNetworkId');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthPlanNetworkId', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHealthPlanNetworkId()
  {
  return $this->getProperty('healthPlanNetworkId');
  }


  /**
      * A medical specialty of the provider.
    * @param MedicalSpecialty|array $value
  * @return $this
  */
  public function medicalSpecialty($value)
  {
  $this->setProperty('medicalSpecialty', $value);
  return $this;
  }

  /**
  * @param MedicalSpecialty|array $value
  * @return $this
  */
  public function setMedicalSpecialty($value)
  {
  $this->setProperty('medicalSpecialty', $value);
  return $this;
  }

  /**
  * @param MedicalSpecialty $value
  * @return $this
  */
  public function addMedicalSpecialty($value)
  {
  $current = $this->getProperty('medicalSpecialty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('medicalSpecialty', $current);
  return $this;
  }

  /**
  * @return MedicalSpecialty|array
  */
  public function getMedicalSpecialty()
  {
  return $this->getProperty('medicalSpecialty');
  }


  /**
      * Whether the provider is accepting new patients.
    * @param bool|array $value
  * @return $this
  */
  public function isAcceptingNewPatients($value)
  {
  $this->setProperty('isAcceptingNewPatients', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setIsAcceptingNewPatients($value)
  {
  $this->setProperty('isAcceptingNewPatients', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addIsAcceptingNewPatients($value)
  {
  $current = $this->getProperty('isAcceptingNewPatients');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isAcceptingNewPatients', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getIsAcceptingNewPatients()
  {
  return $this->getProperty('isAcceptingNewPatients');
  }


}
