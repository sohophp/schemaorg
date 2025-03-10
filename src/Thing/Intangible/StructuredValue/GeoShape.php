<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
* The geographic shape of a place. A GeoShape can be described using several
 * properties whose values are based on latitude/longitude pairs. Either
 * whitespace or commas can be used to separate latitude and longitude;
 * whitespace should be used when writing a list of several such points.
* @see http://schema.org/GeoShape
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class GeoShape extends StructuredValue
{


    /**
        * Physical address of the item.
        * @param string|PostalAddress|array|mixed $value
    * @return $this
    */
    public function address($value)
    {
        $this->setProperty('address', $value);
        return $this;
    }

    /**
    * @param string|PostalAddress|array|mixed $value
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
        * A circle is the circular region of a specified radius centered at a specified
 * latitude and longitude. A circle is expressed as a pair followed by a radius
 * in meters.
        * @param string|array|mixed $value
    * @return $this
    */
    public function circle($value)
    {
        $this->setProperty('circle', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCircle($value)
    {
        $this->setProperty('circle', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCircle()
    {
       return $this->getProperty('circle');
    }


    /**
        * A box is the area enclosed by the rectangle formed by two points. The first
 * point is the lower corner, the second point is the upper corner. A box is
 * expressed as two points separated by a space character.
        * @param string|array|mixed $value
    * @return $this
    */
    public function box($value)
    {
        $this->setProperty('box', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setBox($value)
    {
        $this->setProperty('box', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBox()
    {
       return $this->getProperty('box');
    }


    /**
        * The country. For example, USA. You can also provide the two-letter [ISO
 * 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
        * @param Country|string|array|mixed $value
    * @return $this
    */
    public function addressCountry($value)
    {
        $this->setProperty('addressCountry', $value);
        return $this;
    }

    /**
    * @param Country|string|array|mixed $value
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
        * The postal code. For example, 94043.
        * @param string|array|mixed $value
    * @return $this
    */
    public function postalCode($value)
    {
        $this->setProperty('postalCode', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The elevation of a location ([WGS
 * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of
 * the form 'NUMBER UNIT*OF*MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while
 * numbers alone should be assumed to be a value in meters.
        * @param string|array|mixed $value
    * @return $this
    */
    public function elevation($value)
    {
        $this->setProperty('elevation', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * A polygon is the area enclosed by a point-to-point path for which the
 * starting and ending points are the same. A polygon is expressed as a series
 * of four or more space delimited points where the first and final points are
 * identical.
        * @param string|array|mixed $value
    * @return $this
    */
    public function polygon($value)
    {
        $this->setProperty('polygon', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPolygon($value)
    {
        $this->setProperty('polygon', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPolygon()
    {
       return $this->getProperty('polygon');
    }


    /**
        * A line is a point-to-point path consisting of two or more points. A line is
 * expressed as a series of two or more point objects separated by space.
        * @param string|array|mixed $value
    * @return $this
    */
    public function line($value)
    {
        $this->setProperty('line', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setLine($value)
    {
        $this->setProperty('line', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLine()
    {
       return $this->getProperty('line');
    }


}
