<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* A reservation for air travel.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
* @see http://schema.org/FlightReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation

*
*/
class FlightReservation extends Reservation
{

    /**
    * The passenger's sequence number as assigned by the airline.
    * @param string|array $value
    * @return $this
    * @deprecated use setPassengerSequenceNumber
    */
    public function passengerSequenceNumber($value)
    {
        $this->setProperty('passengerSequenceNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPassengerSequenceNumber($value)
    {
        $this->setProperty('passengerSequenceNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPassengerSequenceNumber()
    {
       return $this->getProperty('passengerSequenceNumber');
    }

    /**
    * The type of security screening the passenger is subject to.
    * @param string|array $value
    * @return $this
    * @deprecated use setSecurityScreening
    */
    public function securityScreening($value)
    {
        $this->setProperty('securityScreening', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setSecurityScreening($value)
    {
        $this->setProperty('securityScreening', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSecurityScreening()
    {
       return $this->getProperty('securityScreening');
    }

    /**
    * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
    * @param string|QualitativeValue|array $value
    * @return $this
    * @deprecated use setPassengerPriorityStatus
    */
    public function passengerPriorityStatus($value)
    {
        $this->setProperty('passengerPriorityStatus', $value);
        return $this;
    }
   /**
    * @param string|QualitativeValue|array $value
    * @return $this
    */
    public function setPassengerPriorityStatus($value)
    {
        $this->setProperty('passengerPriorityStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPassengerPriorityStatus()
    {
       return $this->getProperty('passengerPriorityStatus');
    }

    /**
    * The airline-specific indicator of boarding order / preference.
    * @param string|array $value
    * @return $this
    * @deprecated use setBoardingGroup
    */
    public function boardingGroup($value)
    {
        $this->setProperty('boardingGroup', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBoardingGroup($value)
    {
        $this->setProperty('boardingGroup', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBoardingGroup()
    {
       return $this->getProperty('boardingGroup');
    }


}
