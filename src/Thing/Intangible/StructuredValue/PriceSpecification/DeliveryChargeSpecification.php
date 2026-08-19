<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
 * The price for the delivery of an offer using a particular delivery method.
 * @see https://schema.org/DeliveryChargeSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
 */
class DeliveryChargeSpecification extends PriceSpecification
{
    /**
     * The delivery method(s) to which the delivery charge or payment charge specification applies.
     * @see https://schema.org/appliesToDeliveryMethod
     * @param DeliveryMethod|array $value
     * @return $this
     */
    public function appliesToDeliveryMethod($value)
    {
        $this->setProperty('appliesToDeliveryMethod', $value);
        return $this;
    }

    /**
     * @param DeliveryMethod|array $value
     * @return $this
     */
    public function setAppliesToDeliveryMethod($value)
    {
        $this->setProperty('appliesToDeliveryMethod', $value);
        return $this;
    }

    /**
     * @param DeliveryMethod $value
     * @return $this
     */
    public function addAppliesToDeliveryMethod($value)
    {
        $current = $this->getProperty('appliesToDeliveryMethod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('appliesToDeliveryMethod', $current);
        return $this;
    }

    /**
     * @return DeliveryMethod|array
     */
    public function getAppliesToDeliveryMethod()
    {
        return $this->getProperty('appliesToDeliveryMethod');
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid. See also [[ineligibleRegion]].
     * @see https://schema.org/eligibleRegion
     * @param Place|string|GeoShape|array $value
     * @return $this
     */
    public function eligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }

    /**
     * @param Place|string|GeoShape|array $value
     * @return $this
     */
    public function setEligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }

    /**
     * @param Place|string|GeoShape $value
     * @return $this
     */
    public function addEligibleRegion($value)
    {
        $current = $this->getProperty('eligibleRegion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleRegion', $current);
        return $this;
    }

    /**
     * @return Place|string|GeoShape|array
     */
    public function getEligibleRegion()
    {
        return $this->getProperty('eligibleRegion');
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed. See also [[eligibleRegion]].
     * @see https://schema.org/ineligibleRegion
     * @param Place|string|GeoShape|array $value
     * @return $this
     */
    public function ineligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
     * @param Place|string|GeoShape|array $value
     * @return $this
     */
    public function setIneligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
     * @param Place|string|GeoShape $value
     * @return $this
     */
    public function addIneligibleRegion($value)
    {
        $current = $this->getProperty('ineligibleRegion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ineligibleRegion', $current);
        return $this;
    }

    /**
     * @return Place|string|GeoShape|array
     */
    public function getIneligibleRegion()
    {
        return $this->getProperty('ineligibleRegion');
    }
    /**
     * The geographic area where a service or offered item is provided.
     * @see https://schema.org/areaServed
     * @param GeoShape|AdministrativeArea|Place|string|array $value
     * @return $this
     */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
     * @param GeoShape|AdministrativeArea|Place|string|array $value
     * @return $this
     */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
     * @param GeoShape|AdministrativeArea|Place|string $value
     * @return $this
     */
    public function addAreaServed($value)
    {
        $current = $this->getProperty('areaServed');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('areaServed', $current);
        return $this;
    }

    /**
     * @return GeoShape|AdministrativeArea|Place|string|array
     */
    public function getAreaServed()
    {
        return $this->getProperty('areaServed');
    }
}
