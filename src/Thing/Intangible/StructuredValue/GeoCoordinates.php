<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* The geographic coordinates of a place or event.
* @see schema:GeoCoordinates
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class GeoCoordinates extends StructuredValue
{
   /**
        * The postal code. For example, 94043.
        */
    protected $postalCode = null;

   /**
        * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
        */
    protected $latitude = null;

   /**
        * Physical address of the item.
        */
    protected $address = null;

   /**
        * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
        */
    protected $elevation = null;

   /**
        * The country. Recommended to be in 2-letter [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US". For backward compatibility, a 3-letter [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such as "SGP" or a full country name such as "Singapore" can also be used.
        */
    protected $addressCountry = null;

   /**
        * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
        */
    protected $longitude = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPostalCode($value)
    {
        $this->setProperty('postalCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPostalCode()
    {
       return $this->getProperty('postalCode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLatitude($value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLatitude()
    {
       return $this->getProperty('latitude');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAddress($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAddress()
    {
       return $this->getProperty('address');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setElevation($value)
    {
        $this->setProperty('elevation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getElevation()
    {
       return $this->getProperty('elevation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAddressCountry($value)
    {
        $this->setProperty('addressCountry', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAddressCountry()
    {
       return $this->getProperty('addressCountry');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLongitude($value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLongitude()
    {
       return $this->getProperty('longitude');
    }


}
