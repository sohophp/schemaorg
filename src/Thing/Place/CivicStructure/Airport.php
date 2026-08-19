<?php
namespace Sohophp\SchemaOrg\Thing\Place\CivicStructure;

  use Sohophp\SchemaOrg\Thing\Place\CivicStructure;

/**
  * An airport.
  * @see schema:Airport
* @package Sohophp\SchemaOrg\Thing\Place\CivicStructure
*/
class Airport extends CivicStructure
{


  /**
      * ICAO identifier for an airport.
    * @param string|array $value
  * @return $this
  */
  public function icaoCode($value)
  {
  $this->setProperty('icaoCode', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setIcaoCode($value)
  {
  $this->setProperty('icaoCode', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addIcaoCode($value)
  {
  $current = $this->getProperty('icaoCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('icaoCode', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getIcaoCode()
  {
  return $this->getProperty('icaoCode');
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
