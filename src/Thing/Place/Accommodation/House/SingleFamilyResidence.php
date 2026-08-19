<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Place\Accommodation\House;

use Sohophp\SchemaOrg\Thing\Place\Accommodation\House;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
 * Residence type: Single-family home.
 * @see https://schema.org/SingleFamilyResidence
 * @package Sohophp\SchemaOrg\Thing\Place\Accommodation\House
 */
class SingleFamilyResidence extends House
{
    /**
     * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business. Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
     * @see https://schema.org/numberOfRooms
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function numberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setNumberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addNumberOfRooms($value)
    {
        $current = $this->getProperty('numberOfRooms');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfRooms', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getNumberOfRooms()
    {
        return $this->getProperty('numberOfRooms');
    }
    /**
     * The allowed total occupancy for the accommodation in persons (including infants etc). For individual accommodations, this is not necessarily the legal maximum but defines the permitted usage as per the contractual agreement (e.g. a double room used by a single person). Typical unit code(s): C62 for person.
     * @see https://schema.org/occupancy
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function occupancy($value)
    {
        $this->setProperty('occupancy', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setOccupancy($value)
    {
        $this->setProperty('occupancy', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addOccupancy($value)
    {
        $current = $this->getProperty('occupancy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('occupancy', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getOccupancy()
    {
        return $this->getProperty('occupancy');
    }
}
