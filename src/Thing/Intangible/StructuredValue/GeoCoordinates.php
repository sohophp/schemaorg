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
        * @param array|string|mixed $value
    * @return $this
    */
    public function postalCode($value)
    {
        $this->setProperty('postalCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The latitude of a location. For example ```37.42242``` ([WGS
 * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function latitude($value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Physical address of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The elevation of a location ([WGS
 * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of
 * the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
 * numbers alone should be assumed to be a value in meters.
        * @param array|string|mixed $value
    * @return $this
    */
    public function elevation($value)
    {
        $this->setProperty('elevation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The country. Recommended to be in 2-letter [ISO 3166-1
 * alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US".
 * For backward compatibility, a 3-letter [ISO 3166-1
 * alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such
 * as "SGP" or a full country name such as "Singapore" can also be used.
        * @param array|string|mixed $value
    * @return $this
    */
    public function addressCountry($value)
    {
        $this->setProperty('addressCountry', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The longitude of a location. For example ```-122.08585``` ([WGS
 * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
        * @param array|string|mixed $value
    * @return $this
    */
    public function longitude($value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
