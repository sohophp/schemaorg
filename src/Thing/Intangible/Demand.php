<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\MenuItem;
use Sohophp\SchemaOrg\Thing\Intangible\Trip;
use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\Offer\AggregateOffer;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode;

/**
 * A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.
 * @see https://schema.org/Demand
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class Demand extends Intangible
{
    /**
     * The duration for which the given offer is valid.
     * @see https://schema.org/eligibleDuration
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function eligibleDuration($value)
    {
        $this->setProperty('eligibleDuration', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setEligibleDuration($value)
    {
        $this->setProperty('eligibleDuration', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addEligibleDuration($value)
    {
        $current = $this->getProperty('eligibleDuration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleDuration', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getEligibleDuration()
    {
        return $this->getProperty('eligibleDuration');
    }
    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     * @see https://schema.org/mpn
     * @param string|array $value
     * @return $this
     */
    public function mpn($value)
    {
        $this->setProperty('mpn', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setMpn($value)
    {
        $this->setProperty('mpn', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addMpn($value)
    {
        $current = $this->getProperty('mpn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('mpn', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getMpn()
    {
        return $this->getProperty('mpn');
    }
    /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     * @see https://schema.org/priceSpecification
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function priceSpecification($value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function setPriceSpecification($value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }

    /**
     * @param PriceSpecification $value
     * @return $this
     */
    public function addPriceSpecification($value)
    {
        $current = $this->getProperty('priceSpecification');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('priceSpecification', $current);
        return $this;
    }

    /**
     * @return PriceSpecification|array
     */
    public function getPriceSpecification()
    {
        return $this->getProperty('priceSpecification');
    }
    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     * @see https://schema.org/validThrough
     * @param mixed $value
     * @return $this
     */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidThrough($value)
    {
        $current = $this->getProperty('validThrough');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validThrough', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidThrough()
    {
        return $this->getProperty('validThrough');
    }
    /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @see https://schema.org/gtin12
     * @param string|array $value
     * @return $this
     */
    public function gtin12($value)
    {
        $this->setProperty('gtin12', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setGtin12($value)
    {
        $this->setProperty('gtin12', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addGtin12($value)
    {
        $current = $this->getProperty('gtin12');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gtin12', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getGtin12()
    {
        return $this->getProperty('gtin12');
    }
    /**
     * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @see https://schema.org/gtin8
     * @param string|array $value
     * @return $this
     */
    public function gtin8($value)
    {
        $this->setProperty('gtin8', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setGtin8($value)
    {
        $this->setProperty('gtin8', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addGtin8($value)
    {
        $current = $this->getProperty('gtin8');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gtin8', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getGtin8()
    {
        return $this->getProperty('gtin8');
    }
    /**
     * The current approximate inventory level for the item or items.
     * @see https://schema.org/inventoryLevel
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function inventoryLevel($value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setInventoryLevel($value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addInventoryLevel($value)
    {
        $current = $this->getProperty('inventoryLevel');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inventoryLevel', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getInventoryLevel()
    {
        return $this->getProperty('inventoryLevel');
    }
    /**
     * The type(s) of customers for which the given offer is valid.
     * @see https://schema.org/eligibleCustomerType
     * @param BusinessEntityType|array $value
     * @return $this
     */
    public function eligibleCustomerType($value)
    {
        $this->setProperty('eligibleCustomerType', $value);
        return $this;
    }

    /**
     * @param BusinessEntityType|array $value
     * @return $this
     */
    public function setEligibleCustomerType($value)
    {
        $this->setProperty('eligibleCustomerType', $value);
        return $this;
    }

    /**
     * @param BusinessEntityType $value
     * @return $this
     */
    public function addEligibleCustomerType($value)
    {
        $current = $this->getProperty('eligibleCustomerType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleCustomerType', $current);
        return $this;
    }

    /**
     * @return BusinessEntityType|array
     */
    public function getEligibleCustomerType()
    {
        return $this->getProperty('eligibleCustomerType');
    }
    /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     * @see https://schema.org/serialNumber
     * @param string|array $value
     * @return $this
     */
    public function serialNumber($value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSerialNumber($value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSerialNumber($value)
    {
        $current = $this->getProperty('serialNumber');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('serialNumber', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSerialNumber()
    {
        return $this->getProperty('serialNumber');
    }
    /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
     * @see https://schema.org/deliveryLeadTime
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function deliveryLeadTime($value)
    {
        $this->setProperty('deliveryLeadTime', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setDeliveryLeadTime($value)
    {
        $this->setProperty('deliveryLeadTime', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addDeliveryLeadTime($value)
    {
        $current = $this->getProperty('deliveryLeadTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('deliveryLeadTime', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getDeliveryLeadTime()
    {
        return $this->getProperty('deliveryLeadTime');
    }
    /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     * @see https://schema.org/advanceBookingRequirement
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function advanceBookingRequirement($value)
    {
        $this->setProperty('advanceBookingRequirement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setAdvanceBookingRequirement($value)
    {
        $this->setProperty('advanceBookingRequirement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addAdvanceBookingRequirement($value)
    {
        $current = $this->getProperty('advanceBookingRequirement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('advanceBookingRequirement', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getAdvanceBookingRequirement()
    {
        return $this->getProperty('advanceBookingRequirement');
    }
    /**
     * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
     * @see https://schema.org/itemCondition
     * @param OfferItemCondition|array $value
     * @return $this
     */
    public function itemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }

    /**
     * @param OfferItemCondition|array $value
     * @return $this
     */
    public function setItemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }

    /**
     * @param OfferItemCondition $value
     * @return $this
     */
    public function addItemCondition($value)
    {
        $current = $this->getProperty('itemCondition');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('itemCondition', $current);
        return $this;
    }

    /**
     * @return OfferItemCondition|array
     */
    public function getItemCondition()
    {
        return $this->getProperty('itemCondition');
    }
    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @see https://schema.org/businessFunction
     * @param BusinessFunction|array $value
     * @return $this
     */
    public function businessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
     * @param BusinessFunction|array $value
     * @return $this
     */
    public function setBusinessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
     * @param BusinessFunction $value
     * @return $this
     */
    public function addBusinessFunction($value)
    {
        $current = $this->getProperty('businessFunction');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('businessFunction', $current);
        return $this;
    }

    /**
     * @return BusinessFunction|array
     */
    public function getBusinessFunction()
    {
        return $this->getProperty('businessFunction');
    }
    /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     * @see https://schema.org/availability
     * @param ItemAvailability|array $value
     * @return $this
     */
    public function availability($value)
    {
        $this->setProperty('availability', $value);
        return $this;
    }

    /**
     * @param ItemAvailability|array $value
     * @return $this
     */
    public function setAvailability($value)
    {
        $this->setProperty('availability', $value);
        return $this;
    }

    /**
     * @param ItemAvailability $value
     * @return $this
     */
    public function addAvailability($value)
    {
        $current = $this->getProperty('availability');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availability', $current);
        return $this;
    }

    /**
     * @return ItemAvailability|array
     */
    public function getAvailability()
    {
        return $this->getProperty('availability');
    }
    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     * @see https://schema.org/sku
     * @param string|array $value
     * @return $this
     */
    public function sku($value)
    {
        $this->setProperty('sku', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSku($value)
    {
        $this->setProperty('sku', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSku($value)
    {
        $current = $this->getProperty('sku');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sku', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSku()
    {
        return $this->getProperty('sku');
    }
    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     * @see https://schema.org/availableAtOrFrom
     * @param Place|array $value
     * @return $this
     */
    public function availableAtOrFrom($value)
    {
        $this->setProperty('availableAtOrFrom', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setAvailableAtOrFrom($value)
    {
        $this->setProperty('availableAtOrFrom', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addAvailableAtOrFrom($value)
    {
        $current = $this->getProperty('availableAtOrFrom');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableAtOrFrom', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getAvailableAtOrFrom()
    {
        return $this->getProperty('availableAtOrFrom');
    }
    /**
     * The warranty promise(s) included in the offer.
     * @see https://schema.org/warranty
     * @param WarrantyPromise|array $value
     * @return $this
     */
    public function warranty($value)
    {
        $this->setProperty('warranty', $value);
        return $this;
    }

    /**
     * @param WarrantyPromise|array $value
     * @return $this
     */
    public function setWarranty($value)
    {
        $this->setProperty('warranty', $value);
        return $this;
    }

    /**
     * @param WarrantyPromise $value
     * @return $this
     */
    public function addWarranty($value)
    {
        $current = $this->getProperty('warranty');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('warranty', $current);
        return $this;
    }

    /**
     * @return WarrantyPromise|array
     */
    public function getWarranty()
    {
        return $this->getProperty('warranty');
    }
    /**
     * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article). Note also that this is a definition for how to include ASINs in Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details. ASINs are most commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
     * @see https://schema.org/asin
     * @param string|array $value
     * @return $this
     */
    public function asin($value)
    {
        $this->setProperty('asin', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAsin($value)
    {
        $this->setProperty('asin', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAsin($value)
    {
        $current = $this->getProperty('asin');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('asin', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAsin()
    {
        return $this->getProperty('asin');
    }
    /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @see https://schema.org/gtin13
     * @param string|array $value
     * @return $this
     */
    public function gtin13($value)
    {
        $this->setProperty('gtin13', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setGtin13($value)
    {
        $this->setProperty('gtin13', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addGtin13($value)
    {
        $current = $this->getProperty('gtin13');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gtin13', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getGtin13()
    {
        return $this->getProperty('gtin13');
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
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     * @see https://schema.org/eligibleTransactionVolume
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function eligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|array $value
     * @return $this
     */
    public function setEligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
     * @param PriceSpecification $value
     * @return $this
     */
    public function addEligibleTransactionVolume($value)
    {
        $current = $this->getProperty('eligibleTransactionVolume');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleTransactionVolume', $current);
        return $this;
    }

    /**
     * @return PriceSpecification|array
     */
    public function getEligibleTransactionVolume()
    {
        return $this->getProperty('eligibleTransactionVolume');
    }
    /**
     * The payment method(s) that are accepted in general by an organization, or for some specific demand or offer.
     * @see https://schema.org/acceptedPaymentMethod
     * @param PaymentMethod|LoanOrCredit|string|array $value
     * @return $this
     */
    public function acceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
     * @param PaymentMethod|LoanOrCredit|string|array $value
     * @return $this
     */
    public function setAcceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
     * @param PaymentMethod|LoanOrCredit|string $value
     * @return $this
     */
    public function addAcceptedPaymentMethod($value)
    {
        $current = $this->getProperty('acceptedPaymentMethod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('acceptedPaymentMethod', $current);
        return $this;
    }

    /**
     * @return PaymentMethod|LoanOrCredit|string|array
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->getProperty('acceptedPaymentMethod');
    }
    /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
     * @see https://schema.org/gtin14
     * @param string|array $value
     * @return $this
     */
    public function gtin14($value)
    {
        $this->setProperty('gtin14', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setGtin14($value)
    {
        $this->setProperty('gtin14', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addGtin14($value)
    {
        $current = $this->getProperty('gtin14');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gtin14', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getGtin14()
    {
        return $this->getProperty('gtin14');
    }
    /**
     * An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     * @see https://schema.org/itemOffered
     * @param MenuItem|Trip|Event|CreativeWork|Product|Service|AggregateOffer|array $value
     * @return $this
     */
    public function itemOffered($value)
    {
        $this->setProperty('itemOffered', $value);
        return $this;
    }

    /**
     * @param MenuItem|Trip|Event|CreativeWork|Product|Service|AggregateOffer|array $value
     * @return $this
     */
    public function setItemOffered($value)
    {
        $this->setProperty('itemOffered', $value);
        return $this;
    }

    /**
     * @param MenuItem|Trip|Event|CreativeWork|Product|Service|AggregateOffer $value
     * @return $this
     */
    public function addItemOffered($value)
    {
        $current = $this->getProperty('itemOffered');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('itemOffered', $current);
        return $this;
    }

    /**
     * @return MenuItem|Trip|Event|CreativeWork|Product|Service|AggregateOffer|array
     */
    public function getItemOffered()
    {
        return $this->getProperty('itemOffered');
    }
    /**
     * The date when the item becomes valid.
     * @see https://schema.org/validFrom
     * @param mixed $value
     * @return $this
     */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidFrom($value)
    {
        $current = $this->getProperty('validFrom');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validFrom', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidFrom()
    {
        return $this->getProperty('validFrom');
    }
    /**
     * The beginning of the availability of the product or service included in the offer.
     * @see https://schema.org/availabilityStarts
     * @param mixed $value
     * @return $this
     */
    public function availabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setAvailabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addAvailabilityStarts($value)
    {
        $current = $this->getProperty('availabilityStarts');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availabilityStarts', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailabilityStarts()
    {
        return $this->getProperty('availabilityStarts');
    }
    /**
     * The delivery method(s) available for this offer.
     * @see https://schema.org/availableDeliveryMethod
     * @param DeliveryMethod|array $value
     * @return $this
     */
    public function availableDeliveryMethod($value)
    {
        $this->setProperty('availableDeliveryMethod', $value);
        return $this;
    }

    /**
     * @param DeliveryMethod|array $value
     * @return $this
     */
    public function setAvailableDeliveryMethod($value)
    {
        $this->setProperty('availableDeliveryMethod', $value);
        return $this;
    }

    /**
     * @param DeliveryMethod $value
     * @return $this
     */
    public function addAvailableDeliveryMethod($value)
    {
        $current = $this->getProperty('availableDeliveryMethod');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableDeliveryMethod', $current);
        return $this;
    }

    /**
     * @return DeliveryMethod|array
     */
    public function getAvailableDeliveryMethod()
    {
        return $this->getProperty('availableDeliveryMethod');
    }
    /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     * @see https://schema.org/eligibleQuantity
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function eligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setEligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addEligibleQuantity($value)
    {
        $current = $this->getProperty('eligibleQuantity');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleQuantity', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getEligibleQuantity()
    {
        return $this->getProperty('eligibleQuantity');
    }
    /**
     * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes. A correct [[gtin]] value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values is not required or encouraged. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties. The GS1 [digital link specifications](https://www.gs1.org/standards/Digital-Link/) expresses GTINs as URLs (URIs, IRIs, etc.). Digital Links should be populated into the [[hasGS1DigitalLink]] attribute. Note also that this is a definition for how to include GTINs in Schema.org data, and not a definition of GTINs in general - see the GS1 documentation for authoritative details.
     * @see https://schema.org/gtin
     * @param string|array $value
     * @return $this
     */
    public function gtin($value)
    {
        $this->setProperty('gtin', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setGtin($value)
    {
        $this->setProperty('gtin', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addGtin($value)
    {
        $current = $this->getProperty('gtin');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gtin', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getGtin()
    {
        return $this->getProperty('gtin');
    }
    /**
     * An entity which offers (sells / leases / lends / loans) the services / goods. A seller may also be a provider.
     * @see https://schema.org/seller
     * @param Person|Organization|array $value
     * @return $this
     */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
     * @param Person|Organization|array $value
     * @return $this
     */
    public function setSeller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
     * @param Person|Organization $value
     * @return $this
     */
    public function addSeller($value)
    {
        $current = $this->getProperty('seller');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('seller', $current);
        return $this;
    }

    /**
     * @return Person|Organization|array
     */
    public function getSeller()
    {
        return $this->getProperty('seller');
    }
    /**
     * The end of the availability of the product or service included in the offer.
     * @see https://schema.org/availabilityEnds
     * @param mixed $value
     * @return $this
     */
    public function availabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setAvailabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addAvailabilityEnds($value)
    {
        $current = $this->getProperty('availabilityEnds');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availabilityEnds', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailabilityEnds()
    {
        return $this->getProperty('availabilityEnds');
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
    /**
     * This links to a node or nodes indicating the exact quantity of the products included in an [[Offer]] or [[ProductCollection]].
     * @see https://schema.org/includesObject
     * @param TypeAndQuantityNode|array $value
     * @return $this
     */
    public function includesObject($value)
    {
        $this->setProperty('includesObject', $value);
        return $this;
    }

    /**
     * @param TypeAndQuantityNode|array $value
     * @return $this
     */
    public function setIncludesObject($value)
    {
        $this->setProperty('includesObject', $value);
        return $this;
    }

    /**
     * @param TypeAndQuantityNode $value
     * @return $this
     */
    public function addIncludesObject($value)
    {
        $current = $this->getProperty('includesObject');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('includesObject', $current);
        return $this;
    }

    /**
     * @return TypeAndQuantityNode|array
     */
    public function getIncludesObject()
    {
        return $this->getProperty('includesObject');
    }
}
