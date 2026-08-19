<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Place\Accommodation;

use Sohophp\SchemaOrg\Thing\Place\Accommodation;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\BedDetails;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\BedType;

/**
 * A suite in a hotel or other public accommodation, denotes a class of luxury accommodations, the key feature of which is multiple rooms (source: Wikipedia, the free encyclopedia, see <a href="http://en.wikipedia.org/wiki/Suite_(hotel)">http://en.wikipedia.org/wiki/Suite_(hotel)</a>). See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.
 * @see https://schema.org/Suite
 * @package Sohophp\SchemaOrg\Thing\Place\Accommodation
 */
class Suite extends Accommodation
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
     * The type of bed or beds included in the accommodation. For the single case of just one bed of a certain type, you use bed directly with a text. If you want to indicate the quantity of a certain kind of bed, use an instance of BedDetails. For more detailed information, use the amenityFeature property.
     * @see https://schema.org/bed
     * @param BedDetails|BedType|string|array $value
     * @return $this
     */
    public function bed($value)
    {
        $this->setProperty('bed', $value);
        return $this;
    }

    /**
     * @param BedDetails|BedType|string|array $value
     * @return $this
     */
    public function setBed($value)
    {
        $this->setProperty('bed', $value);
        return $this;
    }

    /**
     * @param BedDetails|BedType|string $value
     * @return $this
     */
    public function addBed($value)
    {
        $current = $this->getProperty('bed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bed', $current);
        return $this;
    }

    /**
     * @return BedDetails|BedType|string|array
     */
    public function getBed()
    {
        return $this->getProperty('bed');
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
