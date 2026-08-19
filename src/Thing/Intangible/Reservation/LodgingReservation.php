<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
 * A reservation for lodging at a hotel, motel, inn, etc. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * @see https://schema.org/LodgingReservation
 * @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
 */
class LodgingReservation extends Reservation
{
    /**
     * A full description of the lodging unit.
     * @see https://schema.org/lodgingUnitDescription
     * @param string|array $value
     * @return $this
     */
    public function lodgingUnitDescription($value)
    {
        $this->setProperty('lodgingUnitDescription', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLodgingUnitDescription($value)
    {
        $this->setProperty('lodgingUnitDescription', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLodgingUnitDescription($value)
    {
        $current = $this->getProperty('lodgingUnitDescription');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('lodgingUnitDescription', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLodgingUnitDescription()
    {
        return $this->getProperty('lodgingUnitDescription');
    }
    /**
     * The number of children staying in the unit.
     * @see https://schema.org/numChildren
     * @param int|QuantitativeValue|array $value
     * @return $this
     */
    public function numChildren($value)
    {
        $this->setProperty('numChildren', $value);
        return $this;
    }

    /**
     * @param int|QuantitativeValue|array $value
     * @return $this
     */
    public function setNumChildren($value)
    {
        $this->setProperty('numChildren', $value);
        return $this;
    }

    /**
     * @param int|QuantitativeValue $value
     * @return $this
     */
    public function addNumChildren($value)
    {
        $current = $this->getProperty('numChildren');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numChildren', $current);
        return $this;
    }

    /**
     * @return int|QuantitativeValue|array
     */
    public function getNumChildren()
    {
        return $this->getProperty('numChildren');
    }
    /**
     * The number of adults staying in the unit.
     * @see https://schema.org/numAdults
     * @param int|QuantitativeValue|array $value
     * @return $this
     */
    public function numAdults($value)
    {
        $this->setProperty('numAdults', $value);
        return $this;
    }

    /**
     * @param int|QuantitativeValue|array $value
     * @return $this
     */
    public function setNumAdults($value)
    {
        $this->setProperty('numAdults', $value);
        return $this;
    }

    /**
     * @param int|QuantitativeValue $value
     * @return $this
     */
    public function addNumAdults($value)
    {
        $current = $this->getProperty('numAdults');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numAdults', $current);
        return $this;
    }

    /**
     * @return int|QuantitativeValue|array
     */
    public function getNumAdults()
    {
        return $this->getProperty('numAdults');
    }
    /**
     * The latest someone may check out of a lodging establishment.
     * @see https://schema.org/checkoutTime
     * @param mixed $value
     * @return $this
     */
    public function checkoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setCheckoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addCheckoutTime($value)
    {
        $current = $this->getProperty('checkoutTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('checkoutTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCheckoutTime()
    {
        return $this->getProperty('checkoutTime');
    }
    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     * @see https://schema.org/lodgingUnitType
     * @param string|QualitativeValue|array $value
     * @return $this
     */
    public function lodgingUnitType($value)
    {
        $this->setProperty('lodgingUnitType', $value);
        return $this;
    }

    /**
     * @param string|QualitativeValue|array $value
     * @return $this
     */
    public function setLodgingUnitType($value)
    {
        $this->setProperty('lodgingUnitType', $value);
        return $this;
    }

    /**
     * @param string|QualitativeValue $value
     * @return $this
     */
    public function addLodgingUnitType($value)
    {
        $current = $this->getProperty('lodgingUnitType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('lodgingUnitType', $current);
        return $this;
    }

    /**
     * @return string|QualitativeValue|array
     */
    public function getLodgingUnitType()
    {
        return $this->getProperty('lodgingUnitType');
    }
    /**
     * The earliest someone may check into a lodging establishment.
     * @see https://schema.org/checkinTime
     * @param mixed $value
     * @return $this
     */
    public function checkinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setCheckinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addCheckinTime($value)
    {
        $current = $this->getProperty('checkinTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('checkinTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCheckinTime()
    {
        return $this->getProperty('checkinTime');
    }
}
