<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Place;

/**
* A reservation for a rental car.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
* @see http://schema.org/RentalCarReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation

*
*/
class RentalCarReservation extends Reservation
{

    /**
    * When a taxi will pickup a passenger or a rental car can be picked up.
    * @param array|string $value
    * @return $this
    * @deprecated use setPickupTime
    */
    public function pickupTime($value)
    {
        $this->setProperty('pickupTime', $value);
        return $this;
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
    * @return $this|string|array
    */
    public function getPickupTime()
    {
       return $this->getProperty('pickupTime');
    }

    /**
    * Where a rental car can be dropped off.
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setDropoffLocation
    */
    public function dropoffLocation($value)
    {
        $this->setProperty('dropoffLocation', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setDropoffLocation($value)
    {
        $this->setProperty('dropoffLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDropoffLocation()
    {
       return $this->getProperty('dropoffLocation');
    }

    /**
    * When a rental car can be dropped off.
    * @param array|string $value
    * @return $this
    * @deprecated use setDropoffTime
    */
    public function dropoffTime($value)
    {
        $this->setProperty('dropoffTime', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setDropoffTime($value)
    {
        $this->setProperty('dropoffTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDropoffTime()
    {
       return $this->getProperty('dropoffTime');
    }

    /**
    * Where a taxi will pick up a passenger or a rental car can be picked up.
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setPickupLocation
    */
    public function pickupLocation($value)
    {
        $this->setProperty('pickupLocation', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setPickupLocation($value)
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
