<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

/**
* The mailing address.
* @see schema:PostalAddress
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint
*/
class PostalAddress extends ContactPoint
{
   /**
        * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country).
        */
    protected $addressRegion = null;

   /**
        * The postal code. For example, 94043.
        */
    protected $postalCode = null;

   /**
        * The country. Recommended to be in 2-letter [ISO 3166-1 alpha-2](http://en.wikipedia.org/wiki/ISO_3166-1) format, for example "US". For backward compatibility, a 3-letter [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3) country code such as "SGP" or a full country name such as "Singapore" can also be used.
        */
    protected $addressCountry = null;

   /**
        * The locality in which the street address is, and which is in the region. For example, Mountain View.
        */
    protected $addressLocality = null;

   /**
        * The street address. For example, 1600 Amphitheatre Pkwy.
        */
    protected $streetAddress = null;

   /**
        * The post office box number for PO box addresses.
        */
    protected $postOfficeBoxNumber = null;


    /**
    * @param array|string $value
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
    public function setAddressLocality($value)
    {
        $this->setProperty('addressLocality', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAddressLocality()
    {
       return $this->getProperty('addressLocality');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStreetAddress($value)
    {
        $this->setProperty('streetAddress', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStreetAddress()
    {
       return $this->getProperty('streetAddress');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPostOfficeBoxNumber($value)
    {
        $this->setProperty('postOfficeBoxNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPostOfficeBoxNumber()
    {
       return $this->getProperty('postOfficeBoxNumber');
    }


}
