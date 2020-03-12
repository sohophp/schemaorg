<?php declare(strict_types=1);
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
    * The type of boarding policy used by the airline (e.g. zone-based or group-based).
    * @param BoardingPolicyType|array $value
    * @return $this
    */
    public function boardingPolicy(?BoardingPolicyType $value)
    {
        $this->setProperty('boardingPolicy', $value);
        return $this;
    }
   /**
    * @param BoardingPolicyType|array $value
    * @return $this
    */
    public function setBoardingPolicy(?BoardingPolicyType $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\Airline','Thing\\Airline');

