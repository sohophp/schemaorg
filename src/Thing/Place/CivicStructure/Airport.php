<?php
namespace Sohophp\SchemaOrg\Thing\Place\CivicStructure;

use Sohophp\SchemaOrg\Thing\Place\CivicStructure;

/**
* An airport.
* @see http://schema.org/Airport
* @package Sohophp\SchemaOrg\Thing\Place\CivicStructure
*/
class Airport extends CivicStructure
{


    /**
        * IATA identifier for an airline or airport.
        * @param string|array|mixed $value
    * @return $this
    */
    public function iataCode($value)
    {
        $this->setProperty('iataCode', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setIataCode($value)
    {
        $this->setProperty('iataCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIataCode()
    {
       return $this->getProperty('iataCode');
    }


    /**
        * ICAO identifier for an airport.
        * @param string|array|mixed $value
    * @return $this
    */
    public function icaoCode($value)
    {
        $this->setProperty('icaoCode', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setIcaoCode($value)
    {
        $this->setProperty('icaoCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIcaoCode()
    {
       return $this->getProperty('icaoCode');
    }


}
