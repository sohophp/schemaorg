<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
 * The geographic coordinates of a place or event.
 * @see https://schema.org/GeoCoordinates
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class GeoCoordinates extends StructuredValue
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
     * The longitude of a location. For example ```-122.08585``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     * @see https://schema.org/longitude
     * @param string|array $value
     * @return $this
     */
    public function longitude($value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLongitude($value)
    {
        $this->setProperty('longitude', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLongitude($value)
    {
        $current = $this->getProperty('longitude');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('longitude', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLongitude()
    {
        return $this->getProperty('longitude');
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
    /**
     * The latitude of a location. For example ```37.42242``` ([WGS 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     * @see https://schema.org/latitude
     * @param string|array $value
     * @return $this
     */
    public function latitude($value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLatitude($value)
    {
        $this->setProperty('latitude', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLatitude($value)
    {
        $current = $this->getProperty('latitude');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('latitude', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLatitude()
    {
        return $this->getProperty('latitude');
    }
}
