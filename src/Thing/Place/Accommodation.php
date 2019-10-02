<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a mandatory requirement.
For more specific types of accommodations not defined in schema.org, one can use additionalType with external vocabularies.
<br /><br />
See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.
* @see http://schema.org/Accommodation
* @package Sohophp\SchemaOrg\Thing\Place
*/
class Accommodation extends Place
{

    /**
    * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
    * @param string|bool $value
    * @return $this
    */
    public function petsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
    * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
    * @param LocationFeatureSpecification $value
    * @return $this
    */
    public function amenityFeature(?LocationFeatureSpecification $value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * The size of the accommodation, e.g. in square meter or squarefoot.
Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard
    * @param QuantitativeValue $value
    * @return $this
    */
    public function floorSize(?QuantitativeValue $value)
    {
        $this->setProperty('floorSize', $value);
        return $this;
    }

    /**
    * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfRooms(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }

    /**
    * Indications regarding the permitted usage of the accommodation.
    * @param string $value
    * @return $this
    */
    public function permittedUsage(?string $value)
    {
        $this->setProperty('permittedUsage', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Place\\Accommodation','Thing\\Accommodation');

