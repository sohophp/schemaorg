<?php
namespace Sohophp\SchemaOrg\Thing\Place\CivicStructure;

use Sohophp\SchemaOrg\Thing\Place\CivicStructure;

/**
* An airport.
* @see http://schema.org/Airport
* @package Sohophp\SchemaOrg\Thing\Place\CivicStructure

*
*/
class Airport extends CivicStructure
{

    /**
    * IATA identifier for an airline or airport.
    * @param string|array $value
    * @return $this
    */
    public function iataCode(?string $value)
    {
        $this->setProperty('iataCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIataCode(?string $value)
    {
        $this->setProperty('iataCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIataCode()
    {
       return $this->getProperty('iataCode');
    }

    /**
    * ICAO identifier for an airport.
    * @param string|array $value
    * @return $this
    */
    public function icaoCode(?string $value)
    {
        $this->setProperty('icaoCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setIcaoCode(?string $value)
    {
        $this->setProperty('icaoCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIcaoCode()
    {
       return $this->getProperty('icaoCode');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Place\\CivicStructure\\Airport','Thing\\Airport');

