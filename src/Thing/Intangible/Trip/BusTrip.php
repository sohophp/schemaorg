<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Trip;

use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\BusStation;
use Sohophp\SchemaOrg\Thing\Place\CivicStructure\BusStop;
/**
* A trip on a commercial bus line.
* @see http://schema.org/BusTrip
* @package Sohophp\SchemaOrg\Thing\Intangible\Trip
*/
class BusTrip extends Trip
{

     
     /**
     * The name of the bus (e.g. Bolt Express).
     * @param string $value
     * @return $this
     */

     public function busName(?string $value):self
     {
        $this->setProperty("busName",$value);
        return $this;
     }

     
     /**
     * The stop or station from which the bus departs.
     * @param BusStation|BusStop $value
     * @return $this
     */

     public function departureBusStop( $value):self
     {
        $this->setProperty("departureBusStop",$value);
        return $this;
     }

     
     /**
     * The stop or station from which the bus arrives.
     * @param BusStation|BusStop $value
     * @return $this
     */

     public function arrivalBusStop( $value):self
     {
        $this->setProperty("arrivalBusStop",$value);
        return $this;
     }

     
     /**
     * The unique identifier for the bus.
     * @param string $value
     * @return $this
     */

     public function busNumber(?string $value):self
     {
        $this->setProperty("busNumber",$value);
        return $this;
     }

     
}

