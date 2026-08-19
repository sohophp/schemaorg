<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Grant;

  use Sohophp\SchemaOrg\Thing\Intangible\Grant;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
  * A monetary grant.
  * @see schema:MonetaryGrant
* @package Sohophp\SchemaOrg\Thing\Intangible\Grant
*/
class MonetaryGrant extends Grant
{


  /**
      * A person or organization that supports (sponsors) something through some kind
 * of financial contribution.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function funder($value)
  {
  $this->setProperty('funder', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setFunder($value)
  {
  $this->setProperty('funder', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addFunder($value)
  {
  $current = $this->getProperty('funder');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('funder', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getFunder()
  {
  return $this->getProperty('funder');
  }


  /**
      * The amount of money.
    * @param MonetaryAmount|array $value
  * @return $this
  */
  public function amount($value)
  {
  $this->setProperty('amount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|array $value
  * @return $this
  */
  public function setAmount($value)
  {
  $this->setProperty('amount', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount $value
  * @return $this
  */
  public function addAmount($value)
  {
  $current = $this->getProperty('amount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('amount', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|array
  */
  public function getAmount()
  {
  return $this->getProperty('amount');
  }


}
