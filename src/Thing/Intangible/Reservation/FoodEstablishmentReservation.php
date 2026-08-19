<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
 * A reservation to dine at a food-related business. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * @see https://schema.org/FoodEstablishmentReservation
 * @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
 */
class FoodEstablishmentReservation extends Reservation
{
    /**
     * The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. E.g. John wrote a book from January to *December*. For media, including audio and video, it's the time offset of the end of a clip within a larger file. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @see https://schema.org/endTime
     * @param mixed $value
     * @return $this
     */
    public function endTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setEndTime($value)
    {
        $this->setProperty('endTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addEndTime($value)
    {
        $current = $this->getProperty('endTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('endTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->getProperty('endTime');
    }
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
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. E.g. John wrote a book from *January* to December. For media, including audio and video, it's the time offset of the start of a clip within a larger file. Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.
     * @see https://schema.org/startTime
     * @param mixed $value
     * @return $this
     */
    public function startTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setStartTime($value)
    {
        $this->setProperty('startTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addStartTime($value)
    {
        $current = $this->getProperty('startTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('startTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->getProperty('startTime');
    }
}
