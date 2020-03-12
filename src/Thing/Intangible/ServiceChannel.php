<?php declare(strict_types=1);
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
    * @param Service|array $value
    * @return $this
    */
    public function providesService(?Service $value)
    {
        $this->setProperty('providesService', $value);
        return $this;
    }
   /**
    * @param Service|array $value
    * @return $this
    */
    public function setProvidesService(?Service $value)
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
    * @param Place|array $value
    * @return $this
    */
    public function serviceLocation(?Place $value)
    {
        $this->setProperty('serviceLocation', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setServiceLocation(?Place $value)
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
    * @param PostalAddress|array $value
    * @return $this
    */
    public function servicePostalAddress(?PostalAddress $value)
    {
        $this->setProperty('servicePostalAddress', $value);
        return $this;
    }
   /**
    * @param PostalAddress|array $value
    * @return $this
    */
    public function setServicePostalAddress(?PostalAddress $value)
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
    */
    public function serviceUrl(?string $value)
    {
        $this->setProperty('serviceUrl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setServiceUrl(?string $value)
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
    * @param ContactPoint|array $value
    * @return $this
    */
    public function servicePhone(?ContactPoint $value)
    {
        $this->setProperty('servicePhone', $value);
        return $this;
    }
   /**
    * @param ContactPoint|array $value
    * @return $this
    */
    public function setServicePhone(?ContactPoint $value)
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
    * @param ContactPoint|array $value
    * @return $this
    */
    public function serviceSmsNumber(?ContactPoint $value)
    {
        $this->setProperty('serviceSmsNumber', $value);
        return $this;
    }
   /**
    * @param ContactPoint|array $value
    * @return $this
    */
    public function setServiceSmsNumber(?ContactPoint $value)
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
    * @param Duration|array $value
    * @return $this
    */
    public function processingTime(?Duration $value)
    {
        $this->setProperty('processingTime', $value);
        return $this;
    }
   /**
    * @param Duration|array $value
    * @return $this
    */
    public function setProcessingTime(?Duration $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\ServiceChannel','Thing\\ServiceChannel');

