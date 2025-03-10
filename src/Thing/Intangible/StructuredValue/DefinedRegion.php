<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A DefinedRegion is a geographic area defined by potentially arbitrary (rather
 * than political, administrative or natural geographical) criteria. Properties
 * are provided for defining a region by reference to sets of postal codes.
 * 
 * Examples: a delivery destination when shopping. Region where regional pricing
 * is configured.
 * 
 * Requirement 1:
 * Country: US
 * States: "NY", "CA"
 * 
 * Requirement 2:
 * Country: US
 * PostalCode Set: { [94000-94585], [97000, 97999], [13000, 13599]}
 * { [12345, 12345], [78945, 78945], }
 * Region = state, canton, prefecture, autonomous community...
* @see schema:DefinedRegion
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class DefinedRegion extends StructuredValue
{


    /**
        * The region in which the locality is, and which is in the country. For
 * example, California or another appropriate first-level [Administrative
 * division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
        * @param array|string|mixed $value
    * @return $this
    */
    public function addressRegion($value)
    {
        $this->setProperty('addressRegion', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAddressRegion($value)
    {
        $this->setProperty('addressRegion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAddressRegion()
    {
       return $this->getProperty('addressRegion');
    }


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
        * A defined range of postal codes.
        * @param array|string|mixed $value
    * @return $this
    */
    public function postalCodeRange($value)
    {
        $this->setProperty('postalCodeRange', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPostalCodeRange($value)
    {
        $this->setProperty('postalCodeRange', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPostalCodeRange()
    {
       return $this->getProperty('postalCodeRange');
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
        * A defined range of postal codes indicated by a common textual prefix. Used
 * for non-numeric systems such as UK.
        * @param array|string|mixed $value
    * @return $this
    */
    public function postalCodePrefix($value)
    {
        $this->setProperty('postalCodePrefix', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPostalCodePrefix($value)
    {
        $this->setProperty('postalCodePrefix', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPostalCodePrefix()
    {
       return $this->getProperty('postalCodePrefix');
    }


}
