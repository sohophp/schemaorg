<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Place\Accommodation;

/**
 * A FloorPlan is an explicit representation of a collection of similar accommodations, allowing the provision of common information (room counts, sizes, layout diagrams) and offers for rental or sale. In typical use, some [[ApartmentComplex]] has an [[accommodationFloorPlan]] which is a [[FloorPlan]]. A FloorPlan is always in the context of a particular place, either a larger [[ApartmentComplex]] or a single [[Apartment]]. The visual/spatial aspects of a floor plan (i.e. room layout, [see wikipedia](https://en.wikipedia.org/wiki/Floor_plan)) can be indicated using [[image]].
 * @see https://schema.org/FloorPlan
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class FloorPlan extends Intangible
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
     * Number of partial bathrooms - The total number of half and ¼ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsPartial field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field).
     * @see https://schema.org/numberOfPartialBathrooms
     * @param mixed $value
     * @return $this
     */
    public function numberOfPartialBathrooms($value)
    {
        $this->setProperty('numberOfPartialBathrooms', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setNumberOfPartialBathrooms($value)
    {
        $this->setProperty('numberOfPartialBathrooms', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addNumberOfPartialBathrooms($value)
    {
        $current = $this->getProperty('numberOfPartialBathrooms');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfPartialBathrooms', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfPartialBathrooms()
    {
        return $this->getProperty('numberOfPartialBathrooms');
    }
    /**
     * Number of full bathrooms - The total number of full and ¾ bathrooms in an [[Accommodation]]. This corresponds to the [BathroomsFull field in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
     * @see https://schema.org/numberOfFullBathrooms
     * @param mixed $value
     * @return $this
     */
    public function numberOfFullBathrooms($value)
    {
        $this->setProperty('numberOfFullBathrooms', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setNumberOfFullBathrooms($value)
    {
        $this->setProperty('numberOfFullBathrooms', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addNumberOfFullBathrooms($value)
    {
        $current = $this->getProperty('numberOfFullBathrooms');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfFullBathrooms', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumberOfFullBathrooms()
    {
        return $this->getProperty('numberOfFullBathrooms');
    }
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
     * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
     * @see https://schema.org/amenityFeature
     * @param LocationFeatureSpecification|array $value
     * @return $this
     */
    public function amenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
     * @param LocationFeatureSpecification|array $value
     * @return $this
     */
    public function setAmenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
     * @param LocationFeatureSpecification $value
     * @return $this
     */
    public function addAmenityFeature($value)
    {
        $current = $this->getProperty('amenityFeature');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('amenityFeature', $current);
        return $this;
    }

    /**
     * @return LocationFeatureSpecification|array
     */
    public function getAmenityFeature()
    {
        return $this->getProperty('amenityFeature');
    }
    /**
     * The size of the accommodation, e.g. in square meter or squarefoot. Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard.
     * @see https://schema.org/floorSize
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function floorSize($value)
    {
        $this->setProperty('floorSize', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setFloorSize($value)
    {
        $this->setProperty('floorSize', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addFloorSize($value)
    {
        $current = $this->getProperty('floorSize');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('floorSize', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getFloorSize()
    {
        return $this->getProperty('floorSize');
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
     * A schematic image showing the floorplan layout.
     * @see https://schema.org/layoutImage
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function layoutImage($value)
    {
        $this->setProperty('layoutImage', $value);
        return $this;
    }

    /**
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function setLayoutImage($value)
    {
        $this->setProperty('layoutImage', $value);
        return $this;
    }

    /**
     * @param string|ImageObject $value
     * @return $this
     */
    public function addLayoutImage($value)
    {
        $current = $this->getProperty('layoutImage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('layoutImage', $current);
        return $this;
    }

    /**
     * @return string|ImageObject|array
     */
    public function getLayoutImage()
    {
        return $this->getProperty('layoutImage');
    }
    /**
     * The total integer number of bathrooms in some [[Accommodation]], following real estate conventions as [documented in RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field): "The simple sum of the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See also [[numberOfRooms]].
     * @see https://schema.org/numberOfBathroomsTotal
     * @param int|array $value
     * @return $this
     */
    public function numberOfBathroomsTotal($value)
    {
        $this->setProperty('numberOfBathroomsTotal', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setNumberOfBathroomsTotal($value)
    {
        $this->setProperty('numberOfBathroomsTotal', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addNumberOfBathroomsTotal($value)
    {
        $current = $this->getProperty('numberOfBathroomsTotal');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('numberOfBathroomsTotal', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getNumberOfBathroomsTotal()
    {
        return $this->getProperty('numberOfBathroomsTotal');
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
     * Indicates some accommodation that this floor plan describes.
     * @see https://schema.org/isPlanForApartment
     * @param Accommodation|array $value
     * @return $this
     */
    public function isPlanForApartment($value)
    {
        $this->setProperty('isPlanForApartment', $value);
        return $this;
    }

    /**
     * @param Accommodation|array $value
     * @return $this
     */
    public function setIsPlanForApartment($value)
    {
        $this->setProperty('isPlanForApartment', $value);
        return $this;
    }

    /**
     * @param Accommodation $value
     * @return $this
     */
    public function addIsPlanForApartment($value)
    {
        $current = $this->getProperty('isPlanForApartment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isPlanForApartment', $current);
        return $this;
    }

    /**
     * @return Accommodation|array
     */
    public function getIsPlanForApartment()
    {
        return $this->getProperty('isPlanForApartment');
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
