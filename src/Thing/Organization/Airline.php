<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BoardingPolicyType;

/**
  * An organization that provides flights for passengers.
  * @see schema:Airline
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class Airline extends Organization
{


  /**
      * The type of boarding policy used by the airline (e.g. zone-based or
 * group-based).
    * @param BoardingPolicyType|array $value
  * @return $this
  */
  public function boardingPolicy($value)
  {
  $this->setProperty('boardingPolicy', $value);
  return $this;
  }

  /**
  * @param BoardingPolicyType|array $value
  * @return $this
  */
  public function setBoardingPolicy($value)
  {
  $this->setProperty('boardingPolicy', $value);
  return $this;
  }

  /**
  * @param BoardingPolicyType $value
  * @return $this
  */
  public function addBoardingPolicy($value)
  {
  $current = $this->getProperty('boardingPolicy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('boardingPolicy', $current);
  return $this;
  }

  /**
  * @return BoardingPolicyType|array
  */
  public function getBoardingPolicy()
  {
  return $this->getProperty('boardingPolicy');
  }


  /**
      * IATA identifier for an airline or airport.
    * @param string|array $value
  * @return $this
  */
  public function iataCode($value)
  {
  $this->setProperty('iataCode', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setIataCode($value)
  {
  $this->setProperty('iataCode', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addIataCode($value)
  {
  $current = $this->getProperty('iataCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('iataCode', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getIataCode()
  {
  return $this->getProperty('iataCode');
  }


}
