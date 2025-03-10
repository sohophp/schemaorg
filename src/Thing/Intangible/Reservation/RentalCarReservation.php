<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;

/**
* A reservation for a rental car.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
* @see schema:RentalCarReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class RentalCarReservation extends Reservation
{


    /**
        * Where a rental car can be dropped off.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dropoffLocation($value)
    {
        $this->setProperty('dropoffLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDropoffLocation($value)
    {
        $this->setProperty('dropoffLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDropoffLocation()
    {
       return $this->getProperty('dropoffLocation');
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


    /**
        * When a rental car can be dropped off.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dropoffTime($value)
    {
        $this->setProperty('dropoffTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDropoffTime($value)
    {
        $this->setProperty('dropoffTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDropoffTime()
    {
       return $this->getProperty('dropoffTime');
    }


}
