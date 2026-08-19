<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
 * A reservation for air travel. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use [[Offer]].
 * @see https://schema.org/FlightReservation
 * @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
 */
class FlightReservation extends Reservation
{
    /**
     * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
     * @see https://schema.org/passengerPriorityStatus
     * @param string|QualitativeValue|array $value
     * @return $this
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
     * @param string|QualitativeValue $value
     * @return $this
     */
    public function addPassengerPriorityStatus($value)
    {
        $current = $this->getProperty('passengerPriorityStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('passengerPriorityStatus', $current);
        return $this;
    }

    /**
     * @return string|QualitativeValue|array
     */
    public function getPassengerPriorityStatus()
    {
        return $this->getProperty('passengerPriorityStatus');
    }
    /**
     * The passenger's sequence number as assigned by the airline.
     * @see https://schema.org/passengerSequenceNumber
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addPassengerSequenceNumber($value)
    {
        $current = $this->getProperty('passengerSequenceNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('passengerSequenceNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPassengerSequenceNumber()
    {
        return $this->getProperty('passengerSequenceNumber');
    }
    /**
     * The airline-specific indicator of boarding order / preference.
     * @see https://schema.org/boardingGroup
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addBoardingGroup($value)
    {
        $current = $this->getProperty('boardingGroup');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('boardingGroup', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBoardingGroup()
    {
        return $this->getProperty('boardingGroup');
    }
    /**
     * The type of security screening the passenger is subject to.
     * @see https://schema.org/securityScreening
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addSecurityScreening($value)
    {
        $current = $this->getProperty('securityScreening');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('securityScreening', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSecurityScreening()
    {
        return $this->getProperty('securityScreening');
    }
}
