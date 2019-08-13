<?php declare(strict_types=1);
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
*/
class ContactPoint extends StructuredValue
{

    /**
    * The geographic area where the service is provided.
    * @param Place|AdministrativeArea|GeoShape $value
    * @return $this
    */
    public function serviceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
    * The hours during which this service or contact is available.
    * @param OpeningHoursSpecification $value
    * @return $this
    */
    public function hoursAvailable(?OpeningHoursSpecification $value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }

    /**
    * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
    * @param ContactPointOption $value
    * @return $this
    */
    public function contactOption(?ContactPointOption $value)
    {
        $this->setProperty('contactOption', $value);
        return $this;
    }

    /**
    * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/inLanguage">inLanguage</a>
    * @param string|Language $value
    * @return $this
    */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * The telephone number.
    * @param string $value
    * @return $this
    */
    public function telephone(?string $value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * Email address.
    * @param string $value
    * @return $this
    */
    public function email(?string $value)
    {
        $this->setProperty('email', $value);
        return $this;
    }

    /**
    * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
    * @param string $value
    * @return $this
    */
    public function contactType(?string $value)
    {
        $this->setProperty('contactType', $value);
        return $this;
    }

    /**
    * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
    * @param string|Product $value
    * @return $this
    */
    public function productSupported($value)
    {
        $this->setProperty('productSupported', $value);
        return $this;
    }

    /**
    * The fax number.
    * @param string $value
    * @return $this
    */
    public function faxNumber(?string $value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * The geographic area where a service or offered item is provided.
    * @param string|GeoShape|Place|AdministrativeArea $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\ContactPoint','Thing\\ContactPoint');

