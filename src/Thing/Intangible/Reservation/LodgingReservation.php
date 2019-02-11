<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* A reservation for lodging at a hotel, motel, inn, etc.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
* @see http://schema.org/LodgingReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class LodgingReservation extends Reservation
{

    /**
    * The earliest someone may check into a lodging establishment.
    * @param  $value
    * @return $this
    */
    public function checkinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }

    /**
    * The number of children staying in the unit.
    * @param int|QuantitativeValue $value
    * @return $this
    */
    public function numChildren($value)
    {
        $this->setProperty('numChildren', $value);
        return $this;
    }

    /**
    * A full description of the lodging unit.
    * @param string $value
    * @return $this
    */
    public function lodgingUnitDescription(?string $value)
    {
        $this->setProperty('lodgingUnitDescription', $value);
        return $this;
    }

    /**
    * The latest someone may check out of a lodging establishment.
    * @param  $value
    * @return $this
    */
    public function checkoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }

    /**
    * Textual description of the unit type (including suite vs. room, size of bed, etc.).
    * @param QualitativeValue|string $value
    * @return $this
    */
    public function lodgingUnitType($value)
    {
        $this->setProperty('lodgingUnitType', $value);
        return $this;
    }

    /**
    * The number of adults staying in the unit.
    * @param int|QuantitativeValue $value
    * @return $this
    */
    public function numAdults($value)
    {
        $this->setProperty('numAdults', $value);
        return $this;
    }


}

