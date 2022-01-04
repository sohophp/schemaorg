<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BoardingPolicyType;

/**
* An organization that provides flights for passengers.
* @see http://schema.org/Airline
* @package Sohophp\SchemaOrg\Thing\Organization

*
*/
class Airline extends Organization
{

    /**
    * IATA identifier for an airline or airport.
    * @param string|array $value
    * @return $this
    * @deprecated use setIataCode
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
    * @return $this|string|array
    */
    public function getIataCode()
    {
       return $this->getProperty('iataCode');
    }

    /**
    * The type of boarding policy used by the airline (e.g. zone-based or group-based).
    * @param BoardingPolicyType|array|string $value
    * @return $this
    * @deprecated use setBoardingPolicy
    */
    public function boardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }
   /**
    * @param BoardingPolicyType|array|string $value
    * @return $this
    */
    public function setBoardingPolicy($value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBoardingPolicy()
    {
       return $this->getProperty('boardingPolicy');
    }


}
