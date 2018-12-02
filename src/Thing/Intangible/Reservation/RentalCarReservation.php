<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Place;
/**
* A reservation for a rental car.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
* @see http://schema.org/RentalCarReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class RentalCarReservation extends Reservation
{

     
     /**
     * Where a rental car can be dropped off.
     * @param Place $value
     * @return $this
     */

     public function dropoffLocation(?Place $value):self
     {
        $this->setProperty("dropoffLocation",$value);
        return $this;
     }

     
     /**
     * When a rental car can be dropped off.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function dropoffTime(?\DateTimeInterface $value):self
     {
        $this->setProperty("dropoffTime",$value);
        return $this;
     }

     
}

