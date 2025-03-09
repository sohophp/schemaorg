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
        */
    protected $audience = null;

   /**
        * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
        */
    protected $availableLanguage = null;

   /**
        * The latest someone may check out of a lodging establishment.
        */
    protected $checkoutTime = null;

   /**
        * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
        */
    protected $petsAllowed = null;

   /**
        * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
        */
    protected $starRating = null;

   /**
        * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
        */
    protected $amenityFeature = null;

   /**
        * The earliest someone may check into a lodging establishment.
        */
    protected $checkinTime = null;

   /**
        * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
        */
    protected $numberOfRooms = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
