<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Place;

/**
 * A reservation for a taxi. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use [[Offer]].
 * @see https://schema.org/TaxiReservation
 * @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
 */
class TaxiReservation extends Reservation
{
    /**
     * Number of people the reservation should accommodate.
     * @see https://schema.org/partySize
     * @param int|QuantitativeValue|array $value
     * @return $this
     */
    public function partySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }

    /**
     * @param int|QuantitativeValue|array $value
     * @return $this
     */
    public function setPartySize($value)
    {
        $this->setProperty('partySize', $value);
        return $this;
    }

    /**
     * @param int|QuantitativeValue $value
     * @return $this
     */
    public function addPartySize($value)
    {
        $current = $this->getProperty('partySize');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('partySize', $current);
        return $this;
    }

    /**
     * @return int|QuantitativeValue|array
     */
    public function getPartySize()
    {
        return $this->getProperty('partySize');
    }
    /**
     * When a taxi will pick up a passenger or a rental car can be picked up.
     * @see https://schema.org/pickupTime
     * @param mixed $value
     * @return $this
     */
    public function pickupTime($value)
    {
        $this->setProperty('pickupTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setPickupTime($value)
    {
        $this->setProperty('pickupTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addPickupTime($value)
    {
        $current = $this->getProperty('pickupTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pickupTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPickupTime()
    {
        return $this->getProperty('pickupTime');
    }
    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     * @see https://schema.org/pickupLocation
     * @param Place|array $value
     * @return $this
     */
    public function pickupLocation($value)
    {
        $this->setProperty('pickupLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setPickupLocation($value)
    {
        $this->setProperty('pickupLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addPickupLocation($value)
    {
        $current = $this->getProperty('pickupLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pickupLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getPickupLocation()
    {
        return $this->getProperty('pickupLocation');
    }
}
