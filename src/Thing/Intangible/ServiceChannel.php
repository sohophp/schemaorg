<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A means for accessing a service, e.g. a government office location, web site,
 * or phone number.
* @see schema:ServiceChannel
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ServiceChannel extends Intangible
{


    /**
        * The service provided by this channel.
        * @param array|string|mixed $value
    * @return $this
    */
    public function providesService($value)
    {
        $this->setProperty('providesService', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProvidesService($value)
    {
        $this->setProperty('providesService', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProvidesService()
    {
       return $this->getProperty('providesService');
    }


    /**
        * The website to access the service.
        * @param array|string|mixed $value
    * @return $this
    */
    public function serviceUrl($value)
    {
        $this->setProperty('serviceUrl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setServiceUrl($value)
    {
        $this->setProperty('serviceUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServiceUrl()
    {
       return $this->getProperty('serviceUrl');
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
        * The location (e.g. civic structure, local business, etc.) where a person can
 * go to access the service.
        * @param array|string|mixed $value
    * @return $this
    */
    public function serviceLocation($value)
    {
        $this->setProperty('serviceLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setServiceLocation($value)
    {
        $this->setProperty('serviceLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServiceLocation()
    {
       return $this->getProperty('serviceLocation');
    }


    /**
        * The address for accessing the service by mail.
        * @param array|string|mixed $value
    * @return $this
    */
    public function servicePostalAddress($value)
    {
        $this->setProperty('servicePostalAddress', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setServicePostalAddress($value)
    {
        $this->setProperty('servicePostalAddress', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServicePostalAddress()
    {
       return $this->getProperty('servicePostalAddress');
    }


    /**
        * The phone number to use to access the service.
        * @param array|string|mixed $value
    * @return $this
    */
    public function servicePhone($value)
    {
        $this->setProperty('servicePhone', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setServicePhone($value)
    {
        $this->setProperty('servicePhone', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServicePhone()
    {
       return $this->getProperty('servicePhone');
    }


    /**
        * Estimated processing time for the service using this channel.
        * @param array|string|mixed $value
    * @return $this
    */
    public function processingTime($value)
    {
        $this->setProperty('processingTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setProcessingTime($value)
    {
        $this->setProperty('processingTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProcessingTime()
    {
       return $this->getProperty('processingTime');
    }


    /**
        * The number to access the service by text message.
        * @param array|string|mixed $value
    * @return $this
    */
    public function serviceSmsNumber($value)
    {
        $this->setProperty('serviceSmsNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setServiceSmsNumber($value)
    {
        $this->setProperty('serviceSmsNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServiceSmsNumber()
    {
       return $this->getProperty('serviceSmsNumber');
    }


}
