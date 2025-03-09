<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
* A reservation for a taxi.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use [[Offer]].
* @see schema:TaxiReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class TaxiReservation extends Reservation
{
   /**
        * Number of people the reservation should accommodate.
        */
    protected $partySize = null;

   /**
        * Where a taxi will pick up a passenger or a rental car can be picked up.
        */
    protected $pickupLocation = null;

   /**
        * When a taxi will pick up a passenger or a rental car can be picked up.
        */
    protected $pickupTime = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
