<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* An accommodation is a place that can accommodate human beings, e.g. a hotel
 * room, a camping pitch, or a meeting room. Many accommodations are for
 * overnight stays, but this is not a mandatory requirement.
 * For more specific types of accommodations not defined in schema.org, one can
 * use additionalType with external vocabularies.
 * 
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
* @see http://schema.org/Accommodation
* @package Sohophp\SchemaOrg\Thing\Place
*/
class Accommodation extends Place
{


    /**
        * Indicates whether pets are allowed to enter the accommodation or lodging
 * business. More detailed information can be put in a text value.
        * @param string|bool|array|mixed $value
    * @return $this
    */
    public function petsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
    * @param string|bool|array|mixed $value
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
        * @param LocationFeatureSpecification|array|string|mixed $value
    * @return $this
    */
    public function amenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * @param LocationFeatureSpecification|array|string|mixed $value
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
        * The size of the accommodation, e.g. in square meter or squarefoot.
 * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for
 * square yard
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function floorSize($value)
    {
        $this->setProperty('floorSize', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
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
        * The number of rooms (excluding bathrooms and closets) of the accommodation or
 * lodging business.
 * Typical unit code(s): ROM for room or C62 for no unit. The type of room can
 * be put in the unitText property of the QuantitativeValue.
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function numberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
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
        * Indications regarding the permitted usage of the accommodation.
        * @param string|array|mixed $value
    * @return $this
    */
    public function permittedUsage($value)
    {
        $this->setProperty('permittedUsage', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPermittedUsage($value)
    {
        $this->setProperty('permittedUsage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPermittedUsage()
    {
       return $this->getProperty('permittedUsage');
    }


}
