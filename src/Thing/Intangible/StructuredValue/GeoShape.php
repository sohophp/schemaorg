<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
* The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude/longitude pairs. Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when writing a list of several such points.
* @see http://schema.org/GeoShape
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class GeoShape extends StructuredValue
{

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
    * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
    * @param string $value
    * @return $this
    */
    public function circle(?string $value)
    {
        $this->setProperty('circle', $value);
        return $this;
    }

    /**
    * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
    * @param string $value
    * @return $this
    */
    public function box(?string $value)
    {
        $this->setProperty('box', $value);
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

    /**
    * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
    * @param string $value
    * @return $this
    */
    public function polygon(?string $value)
    {
        $this->setProperty('polygon', $value);
        return $this;
    }

    /**
    * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
    * @param string $value
    * @return $this
    */
    public function line(?string $value)
    {
        $this->setProperty('line', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\GeoShape','Thing\\GeoShape');

