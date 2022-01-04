<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ContactPointOption;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Product;

/**
* A contact point&#x2014;for example, a Customer Complaints department.
* @see http://schema.org/ContactPoint
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class ContactPoint extends StructuredValue
{

    /**
    * The geographic area where the service is provided.
    * @param Place|AdministrativeArea|GeoShape|array|string $value
    * @return $this
    * @deprecated use setServiceArea
    */
    public function serviceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }
   /**
    * @param Place|AdministrativeArea|GeoShape|array|string $value
    * @return $this
    */
    public function setServiceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceArea()
    {
       return $this->getProperty('serviceArea');
    }

    /**
    * The hours during which this service or contact is available.
    * @param OpeningHoursSpecification|array|string $value
    * @return $this
    * @deprecated use setHoursAvailable
    */
    public function hoursAvailable($value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }
   /**
    * @param OpeningHoursSpecification|array|string $value
    * @return $this
    */
    public function setHoursAvailable($value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHoursAvailable()
    {
       return $this->getProperty('hoursAvailable');
    }

    /**
    * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
    * @param ContactPointOption|array|string $value
    * @return $this
    * @deprecated use setContactOption
    */
    public function contactOption($value)
    {
        $this->setProperty('contactOption', $value);
        return $this;
    }
   /**
    * @param ContactPointOption|array|string $value
    * @return $this
    */
    public function setContactOption($value)
    {
        $this->setProperty('contactOption', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContactOption()
    {
       return $this->getProperty('contactOption');
    }

    /**
    * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/inLanguage">inLanguage</a>
    * @param string|Language|array $value
    * @return $this
    * @deprecated use setAvailableLanguage
    */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }
   /**
    * @param string|Language|array $value
    * @return $this
    */
    public function setAvailableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableLanguage()
    {
       return $this->getProperty('availableLanguage');
    }

    /**
    * The telephone number.
    * @param string|array $value
    * @return $this
    * @deprecated use setTelephone
    */
    public function telephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTelephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTelephone()
    {
       return $this->getProperty('telephone');
    }

    /**
    * Email address.
    * @param string|array $value
    * @return $this
    * @deprecated use setEmail
    */
    public function email($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setEmail($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEmail()
    {
       return $this->getProperty('email');
    }

    /**
    * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
    * @param string|array $value
    * @return $this
    * @deprecated use setContactType
    */
    public function contactType($value)
    {
        $this->setProperty('contactType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setContactType($value)
    {
        $this->setProperty('contactType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContactType()
    {
       return $this->getProperty('contactType');
    }

    /**
    * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
    * @param string|Product|array $value
    * @return $this
    * @deprecated use setProductSupported
    */
    public function productSupported($value)
    {
        $this->setProperty('productSupported', $value);
        return $this;
    }
   /**
    * @param string|Product|array $value
    * @return $this
    */
    public function setProductSupported($value)
    {
        $this->setProperty('productSupported', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProductSupported()
    {
       return $this->getProperty('productSupported');
    }

    /**
    * The fax number.
    * @param string|array $value
    * @return $this
    * @deprecated use setFaxNumber
    */
    public function faxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFaxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFaxNumber()
    {
       return $this->getProperty('faxNumber');
    }

    /**
    * The geographic area where a service or offered item is provided.
    * @param string|GeoShape|Place|AdministrativeArea|array $value
    * @return $this
    * @deprecated use setAreaServed
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }
   /**
    * @param string|GeoShape|Place|AdministrativeArea|array $value
    * @return $this
    */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAreaServed()
    {
       return $this->getProperty('areaServed');
    }


}
