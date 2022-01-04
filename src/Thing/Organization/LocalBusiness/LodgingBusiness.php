<?php
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A lodging business, such as a motel, hotel, or inn.
* @see http://schema.org/LodgingBusiness
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness

*
*/
class LodgingBusiness extends LocalBusiness
{

    /**
    * An intended audience, i.e. a group for whom something was created.
    * @param Audience|array|string $value
    * @return $this
    * @deprecated use setAudience
    */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
   /**
    * @param Audience|array|string $value
    * @return $this
    */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }

    /**
    * The earliest someone may check into a lodging establishment.
    * @param array|string $value
    * @return $this
    * @deprecated use setCheckinTime
    */
    public function checkinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setCheckinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCheckinTime()
    {
       return $this->getProperty('checkinTime');
    }

    /**
    * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
    * @param string|bool|array $value
    * @return $this
    * @deprecated use setPetsAllowed
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
    * @return $this|string|array
    */
    public function getPetsAllowed()
    {
       return $this->getProperty('petsAllowed');
    }

    /**
    * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/inLanguage">inLanguage</a>
    * @param string|Language|array $value
    * @return $this
    * @deprecated use setAvailableLanguage
    */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }
   /**
    * @param string|Language|array $value
    * @return $this
    */
    public function setAvailableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableLanguage()
    {
       return $this->getProperty('availableLanguage');
    }

    /**
    * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
    * @param LocationFeatureSpecification|array|string $value
    * @return $this
    * @deprecated use setAmenityFeature
    */
    public function amenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }
   /**
    * @param LocationFeatureSpecification|array|string $value
    * @return $this
    */
    public function setAmenityFeature($value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAmenityFeature()
    {
       return $this->getProperty('amenityFeature');
    }

    /**
    * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
    * @param Rating|array|string $value
    * @return $this
    * @deprecated use setStarRating
    */
    public function starRating($value)
    {
        $this->setProperty('starRating', $value);
        return $this;
    }
   /**
    * @param Rating|array|string $value
    * @return $this
    */
    public function setStarRating($value)
    {
        $this->setProperty('starRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStarRating()
    {
       return $this->getProperty('starRating');
    }

    /**
    * The latest someone may check out of a lodging establishment.
    * @param array|string $value
    * @return $this
    * @deprecated use setCheckoutTime
    */
    public function checkoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setCheckoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCheckoutTime()
    {
       return $this->getProperty('checkoutTime');
    }

    /**
    * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setNumberOfRooms
    */
    public function numberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setNumberOfRooms($value)
    {
        $this->setProperty('numberOfRooms', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfRooms()
    {
       return $this->getProperty('numberOfRooms');
    }


}
