<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* A reservation for air travel.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
* @see http://schema.org/FlightReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class FlightReservation extends Reservation
{


    /**
        * The passenger's sequence number as assigned by the airline.
        * @param string|array|mixed $value
    * @return $this
    */
    public function passengerSequenceNumber($value)
    {
        $this->setProperty('passengerSequenceNumber', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPassengerSequenceNumber($value)
    {
        $this->setProperty('passengerSequenceNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPassengerSequenceNumber()
    {
       return $this->getProperty('passengerSequenceNumber');
    }


    /**
        * The type of security screening the passenger is subject to.
        * @param string|array|mixed $value
    * @return $this
    */
    public function securityScreening($value)
    {
        $this->setProperty('securityScreening', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSecurityScreening($value)
    {
        $this->setProperty('securityScreening', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSecurityScreening()
    {
       return $this->getProperty('securityScreening');
    }


    /**
        * The priority status assigned to a passenger for security or boarding (e.g.
 * FastTrack or Priority).
        * @param string|QualitativeValue|array|mixed $value
    * @return $this
    */
    public function passengerPriorityStatus($value)
    {
        $this->setProperty('passengerPriorityStatus', $value);
        return $this;
    }

    /**
    * @param string|QualitativeValue|array|mixed $value
    * @return $this
    */
    public function setPassengerPriorityStatus($value)
    {
        $this->setProperty('passengerPriorityStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPassengerPriorityStatus()
    {
       return $this->getProperty('passengerPriorityStatus');
    }


    /**
        * The airline-specific indicator of boarding order / preference.
        * @param string|array|mixed $value
    * @return $this
    */
    public function boardingGroup($value)
    {
        $this->setProperty('boardingGroup', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setBoardingGroup($value)
    {
        $this->setProperty('boardingGroup', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBoardingGroup()
    {
       return $this->getProperty('boardingGroup');
    }


}
