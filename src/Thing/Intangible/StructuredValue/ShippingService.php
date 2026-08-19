<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\MemberProgramTier;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ServicePeriod;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\FulfillmentTypeEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ShippingConditions;

/**
 * ShippingService represents the criteria used to determine if and how an offer could be shipped to a customer.
 * @see https://schema.org/ShippingService
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class ShippingService extends StructuredValue
{
    /**
     * The membership program tier(s) an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
     * @see https://schema.org/validForMemberTier
     * @param MemberProgramTier|array $value
     * @return $this
     */
    public function validForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
     * @param MemberProgramTier|array $value
     * @return $this
     */
    public function setValidForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
     * @param MemberProgramTier $value
     * @return $this
     */
    public function addValidForMemberTier($value)
    {
        $current = $this->getProperty('validForMemberTier');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validForMemberTier', $current);
        return $this;
    }

    /**
     * @return MemberProgramTier|array
     */
    public function getValidForMemberTier()
    {
        return $this->getProperty('validForMemberTier');
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
     * Type of fulfillment applicable to the [[ShippingService]].
     * @see https://schema.org/fulfillmentType
     * @param FulfillmentTypeEnumeration|array $value
     * @return $this
     */
    public function fulfillmentType($value)
    {
        $this->setProperty('fulfillmentType', $value);
        return $this;
    }

    /**
     * @param FulfillmentTypeEnumeration|array $value
     * @return $this
     */
    public function setFulfillmentType($value)
    {
        $this->setProperty('fulfillmentType', $value);
        return $this;
    }

    /**
     * @param FulfillmentTypeEnumeration $value
     * @return $this
     */
    public function addFulfillmentType($value)
    {
        $current = $this->getProperty('fulfillmentType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('fulfillmentType', $current);
        return $this;
    }

    /**
     * @return FulfillmentTypeEnumeration|array
     */
    public function getFulfillmentType()
    {
        return $this->getProperty('fulfillmentType');
    }
    /**
     * The conditions (constraints, price) applicable to the [[ShippingService]].
     * @see https://schema.org/shippingConditions
     * @param ShippingConditions|array $value
     * @return $this
     */
    public function shippingConditions($value)
    {
        $this->setProperty('shippingConditions', $value);
        return $this;
    }

    /**
     * @param ShippingConditions|array $value
     * @return $this
     */
    public function setShippingConditions($value)
    {
        $this->setProperty('shippingConditions', $value);
        return $this;
    }

    /**
     * @param ShippingConditions $value
     * @return $this
     */
    public function addShippingConditions($value)
    {
        $current = $this->getProperty('shippingConditions');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('shippingConditions', $current);
        return $this;
    }

    /**
     * @return ShippingConditions|array
     */
    public function getShippingConditions()
    {
        return $this->getProperty('shippingConditions');
    }
}
