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
        * IATA identifier for an airline or airport.
        */
    protected $iataCode = null;

   /**
        * ICAO identifier for an airport.
        */
    protected $icaoCode = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
