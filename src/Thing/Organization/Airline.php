<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
* An organization that provides flights for passengers.
* @see schema:Airline
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class Airline extends Organization
{
   /**
        * IATA identifier for an airline or airport.
        */
    protected $iataCode = null;

   /**
        * The type of boarding policy used by the airline (e.g. zone-based or group-based).
        */
    protected $boardingPolicy = null;


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
    public function setBoardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBoardingPolicy()
    {
       return $this->getProperty('boardingPolicy');
    }


}
