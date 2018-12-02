<?php

declare (strict_types=1);

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
     * ICAO identifier for an airport.
     * @param string $value
     * @return $this
     */

     public function icaoCode(?string $value):self
     {
        $this->setProperty("icaoCode",$value);
        return $this;
     }

     
}

