<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* A reservation for air travel.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.
* @see http://schema.org/FlightReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class FlightReservation extends Reservation
{

    /**
    * The passenger's sequence number as assigned by the airline.
    * @param string $value
    * @return $this
    */
    public function passengerSequenceNumber(?string $value)
    {
        $this->setProperty('passengerSequenceNumber', $value);
        return $this;
    }

    /**
    * The type of security screening the passenger is subject to.
    * @param string $value
    * @return $this
    */
    public function securityScreening(?string $value)
    {
        $this->setProperty('securityScreening', $value);
        return $this;
    }

    /**
    * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
    * @param string|QualitativeValue $value
    * @return $this
    */
    public function passengerPriorityStatus($value)
    {
        $this->setProperty('passengerPriorityStatus', $value);
        return $this;
    }

    /**
    * The airline-specific indicator of boarding order / preference.
    * @param string $value
    * @return $this
    */
    public function boardingGroup(?string $value)
    {
        $this->setProperty('boardingGroup', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Reservation\\FlightReservation','Thing\\FlightReservation');

