<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
* The geographic coordinates of a place or event.
* @see http://schema.org/GeoCoordinates
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class GeoCoordinates extends StructuredValue
{

    /**
    * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
    * @param string|array $value
    * @return $this
    */
    public function latitude(?string $value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setLatitude(?string $value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLatitude()
    {
       return $this->getProperty('latitude');
    }

    /**
    * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
    * @param string|array $value
    * @return $this
    */
    public function longitude(?string $value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setLongitude(?string $value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLongitude()
    {
       return $this->getProperty('longitude');
    }

    /**
    * Physical address of the item.
    * @param string|PostalAddress|array $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }
   /**
    * @param string|PostalAddress|array $value
    * @return $this
    */
    public function setAddress($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAddress()
    {
       return $this->getProperty('address');
    }

    /**
    * The country. For example, USA. You can also provide the two-letter <a href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO 3166-1 alpha-2 country code</a>.
    * @param Country|string|array $value
    * @return $this
    */
    public function addressCountry($value)
    {
        $this->setProperty('addressCountry', $value);
        return $this;
    }
   /**
    * @param Country|string|array $value
    * @return $this
    */
    public function setAddressCountry($value)
    {
        $this->setProperty('addressCountry', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAddressCountry()
    {
       return $this->getProperty('addressCountry');
    }

    /**
    * The postal code. For example, 94043.
    * @param string|array $value
    * @return $this
    */
    public function postalCode(?string $value)
    {
        $this->setProperty('postalCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPostalCode(?string $value)
    {
        $this->setProperty('postalCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPostalCode()
    {
       return $this->getProperty('postalCode');
    }

    /**
    * The elevation of a location (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>). Values may be of the form 'NUMBER UNIT<em>OF</em>MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
    * @param string|array $value
    * @return $this
    */
    public function elevation(?string $value)
    {
        $this->setProperty('elevation', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setElevation(?string $value)
    {
        $this->setProperty('elevation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getElevation()
    {
       return $this->getProperty('elevation');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\GeoCoordinates','Thing\\GeoCoordinates');

