<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Place;
/**
* A reservation for a taxi.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
* @see http://schema.org/TaxiReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class TaxiReservation extends Reservation
{

     
     /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     * @param  $value
     * @return $this
     */

     public function pickupTime( $value):self
     {
        $this->setProperty("pickupTime",$value);
        return $this;
     }

     
     /**
     * Number of people the reservation should accommodate.
     * @param int|QuantitativeValue $value
     * @return $this
     */

     public function partySize( $value):self
     {
        $this->setProperty("partySize",$value);
        return $this;
     }

     
     /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     * @param Place $value
     * @return $this
     */

     public function pickupLocation(?Place $value):self
     {
        $this->setProperty("pickupLocation",$value);
        return $this;
     }

     
}

