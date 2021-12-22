<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;

/**
* The mailing address.
* @see http://schema.org/PostalAddress
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint

*
*/
class PostalAddress extends ContactPoint
{

    /**
    * The post office box number for PO box addresses.
    * @param string|array $value
    * @return $this
    */
    public function postOfficeBoxNumber(?string $value)
    {
        $this->setProperty('postOfficeBoxNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPostOfficeBoxNumber(?string $value)
    {
        $this->setProperty('postOfficeBoxNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPostOfficeBoxNumber()
    {
       return $this->getProperty('postOfficeBoxNumber');
    }

    /**
    * The street address. For example, 1600 Amphitheatre Pkwy.
    * @param string|array $value
    * @return $this
    */
    public function streetAddress(?string $value)
    {
        $this->setProperty('streetAddress', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setStreetAddress(?string $value)
    {
        $this->setProperty('streetAddress', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStreetAddress()
    {
       return $this->getProperty('streetAddress');
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
    * The region in which the locality is, and which is in the country. For example, California or another appropriate first-level <a href="https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country">Administrative division</a>
    * @param string|array $value
    * @return $this
    */
    public function addressRegion(?string $value)
    {
        $this->setProperty('addressRegion', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAddressRegion(?string $value)
    {
        $this->setProperty('addressRegion', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAddressRegion()
    {
       return $this->getProperty('addressRegion');
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
    * The locality in which the street address is, and which is in the region. For example, Mountain View.
    * @param string|array $value
    * @return $this
    */
    public function addressLocality(?string $value)
    {
        $this->setProperty('addressLocality', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAddressLocality(?string $value)
    {
        $this->setProperty('addressLocality', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAddressLocality()
    {
       return $this->getProperty('addressLocality');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\ContactPoint\\PostalAddress','Thing\\PostalAddress');

