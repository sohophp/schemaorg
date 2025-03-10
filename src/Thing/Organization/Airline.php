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
        * @param array|string|mixed $value
    * @return $this
    */
    public function iataCode($value)
    {
        $this->setProperty('iataCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The type of boarding policy used by the airline (e.g. zone-based or
 * group-based).
        * @param array|string|mixed $value
    * @return $this
    */
    public function boardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
