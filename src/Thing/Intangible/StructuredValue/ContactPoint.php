<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* A contact point&#x2014;for example, a Customer Complaints department.
* @see schema:ContactPoint
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ContactPoint extends StructuredValue
{


    /**
        * An option available on this contact point (e.g. a toll-free number or support
 * for hearing-impaired callers).
        * @param array|string|mixed $value
    * @return $this
    */
    public function contactOption($value)
    {
        $this->setProperty('contactOption', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContactOption($value)
    {
        $this->setProperty('contactOption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContactOption()
    {
       return $this->getProperty('contactOption');
    }


    /**
        * A person or organization can have different contact points, for different
 * purposes. For example, a sales contact point, a PR contact point and so on.
 * This property is used to specify the kind of contact point.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contactType($value)
    {
        $this->setProperty('contactType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setContactType($value)
    {
        $this->setProperty('contactType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContactType()
    {
       return $this->getProperty('contactType');
    }


    /**
        * The geographic area where the service is provided.
        * @param array|string|mixed $value
    * @return $this
    */
    public function serviceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setServiceArea($value)
    {
        $this->setProperty('serviceArea', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServiceArea()
    {
       return $this->getProperty('serviceArea');
    }


    /**
        * The telephone number.
        * @param array|string|mixed $value
    * @return $this
    */
    public function telephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTelephone($value)
    {
        $this->setProperty('telephone', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTelephone()
    {
       return $this->getProperty('telephone');
    }


    /**
        * The fax number.
        * @param array|string|mixed $value
    * @return $this
    */
    public function faxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFaxNumber($value)
    {
        $this->setProperty('faxNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFaxNumber()
    {
       return $this->getProperty('faxNumber');
    }


    /**
        * A language someone may use with or at the item, service or place. Please use
 * one of the language codes from the [IETF BCP 47
 * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableLanguage()
    {
       return $this->getProperty('availableLanguage');
    }


    /**
        * The product or service this support contact point is related to (such as
 * product support for a particular product line). This can be a specific
 * product or product line (e.g. "iPhone") or a general category of products or
 * services (e.g. "smartphones").
        * @param array|string|mixed $value
    * @return $this
    */
    public function productSupported($value)
    {
        $this->setProperty('productSupported', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProductSupported($value)
    {
        $this->setProperty('productSupported', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductSupported()
    {
       return $this->getProperty('productSupported');
    }


    /**
        * The hours during which this service or contact is available.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hoursAvailable($value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHoursAvailable($value)
    {
        $this->setProperty('hoursAvailable', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHoursAvailable()
    {
       return $this->getProperty('hoursAvailable');
    }


    /**
        * The geographic area where a service or offered item is provided.
        * @param array|string|mixed $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAreaServed()
    {
       return $this->getProperty('areaServed');
    }


    /**
        * Email address.
        * @param array|string|mixed $value
    * @return $this
    */
    public function email($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEmail($value)
    {
        $this->setProperty('email', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmail()
    {
       return $this->getProperty('email');
    }


}
