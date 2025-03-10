<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
* A reservation for a taxi.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
* @see schema:TaxiReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class TaxiReservation extends Reservation
{


    /**
        * Number of people the reservation should accommodate.
        * @param array|string|mixed $value
    * @return $this
    */
    public function partySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPartySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartySize()
    {
       return $this->getProperty('partySize');
    }


    /**
        * Where a taxi will pick up a passenger or a rental car can be picked up.
        * @param array|string|mixed $value
    * @return $this
    */
    public function pickupLocation($value)
    {
        $this->setProperty('pickupLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPickupLocation($value)
    {
        $this->setProperty('pickupLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPickupLocation()
    {
       return $this->getProperty('pickupLocation');
    }


    /**
        * When a taxi will pick up a passenger or a rental car can be picked up.
        * @param array|string|mixed $value
    * @return $this
    */
    public function pickupTime($value)
    {
        $this->setProperty('pickupTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPickupTime($value)
    {
        $this->setProperty('pickupTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPickupTime()
    {
       return $this->getProperty('pickupTime');
    }


}
