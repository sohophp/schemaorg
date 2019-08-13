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
*/
class ServiceChannel extends Intangible
{

    /**
    * The service provided by this channel.
    * @param Service $value
    * @return $this
    */
    public function providesService(?Service $value)
    {
        $this->setProperty('providesService', $value);
        return $this;
    }

    /**
    * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
    * @param Place $value
    * @return $this
    */
    public function serviceLocation(?Place $value)
    {
        $this->setProperty('serviceLocation', $value);
        return $this;
    }

    /**
    * The address for accessing the service by mail.
    * @param PostalAddress $value
    * @return $this
    */
    public function servicePostalAddress(?PostalAddress $value)
    {
        $this->setProperty('servicePostalAddress', $value);
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
    * The website to access the service.
    * @param string $value
    * @return $this
    */
    public function serviceUrl(?string $value)
    {
        $this->setProperty('serviceUrl', $value);
        return $this;
    }

    /**
    * The phone number to use to access the service.
    * @param ContactPoint $value
    * @return $this
    */
    public function servicePhone(?ContactPoint $value)
    {
        $this->setProperty('servicePhone', $value);
        return $this;
    }

    /**
    * The number to access the service by text message.
    * @param ContactPoint $value
    * @return $this
    */
    public function serviceSmsNumber(?ContactPoint $value)
    {
        $this->setProperty('serviceSmsNumber', $value);
        return $this;
    }

    /**
    * Estimated processing time for the service using this channel.
    * @param Duration $value
    * @return $this
    */
    public function processingTime(?Duration $value)
    {
        $this->setProperty('processingTime', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\ServiceChannel','Thing\\ServiceChannel');

