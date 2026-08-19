<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
 * The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude/longitude pairs. Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when writing a list of several such points.
 * @see https://schema.org/GeoShape
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class GeoShape extends StructuredValue
{
    /**
     * Physical address of the item.
     * @see https://schema.org/address
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
     * @param string|PostalAddress $value
     * @return $this
     */
    public function addAddress($value)
    {
        $current = $this->getProperty('address');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('address', $current);
        return $this;
    }

    /**
     * @return string|PostalAddress|array
     */
    public function getAddress()
    {
        return $this->getProperty('address');
    }
    /**
     * A box is the area enclosed by the rectangle formed by two points. The first point is the lower corner, the second point is the upper corner. A box is expressed as two points separated by a space character.
     * @see https://schema.org/box
     * @param string|array $value
     * @return $this
     */
    public function box($value)
    {
        $this->setProperty('box', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBox($value)
    {
        $this->setProperty('box', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBox($value)
    {
        $current = $this->getProperty('box');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('box', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBox()
    {
        return $this->getProperty('box');
    }
    /**
     * The postal code. For example, 94043.
     * @see https://schema.org/postalCode
     * @param string|array $value
     * @return $this
     */
    public function postalCode($value)
    {
        $this->setProperty('postalCode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPostalCode($value)
    {
        $this->setProperty('postalCode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPostalCode($value)
    {
        $current = $this->getProperty('postalCode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('postalCode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPostalCode()
    {
        return $this->getProperty('postalCode');
    }
    /**
     * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
     * @see https://schema.org/line
     * @param string|array $value
     * @return $this
     */
    public function line($value)
    {
        $this->setProperty('line', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLine($value)
    {
        $this->setProperty('line', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLine($value)
    {
        $current = $this->getProperty('line');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('line', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLine()
    {
        return $this->getProperty('line');
    }
    /**
     * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
     * @see https://schema.org/polygon
     * @param string|array $value
     * @return $this
     */
    public function polygon($value)
    {
        $this->setProperty('polygon', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPolygon($value)
    {
        $this->setProperty('polygon', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPolygon($value)
    {
        $current = $this->getProperty('polygon');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('polygon', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPolygon()
    {
        return $this->getProperty('polygon');
    }
    /**
     * A circle is the circular region of a specified radius centered at a specified latitude and longitude. A circle is expressed as a pair followed by a radius in meters.
     * @see https://schema.org/circle
     * @param string|array $value
     * @return $this
     */
    public function circle($value)
    {
        $this->setProperty('circle', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCircle($value)
    {
        $this->setProperty('circle', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCircle($value)
    {
        $current = $this->getProperty('circle');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('circle', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCircle()
    {
        return $this->getProperty('circle');
    }
    /**
     * The elevation of a location ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft') while numbers alone should be assumed to be a value in meters.
     * @see https://schema.org/elevation
     * @param string|array $value
     * @return $this
     */
    public function elevation($value)
    {
        $this->setProperty('elevation', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setElevation($value)
    {
        $this->setProperty('elevation', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addElevation($value)
    {
        $current = $this->getProperty('elevation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('elevation', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getElevation()
    {
        return $this->getProperty('elevation');
    }
    /**
     * The country. Recommended to be in 2-letter [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US". For backward compatibility, a 3-letter [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such as "SGP" or a full country name such as "Singapore" can also be used.
     * @see https://schema.org/addressCountry
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
     * @param Country|string $value
     * @return $this
     */
    public function addAddressCountry($value)
    {
        $current = $this->getProperty('addressCountry');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('addressCountry', $current);
        return $this;
    }

    /**
     * @return Country|string|array
     */
    public function getAddressCountry()
    {
        return $this->getProperty('addressCountry');
    }
}
