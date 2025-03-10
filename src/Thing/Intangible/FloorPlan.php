<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A FloorPlan is an explicit representation of a collection of similar
 * accommodations, allowing the provision of common information (room counts,
 * sizes, layout diagrams) and offers for rental or sale. In typical use, some
 * [[ApartmentComplex]] has an [[accommodationFloorPlan]] which is a
 * [[FloorPlan]].  A FloorPlan is always in the context of a particular place,
 * either a larger [[ApartmentComplex]] or a single [[Apartment]]. The
 * visual/spatial aspects of a floor plan (i.e. room layout, [see
 * wikipedia](https://en.wikipedia.org/wiki/Floor_plan)) can be indicated using
 * [[image]].
* @see schema:FloorPlan
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class FloorPlan extends Intangible
{


    /**
        * Number of full bathrooms - The total number of full and ¾ bathrooms in an
 * [[Accommodation]]. This corresponds to the [BathroomsFull field in
 * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field).
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfFullBathrooms($value)
    {
        $this->setProperty('numberOfFullBathrooms', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfFullBathrooms($value)
    {
        $this->setProperty('numberOfFullBathrooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfFullBathrooms()
    {
       return $this->getProperty('numberOfFullBathrooms');
    }


    /**
        * The size of the accommodation, e.g. in square meter or squarefoot.
 * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for
 * square yard.
        * @param array|string|mixed $value
    * @return $this
    */
    public function floorSize($value)
    {
        $this->setProperty('floorSize', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFloorSize($value)
    {
        $this->setProperty('floorSize', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFloorSize()
    {
       return $this->getProperty('floorSize');
    }


    /**
        * Indicates the number of available accommodation units in an
 * [[ApartmentComplex]], or the number of accommodation units for a specific
 * [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
 * [[numberOfAccommodationUnits]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfAvailableAccommodationUnits($value)
    {
        $this->setProperty('numberOfAvailableAccommodationUnits', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfAvailableAccommodationUnits($value)
    {
        $this->setProperty('numberOfAvailableAccommodationUnits', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfAvailableAccommodationUnits()
    {
       return $this->getProperty('numberOfAvailableAccommodationUnits');
    }


    /**
        * Indicates the total (available plus unavailable) number of accommodation
 * units in an [[ApartmentComplex]], or the number of accommodation units for a
 * specific [[FloorPlan]] (within its specific [[ApartmentComplex]]). See also
 * [[numberOfAvailableAccommodationUnits]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfAccommodationUnits($value)
    {
        $this->setProperty('numberOfAccommodationUnits', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfAccommodationUnits($value)
    {
        $this->setProperty('numberOfAccommodationUnits', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfAccommodationUnits()
    {
       return $this->getProperty('numberOfAccommodationUnits');
    }


    /**
        * The total integer number of bathrooms in some [[Accommodation]], following
 * real estate conventions as [documented in
 * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field):
 * "The simple sum of the number of bathrooms. For example for a property with
 * two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be
 * 3.". See also [[numberOfRooms]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfBathroomsTotal($value)
    {
        $this->setProperty('numberOfBathroomsTotal', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfBathroomsTotal($value)
    {
        $this->setProperty('numberOfBathroomsTotal', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfBathroomsTotal()
    {
       return $this->getProperty('numberOfBathroomsTotal');
    }


    /**
        * A schematic image showing the floorplan layout.
        * @param array|string|mixed $value
    * @return $this
    */
    public function layoutImage($value)
    {
        $this->setProperty('layoutImage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLayoutImage($value)
    {
        $this->setProperty('layoutImage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLayoutImage()
    {
       return $this->getProperty('layoutImage');
    }


    /**
        * Indicates some accommodation that this floor plan describes.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isPlanForApartment($value)
    {
        $this->setProperty('isPlanForApartment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIsPlanForApartment($value)
    {
        $this->setProperty('isPlanForApartment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsPlanForApartment()
    {
       return $this->getProperty('isPlanForApartment');
    }


    /**
        * Number of partial bathrooms - The total number of half and ¼ bathrooms in an
 * [[Accommodation]]. This corresponds to the [BathroomsPartial field in
 * RESO](https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field).
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfPartialBathrooms($value)
    {
        $this->setProperty('numberOfPartialBathrooms', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfPartialBathrooms($value)
    {
        $this->setProperty('numberOfPartialBathrooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfPartialBathrooms()
    {
       return $this->getProperty('numberOfPartialBathrooms');
    }


    /**
        * Indicates whether pets are allowed to enter the accommodation or lodging
 * business. More detailed information can be put in a text value.
        * @param array|string|mixed $value
    * @return $this
    */
    public function petsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPetsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPetsAllowed()
    {
       return $this->getProperty('petsAllowed');
    }


    /**
        * An amenity feature (e.g. a characteristic or service) of the Accommodation.
 * This generic property does not make a statement about whether the feature is
 * included in an offer for the main accommodation or available at extra costs.
        * @param array|string|mixed $value
    * @return $this
    */
    public function amenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAmenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmenityFeature()
    {
       return $this->getProperty('amenityFeature');
    }


    /**
        * The number of rooms (excluding bathrooms and closets) of the accommodation or
 * lodging business.
 * Typical unit code(s): ROM for room or C62 for no unit. The type of room can
 * be put in the unitText property of the QuantitativeValue.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfRooms()
    {
       return $this->getProperty('numberOfRooms');
    }


    /**
        * The total integer number of bedrooms in a some [[Accommodation]],
 * [[ApartmentComplex]] or [[FloorPlan]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfBedrooms($value)
    {
        $this->setProperty('numberOfBedrooms', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfBedrooms($value)
    {
        $this->setProperty('numberOfBedrooms', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfBedrooms()
    {
       return $this->getProperty('numberOfBedrooms');
    }


}
