<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
* The geographic coordinates of a place or event.
* @see http://schema.org/GeoCoordinates
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class GeoCoordinates extends StructuredValue
{

    /**
    * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
    * @param string $value
    * @return $this
    */
    public function latitude(? $value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }

    /**
    * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
    * @param string $value
    * @return $this
    */
    public function longitude(?string $value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }

    /**
    * Physical address of the item.
    * @param string|PostalAddress $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * The country. For example, USA. You can also provide the two-letter <a href="http://en.wikipedia.org/wiki/ISO_3166-1">ISO 3166-1 alpha-2 country code</a>.
    * @param Country|string $value
    * @return $this
    */
    public function addressCountry($value)
    {
        $this->setProperty('addressCountry', $value);
        return $this;
    }

    /**
    * The postal code. For example, 94043.
    * @param string $value
    * @return $this
    */
    public function postalCode(?string $value)
    {
        $this->setProperty('postalCode', $value);
        return $this;
    }

    /**
    * The elevation of a location (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>). Values may be of the form 'NUMBER UNIT<em>OF</em>MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
    * @param string $value
    * @return $this
    */
    public function elevation(?string $value)
    {
        $this->setProperty('elevation', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\GeoCoordinates','Thing\\GeoCoordinates');

