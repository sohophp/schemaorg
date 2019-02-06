<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BoardingPolicyType;
/**
* An organization that provides flights for passengers.
* @see http://schema.org/Airline
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class Airline extends Organization
{

     
     /**
     * IATA identifier for an airline or airport.
     * @param string $value
     * @return $this
     */

     public function iataCode(?string $value):self
     {
        $this->setProperty("iataCode",$value);
        return $this;
     }

     
     /**
     * The type of boarding policy used by the airline (e.g. zone-based or group-based).
     * @param BoardingPolicyType $value
     * @return $this
     */

     public function boardingPolicy(?BoardingPolicyType $value):self
     {
        $this->setProperty("boardingPolicy",$value);
        return $this;
     }

     
}

