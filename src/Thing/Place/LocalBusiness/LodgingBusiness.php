<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Place\LocalBusiness;

/**
* A lodging business, such as a motel, hotel, or inn.
* @see schema:LodgingBusiness
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness
*/
class LodgingBusiness extends LocalBusiness
{


    /**
        * An intended audience, i.e. a group for whom something was created.
        * @param array|string|mixed $value
    * @return $this
    */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }


    /**
        * A language someone may use with or at the item, service or place. Please use
 * one of the language codes from the [IETF BCP 47
 * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableLanguage()
    {
       return $this->getProperty('availableLanguage');
    }


    /**
        * The latest someone may check out of a lodging establishment.
        * @param array|string|mixed $value
    * @return $this
    */
    public function checkoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCheckoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCheckoutTime()
    {
       return $this->getProperty('checkoutTime');
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
        * An official rating for a lodging business or food establishment, e.g. from
 * national associations or standards bodies. Use the author property to
 * indicate the rating organization, e.g. as an Organization with name such as
 * (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
        * @param array|string|mixed $value
    * @return $this
    */
    public function starRating($value)
    {
        $this->setProperty('starRating', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStarRating($value)
    {
        $this->setProperty('starRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStarRating()
    {
       return $this->getProperty('starRating');
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
        * The earliest someone may check into a lodging establishment.
        * @param array|string|mixed $value
    * @return $this
    */
    public function checkinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCheckinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCheckinTime()
    {
       return $this->getProperty('checkinTime');
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


}
