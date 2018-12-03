<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
 * An entity holding detailed information about the available bed types, e.g. the quantity of twin beds for a hotel room. For the single case of just one bed of a certain type, you can use bed directly with a text. See also <a class="localLink" href="http://schema.org/BedType">BedType</a> (under development).
 *
 * @see http://schema.org/BedDetails
 */
class BedDetails extends Intangible
{
    /**
     * The quantity of the given bed type available in the HotelRoom, Suite, House, or Apartment.
     *
     * @param  $value
     *
     * @return $this
     */
    public function numberOfBeds($value): self
    {
        $this->setProperty('numberOfBeds', $value);

        return $this;
    }

    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed available in the quantity indicated by quantity.
     *
     * @param string $value
     *
     * @return $this
     */
    public function typeOfBed(?string $value): self
    {
        $this->setProperty('typeOfBed', $value);

        return $this;
    }
}
