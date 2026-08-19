<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\Service;
  use Sohophp\SchemaOrg\Thing\Product;

/**
  * A structured value providing information about when a certain organization or
 * person owned a certain product.
  * @see schema:OwnershipInfo
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class OwnershipInfo extends StructuredValue
{


  /**
      * The date and time of obtaining the product.
    * @param mixed $value
  * @return $this
  */
  public function ownedFrom($value)
  {
  $this->setProperty('ownedFrom', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setOwnedFrom($value)
  {
  $this->setProperty('ownedFrom', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addOwnedFrom($value)
  {
  $current = $this->getProperty('ownedFrom');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('ownedFrom', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getOwnedFrom()
  {
  return $this->getProperty('ownedFrom');
  }


  /**
      * The date and time of giving up ownership on the product.
    * @param mixed $value
  * @return $this
  */
  public function ownedThrough($value)
  {
  $this->setProperty('ownedThrough', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setOwnedThrough($value)
  {
  $this->setProperty('ownedThrough', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addOwnedThrough($value)
  {
  $current = $this->getProperty('ownedThrough');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('ownedThrough', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getOwnedThrough()
  {
  return $this->getProperty('ownedThrough');
  }


  /**
      * The organization or person from which the product was acquired.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function acquiredFrom($value)
  {
  $this->setProperty('acquiredFrom', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setAcquiredFrom($value)
  {
  $this->setProperty('acquiredFrom', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addAcquiredFrom($value)
  {
  $current = $this->getProperty('acquiredFrom');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('acquiredFrom', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getAcquiredFrom()
  {
  return $this->getProperty('acquiredFrom');
  }


  /**
      * The product that this structured value is referring to.
    * @param Service|Product|array $value
  * @return $this
  */
  public function typeOfGood($value)
  {
  $this->setProperty('typeOfGood', $value);
  return $this;
  }

  /**
  * @param Service|Product|array $value
  * @return $this
  */
  public function setTypeOfGood($value)
  {
  $this->setProperty('typeOfGood', $value);
  return $this;
  }

  /**
  * @param Service|Product $value
  * @return $this
  */
  public function addTypeOfGood($value)
  {
  $current = $this->getProperty('typeOfGood');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('typeOfGood', $current);
  return $this;
  }

  /**
  * @return Service|Product|array
  */
  public function getTypeOfGood()
  {
  return $this->getProperty('typeOfGood');
  }


}
