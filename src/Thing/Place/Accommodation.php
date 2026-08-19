<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\FloorPlan;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\BedDetails;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\BedType;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;

/**
 * An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a mandatory requirement. For more specific types of accommodations not defined in schema.org, one can use [[additionalType]] with external vocabularies. See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.
 * @see https://schema.org/Accommodation
 * @package Sohophp\SchemaOrg\Thing\Place
 */
class Accommodation extends Place
{
    /**
     * The year an [[Accommodation]] was constructed. This corresponds to the [YearBuilt field in RESO](https://ddwiki.reso.org/display/DDW17/YearBuilt+Field).
     * @see https://schema.org/yearBuilt
     * @param mixed $value
     * @return $this
     */
    public function yearBuilt($value)
    {
        $this->setProperty('yearBuilt', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setYearBuilt($value)
    {
        $this->setProperty('yearBuilt', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addYearBuilt($value)
    {
        $current = $this->getProperty('yearBuilt');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('yearBuilt', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearBuilt()
    {
        return $this->getProperty('yearBuilt');
    }
    /**
     * A floorplan of some [[Accommodation]].
     * @see https://schema.org/accommodationFloorPlan
     * @param FloorPlan|array $value
     * @return $this
     */
    public function accommodationFloorPlan($value)
    {
        $this->setProperty('accommodationFloorPlan', $value);
        return $this;
    }

    /**
     * @param FloorPlan|array $value
     * @return $this
     */
    public function setAccommodationFloorPlan($value)
    {
        $this->setProperty('accommodationFloorPlan', $value);
        return $this;
    }

    /**
     * @param FloorPlan $value
     * @return $this
     */
    public function addAccommodationFloorPlan($value)
    {
        $current = $this->getProperty('accommodationFloorPlan');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accommodationFloorPlan', $current);
        return $this;
    }

    /**
     * @return FloorPlan|array
     */
    public function getAccommodationFloorPlan()
    {
        return $this->getProperty('accommodationFloorPlan');
    }
    /**
     * Indications regarding the permitted usage of the accommodation.
     * @see https://schema.org/permittedUsage
     * @param string|array $value
     * @return $this
     */
    public function permittedUsage($value)
    {
        $this->setProperty('permittedUsage', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPermittedUsage($value)
    {
        $this->setProperty('permittedUsage', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPermittedUsage($value)
    {
        $current = $this->getProperty('permittedUsage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('permittedUsage', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPermittedUsage()
    {
        return $this->getProperty('permittedUsage');
    }
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
     * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
     * @see https://schema.org/leaseLength
     * @param QuantitativeValue|Duration|array $value
     * @return $this
     */
    public function leaseLength($value)
    {
        $this->setProperty('leaseLength', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Duration|array $value
     * @return $this
     */
    public function setLeaseLength($value)
    {
        $this->setProperty('leaseLength', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Duration $value
     * @return $this
     */
    public function addLeaseLength($value)
    {
        $current = $this->getProperty('leaseLength');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('leaseLength', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Duration|array
     */
    public function getLeaseLength()
    {
        return $this->getProperty('leaseLength');
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
     * The floor level for an [[Accommodation]] in a multi-storey building. Since counting systems [vary internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations), the local system should be used where possible.
     * @see https://schema.org/floorLevel
     * @param string|array $value
     * @return $this
     */
    public function floorLevel($value)
    {
        $this->setProperty('floorLevel', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setFloorLevel($value)
    {
        $this->setProperty('floorLevel', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFloorLevel($value)
    {
        $current = $this->getProperty('floorLevel');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('floorLevel', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getFloorLevel()
    {
        return $this->getProperty('floorLevel');
    }
    /**
     * Category of an [[Accommodation]], following real estate conventions, e.g. RESO (see [PropertySubType](https://ddwiki.reso.org/display/DDW17/PropertySubType+Field), and [PropertyType](https://ddwiki.reso.org/display/DDW17/PropertyType+Field) fields for suggested values).
     * @see https://schema.org/accommodationCategory
     * @param string|array $value
     * @return $this
     */
    public function accommodationCategory($value)
    {
        $this->setProperty('accommodationCategory', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAccommodationCategory($value)
    {
        $this->setProperty('accommodationCategory', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAccommodationCategory($value)
    {
        $current = $this->getProperty('accommodationCategory');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('accommodationCategory', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAccommodationCategory()
    {
        return $this->getProperty('accommodationCategory');
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
}
