<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A means for accessing a service, e.g. a government office location, web site, or phone number.
* @see schema:ServiceChannel
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ServiceChannel extends Intangible
{
   /**
        * The service provided by this channel.
        */
    protected $providesService = null;

   /**
        * The website to access the service.
        */
    protected $serviceUrl = null;

   /**
        * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
        */
    protected $availableLanguage = null;

   /**
        * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
        */
    protected $serviceLocation = null;

   /**
        * The address for accessing the service by mail.
        */
    protected $servicePostalAddress = null;

   /**
        * The phone number to use to access the service.
        */
    protected $servicePhone = null;

   /**
        * Estimated processing time for the service using this channel.
        */
    protected $processingTime = null;

   /**
        * The number to access the service by text message.
        */
    protected $serviceSmsNumber = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
