<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Place\Residence;

use Sohophp\SchemaOrg\Thing\Place\Residence;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
 * Residence type: Apartment complex.
 * @see https://schema.org/ApartmentComplex
 * @package Sohophp\SchemaOrg\Thing\Place\Residence
 */
class ApartmentComplex extends Residence
{
    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
     * @see https://schema.org/petsAllowed
     * @param string|bool|array $value
     * @return $this
     */
    public function petsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
     * @param string|bool|array $value
     * @return $this
     */
    public function setPetsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
     * @param string|bool $value
     * @return $this
     */
    public function addPetsAllowed($value)
    {
        $current = $this->getProperty('petsAllowed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('petsAllowed', $current);
        return $this;
    }

    /**
     * @return string|bool|array
     */
    public function getPetsAllowed()
    {
        return $this->getProperty('petsAllowed');
    }
    /**
     * A page providing information on how to book a tour of some [[Place]], such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate setting, as well as other kinds of tours as appropriate.
     * @see https://schema.org/tourBookingPage
     * @param string|array $value
     * @return $this
     */
    public function tourBookingPage($value)
    {
        $this->setProperty('tourBookingPage', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTourBookingPage($value)
    {
        $this->setProperty('tourBookingPage', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTourBookingPage($value)
    {
        $current = $this->getProperty('tourBookingPage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('tourBookingPage', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTourBookingPage()
    {
        return $this->getProperty('tourBookingPage');
    }
    /**
     * Indicates the number of available accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAccommodationUnits]].
     * @see https://schema.org/numberOfAvailableAccommodationUnits
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function numberOfAvailableAccommodationUnits($value)
    {
        $this->setProperty('numberOfAvailableAccommodationUnits', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setNumberOfAvailableAccommodationUnits($value)
    {
        $this->setProperty('numberOfAvailableAccommodationUnits', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addNumberOfAvailableAccommodationUnits($value)
    {
        $current = $this->getProperty('numberOfAvailableAccommodationUnits');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfAvailableAccommodationUnits', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getNumberOfAvailableAccommodationUnits()
    {
        return $this->getProperty('numberOfAvailableAccommodationUnits');
    }
    /**
     * The total integer number of bedrooms in a some [[Accommodation]], [[ApartmentComplex]] or [[FloorPlan]].
     * @see https://schema.org/numberOfBedrooms
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function numberOfBedrooms($value)
    {
        $this->setProperty('numberOfBedrooms', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setNumberOfBedrooms($value)
    {
        $this->setProperty('numberOfBedrooms', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addNumberOfBedrooms($value)
    {
        $current = $this->getProperty('numberOfBedrooms');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfBedrooms', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getNumberOfBedrooms()
    {
        return $this->getProperty('numberOfBedrooms');
    }
    /**
     * Indicates the total (available plus unavailable) number of accommodation units in an [[ApartmentComplex]], or the number of accommodation units for a specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also [[numberOfAvailableAccommodationUnits]].
     * @see https://schema.org/numberOfAccommodationUnits
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function numberOfAccommodationUnits($value)
    {
        $this->setProperty('numberOfAccommodationUnits', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setNumberOfAccommodationUnits($value)
    {
        $this->setProperty('numberOfAccommodationUnits', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addNumberOfAccommodationUnits($value)
    {
        $current = $this->getProperty('numberOfAccommodationUnits');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfAccommodationUnits', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getNumberOfAccommodationUnits()
    {
        return $this->getProperty('numberOfAccommodationUnits');
    }
}
