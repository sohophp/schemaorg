<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
  use Sohophp\SchemaOrg\Thing\Organization;

/**
  * A credential is a certificate that is used to verify the identity of a person
 * or entity.
  * @see schema:Credential
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Credential extends CreativeWork
{


  /**
      * The duration of validity of a permit or similar thing.
    * @param Duration|array $value
  * @return $this
  */
  public function validFor($value)
  {
  $this->setProperty('validFor', $value);
  return $this;
  }

  /**
  * @param Duration|array $value
  * @return $this
  */
  public function setValidFor($value)
  {
  $this->setProperty('validFor', $value);
  return $this;
  }

  /**
  * @param Duration $value
  * @return $this
  */
  public function addValidFor($value)
  {
  $current = $this->getProperty('validFor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('validFor', $current);
  return $this;
  }

  /**
  * @return Duration|array
  */
  public function getValidFor()
  {
  return $this->getProperty('validFor');
  }


  /**
      * The category or type of credential being described, for example "degree”,
 * “certificate”, “badge”, or more specific term.
    * @param DefinedTerm|string|array $value
  * @return $this
  */
  public function credentialCategory($value)
  {
  $this->setProperty('credentialCategory', $value);
  return $this;
  }

  /**
  * @param DefinedTerm|string|array $value
  * @return $this
  */
  public function setCredentialCategory($value)
  {
  $this->setProperty('credentialCategory', $value);
  return $this;
  }

  /**
  * @param DefinedTerm|string $value
  * @return $this
  */
  public function addCredentialCategory($value)
  {
  $current = $this->getProperty('credentialCategory');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('credentialCategory', $current);
  return $this;
  }

  /**
  * @return DefinedTerm|string|array
  */
  public function getCredentialCategory()
  {
  return $this->getProperty('credentialCategory');
  }


  /**
      * The geographic area where the item is valid. Applies for example to a
 * [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]].
    * @param AdministrativeArea|array $value
  * @return $this
  */
  public function validIn($value)
  {
  $this->setProperty('validIn', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea|array $value
  * @return $this
  */
  public function setValidIn($value)
  {
  $this->setProperty('validIn', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea $value
  * @return $this
  */
  public function addValidIn($value)
  {
  $current = $this->getProperty('validIn');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('validIn', $current);
  return $this;
  }

  /**
  * @return AdministrativeArea|array
  */
  public function getValidIn()
  {
  return $this->getProperty('validIn');
  }


  /**
      * An organization that acknowledges the validity, value or utility of a
 * credential. Note: recognition may include a process of quality assurance or
 * accreditation.
    * @param Organization|array $value
  * @return $this
  */
  public function recognizedBy($value)
  {
  $this->setProperty('recognizedBy', $value);
  return $this;
  }

  /**
  * @param Organization|array $value
  * @return $this
  */
  public function setRecognizedBy($value)
  {
  $this->setProperty('recognizedBy', $value);
  return $this;
  }

  /**
  * @param Organization $value
  * @return $this
  */
  public function addRecognizedBy($value)
  {
  $current = $this->getProperty('recognizedBy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recognizedBy', $current);
  return $this;
  }

  /**
  * @return Organization|array
  */
  public function getRecognizedBy()
  {
  return $this->getProperty('recognizedBy');
  }


}
