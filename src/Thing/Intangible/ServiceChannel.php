<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;

/**
* A means for accessing a service, e.g. a government office location, web site, or phone number.
* @see http://schema.org/ServiceChannel
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class ServiceChannel extends Intangible
{

    /**
    * The service provided by this channel.
    * @param Service|array|string $value
    * @return $this
    * @deprecated use setProvidesService
    */
    public function providesService($value)
    {
        $this->setProperty('providesService', $value);
        return $this;
    }
   /**
    * @param Service|array|string $value
    * @return $this
    */
    public function setProvidesService($value)
    {
        $this->setProperty('providesService', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProvidesService()
    {
       return $this->getProperty('providesService');
    }

    /**
    * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setServiceLocation
    */
    public function serviceLocation($value)
    {
        $this->setProperty('serviceLocation', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setServiceLocation($value)
    {
        $this->setProperty('serviceLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceLocation()
    {
       return $this->getProperty('serviceLocation');
    }

    /**
    * The address for accessing the service by mail.
    * @param PostalAddress|array|string $value
    * @return $this
    * @deprecated use setServicePostalAddress
    */
    public function servicePostalAddress($value)
    {
        $this->setProperty('servicePostalAddress', $value);
        return $this;
    }
   /**
    * @param PostalAddress|array|string $value
    * @return $this
    */
    public function setServicePostalAddress($value)
    {
        $this->setProperty('servicePostalAddress', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServicePostalAddress()
    {
       return $this->getProperty('servicePostalAddress');
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
    * The website to access the service.
    * @param string|array $value
    * @return $this
    * @deprecated use setServiceUrl
    */
    public function serviceUrl($value)
    {
        $this->setProperty('serviceUrl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setServiceUrl($value)
    {
        $this->setProperty('serviceUrl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceUrl()
    {
       return $this->getProperty('serviceUrl');
    }

    /**
    * The phone number to use to access the service.
    * @param ContactPoint|array|string $value
    * @return $this
    * @deprecated use setServicePhone
    */
    public function servicePhone($value)
    {
        $this->setProperty('servicePhone', $value);
        return $this;
    }
   /**
    * @param ContactPoint|array|string $value
    * @return $this
    */
    public function setServicePhone($value)
    {
        $this->setProperty('servicePhone', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServicePhone()
    {
       return $this->getProperty('servicePhone');
    }

    /**
    * The number to access the service by text message.
    * @param ContactPoint|array|string $value
    * @return $this
    * @deprecated use setServiceSmsNumber
    */
    public function serviceSmsNumber($value)
    {
        $this->setProperty('serviceSmsNumber', $value);
        return $this;
    }
   /**
    * @param ContactPoint|array|string $value
    * @return $this
    */
    public function setServiceSmsNumber($value)
    {
        $this->setProperty('serviceSmsNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServiceSmsNumber()
    {
       return $this->getProperty('serviceSmsNumber');
    }

    /**
    * Estimated processing time for the service using this channel.
    * @param Duration|array|string $value
    * @return $this
    * @deprecated use setProcessingTime
    */
    public function processingTime($value)
    {
        $this->setProperty('processingTime', $value);
        return $this;
    }
   /**
    * @param Duration|array|string $value
    * @return $this
    */
    public function setProcessingTime($value)
    {
        $this->setProperty('processingTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProcessingTime()
    {
       return $this->getProperty('processingTime');
    }


}
