<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ServicePeriod;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DayOfWeek;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;

/**
 * ShippingDeliveryTime provides various pieces of information about delivery times for shipping.
 * @see https://schema.org/ShippingDeliveryTime
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class ShippingDeliveryTime extends StructuredValue
{
    /**
     * Order cutoff time allows merchants to describe the time after which they will no longer process orders received on that day. For orders processed after cutoff time, one day gets added to the delivery time estimate. This property is expected to be most typically used via the [[ShippingRateSettings]] publication pattern. The time is indicated using the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent 6:30 pm Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal Time (UTC).
     * @see https://schema.org/cutoffTime
     * @param mixed $value
     * @return $this
     */
    public function cutoffTime($value)
    {
        $this->setProperty('cutoffTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setCutoffTime($value)
    {
        $this->setProperty('cutoffTime', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addCutoffTime($value)
    {
        $current = $this->getProperty('cutoffTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('cutoffTime', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCutoffTime()
    {
        return $this->getProperty('cutoffTime');
    }
    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup. In the context of [[ShippingDeliveryTime]], Typical properties: minValue, maxValue, unitCode (d for DAY). This is by common convention assumed to mean business days (if a unitCode is used, coded as "d"), i.e. only counting days when the business normally operates. In the context of [[ShippingService]], use the [[ServicePeriod]] format, that contains the same information in a structured form, with cut-off time, business days and duration.
     * @see https://schema.org/handlingTime
     * @param QuantitativeValue|ServicePeriod|array $value
     * @return $this
     */
    public function handlingTime($value)
    {
        $this->setProperty('handlingTime', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|ServicePeriod|array $value
     * @return $this
     */
    public function setHandlingTime($value)
    {
        $this->setProperty('handlingTime', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|ServicePeriod $value
     * @return $this
     */
    public function addHandlingTime($value)
    {
        $current = $this->getProperty('handlingTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('handlingTime', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|ServicePeriod|array
     */
    public function getHandlingTime()
    {
        return $this->getProperty('handlingTime');
    }
    /**
     * The typical delay the order has been sent for delivery and the goods reach the final customer. In the context of [[ShippingDeliveryTime]], use the [[QuantitativeValue]]. Typical properties: minValue, maxValue, unitCode (d for DAY). In the context of [[ShippingConditions]], use the [[ServicePeriod]]. It has a duration (as a [[QuantitativeValue]]) and also business days and a cut-off time.
     * @see https://schema.org/transitTime
     * @param QuantitativeValue|ServicePeriod|array $value
     * @return $this
     */
    public function transitTime($value)
    {
        $this->setProperty('transitTime', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|ServicePeriod|array $value
     * @return $this
     */
    public function setTransitTime($value)
    {
        $this->setProperty('transitTime', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|ServicePeriod $value
     * @return $this
     */
    public function addTransitTime($value)
    {
        $current = $this->getProperty('transitTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('transitTime', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|ServicePeriod|array
     */
    public function getTransitTime()
    {
        return $this->getProperty('transitTime');
    }
    /**
     * Days of the week when the merchant typically operates, indicated via opening hours markup.
     * @see https://schema.org/businessDays
     * @param DayOfWeek|OpeningHoursSpecification|array $value
     * @return $this
     */
    public function businessDays($value)
    {
        $this->setProperty('businessDays', $value);
        return $this;
    }

    /**
     * @param DayOfWeek|OpeningHoursSpecification|array $value
     * @return $this
     */
    public function setBusinessDays($value)
    {
        $this->setProperty('businessDays', $value);
        return $this;
    }

    /**
     * @param DayOfWeek|OpeningHoursSpecification $value
     * @return $this
     */
    public function addBusinessDays($value)
    {
        $current = $this->getProperty('businessDays');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('businessDays', $current);
        return $this;
    }

    /**
     * @return DayOfWeek|OpeningHoursSpecification|array
     */
    public function getBusinessDays()
    {
        return $this->getProperty('businessDays');
    }
}
