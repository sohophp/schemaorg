<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Quantity\Duration;

/**
 * A means for accessing a service, e.g. a government office location, web site, or phone number.
 * @see https://schema.org/ServiceChannel
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class ServiceChannel extends Intangible
{
    /**
     * A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     * @see https://schema.org/availableLanguage
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
     * @param string|Language $value
     * @return $this
     */
    public function addAvailableLanguage($value)
    {
        $current = $this->getProperty('availableLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getAvailableLanguage()
    {
        return $this->getProperty('availableLanguage');
    }
    /**
     * The number to access the service by text message.
     * @see https://schema.org/serviceSmsNumber
     * @param ContactPoint|array $value
     * @return $this
     */
    public function serviceSmsNumber($value)
    {
        $this->setProperty('serviceSmsNumber', $value);
        return $this;
    }

    /**
     * @param ContactPoint|array $value
     * @return $this
     */
    public function setServiceSmsNumber($value)
    {
        $this->setProperty('serviceSmsNumber', $value);
        return $this;
    }

    /**
     * @param ContactPoint $value
     * @return $this
     */
    public function addServiceSmsNumber($value)
    {
        $current = $this->getProperty('serviceSmsNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('serviceSmsNumber', $current);
        return $this;
    }

    /**
     * @return ContactPoint|array
     */
    public function getServiceSmsNumber()
    {
        return $this->getProperty('serviceSmsNumber');
    }
    /**
     * The phone number to use to access the service.
     * @see https://schema.org/servicePhone
     * @param ContactPoint|array $value
     * @return $this
     */
    public function servicePhone($value)
    {
        $this->setProperty('servicePhone', $value);
        return $this;
    }

    /**
     * @param ContactPoint|array $value
     * @return $this
     */
    public function setServicePhone($value)
    {
        $this->setProperty('servicePhone', $value);
        return $this;
    }

    /**
     * @param ContactPoint $value
     * @return $this
     */
    public function addServicePhone($value)
    {
        $current = $this->getProperty('servicePhone');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('servicePhone', $current);
        return $this;
    }

    /**
     * @return ContactPoint|array
     */
    public function getServicePhone()
    {
        return $this->getProperty('servicePhone');
    }
    /**
     * The address for accessing the service by mail.
     * @see https://schema.org/servicePostalAddress
     * @param PostalAddress|array $value
     * @return $this
     */
    public function servicePostalAddress($value)
    {
        $this->setProperty('servicePostalAddress', $value);
        return $this;
    }

    /**
     * @param PostalAddress|array $value
     * @return $this
     */
    public function setServicePostalAddress($value)
    {
        $this->setProperty('servicePostalAddress', $value);
        return $this;
    }

    /**
     * @param PostalAddress $value
     * @return $this
     */
    public function addServicePostalAddress($value)
    {
        $current = $this->getProperty('servicePostalAddress');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('servicePostalAddress', $current);
        return $this;
    }

    /**
     * @return PostalAddress|array
     */
    public function getServicePostalAddress()
    {
        return $this->getProperty('servicePostalAddress');
    }
    /**
     * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
     * @see https://schema.org/serviceLocation
     * @param Place|array $value
     * @return $this
     */
    public function serviceLocation($value)
    {
        $this->setProperty('serviceLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setServiceLocation($value)
    {
        $this->setProperty('serviceLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addServiceLocation($value)
    {
        $current = $this->getProperty('serviceLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('serviceLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getServiceLocation()
    {
        return $this->getProperty('serviceLocation');
    }
    /**
     * The website to access the service.
     * @see https://schema.org/serviceUrl
     * @param string|array $value
     * @return $this
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
     * @param string $value
     * @return $this
     */
    public function addServiceUrl($value)
    {
        $current = $this->getProperty('serviceUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('serviceUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getServiceUrl()
    {
        return $this->getProperty('serviceUrl');
    }
    /**
     * The service provided by this channel.
     * @see https://schema.org/providesService
     * @param Service|array $value
     * @return $this
     */
    public function providesService($value)
    {
        $this->setProperty('providesService', $value);
        return $this;
    }

    /**
     * @param Service|array $value
     * @return $this
     */
    public function setProvidesService($value)
    {
        $this->setProperty('providesService', $value);
        return $this;
    }

    /**
     * @param Service $value
     * @return $this
     */
    public function addProvidesService($value)
    {
        $current = $this->getProperty('providesService');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('providesService', $current);
        return $this;
    }

    /**
     * @return Service|array
     */
    public function getProvidesService()
    {
        return $this->getProperty('providesService');
    }
    /**
     * Estimated processing time for the service using this channel.
     * @see https://schema.org/processingTime
     * @param Duration|array $value
     * @return $this
     */
    public function processingTime($value)
    {
        $this->setProperty('processingTime', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setProcessingTime($value)
    {
        $this->setProperty('processingTime', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addProcessingTime($value)
    {
        $current = $this->getProperty('processingTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('processingTime', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getProcessingTime()
    {
        return $this->getProperty('processingTime');
    }
}
