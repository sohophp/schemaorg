<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
 * A reservation for lodging at a hotel, motel, inn, etc.<br/><br/>.
Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * @see http://schema.org/LodgingReservation
 */
class LodgingReservation extends Reservation
{
    /**
     * The number of children staying in the unit.
     *
     * @param int|QuantitativeValue $value
     *
     * @return $this
     */
    public function numChildren($value): self
    {
        $this->setProperty('numChildren', $value);

        return $this;
    }

    /**
     * A full description of the lodging unit.
     *
     * @param string $value
     *
     * @return $this
     */
    public function lodgingUnitDescription(?string $value): self
    {
        $this->setProperty('lodgingUnitDescription', $value);

        return $this;
    }

    /**
     * Textual description of the unit type (including suite vs. room, size of bed, etc.).
     *
     * @param QualitativeValue|string $value
     *
     * @return $this
     */
    public function lodgingUnitType($value): self
    {
        $this->setProperty('lodgingUnitType', $value);

        return $this;
    }

    /**
     * The number of adults staying in the unit.
     *
     * @param int|QuantitativeValue $value
     *
     * @return $this
     */
    public function numAdults($value): self
    {
        $this->setProperty('numAdults', $value);

        return $this;
    }
}
