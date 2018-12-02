<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
/**
* A group of multiple reservations with common values for all sub-reservations.
* @see http://schema.org/ReservationPackage
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class ReservationPackage extends Reservation
{

     
     /**
     * The individual reservations included in the package. Typically a repeated property.
     * @param Reservation $value
     * @return $this
     */

     public function subReservation(?Reservation $value):self
     {
        $this->setProperty("subReservation",$value);
        return $this;
     }

     
}

