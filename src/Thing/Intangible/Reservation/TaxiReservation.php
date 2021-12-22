<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Place;

/**
* A reservation for a taxi.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
* @see http://schema.org/TaxiReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation

*
*/
class TaxiReservation extends Reservation
{

    /**
    * When a taxi will pickup a passenger or a rental car can be picked up.
    * @param |array $value
    * @return $this
    */
    public function pickupTime($value)
    {
        $this->setProperty('pickupTime', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setPickupTime($value)
    {
        $this->setProperty('pickupTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPickupTime()
    {
       return $this->getProperty('pickupTime');
    }

    /**
    * Number of people the reservation should accommodate.
    * @param QuantitativeValue|int|array $value
    * @return $this
    */
    public function partySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|int|array $value
    * @return $this
    */
    public function setPartySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPartySize()
    {
       return $this->getProperty('partySize');
    }

    /**
    * Where a taxi will pick up a passenger or a rental car can be picked up.
    * @param Place|array $value
    * @return $this
    */
    public function pickupLocation(?Place $value)
    {
        $this->setProperty('pickupLocation', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setPickupLocation(?Place $value)
    {
        $this->setProperty('pickupLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPickupLocation()
    {
       return $this->getProperty('pickupLocation');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Reservation\\TaxiReservation','Thing\\TaxiReservation');

