<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction;

/**
* An offer to transfer some rights to an item or to provide a service — for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.<br/><br/>

For <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GTIN</a>-related fields, see <a href="http://www.gs1.org/barcodes/support/check_digit_calculator">Check Digit calculator</a> and <a href="http://www.gs1us.org/resources/standards/gtin-validation-guide">validation guide</a> from <a href="http://www.gs1.org/">GS1</a>.
* @see http://schema.org/Offer
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Offer extends Intangible
{

    /**
    * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
    * @param string|array $value
    * @return $this
    * @deprecated use setSku
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
    * @return $this|string|array
    */
    public function getSku()
    {
       return $this->getProperty('sku');
    }

    /**
    * The beginning of the availability of the product or service included in the offer.
    * @param array|string $value
    * @return $this
    * @deprecated use setAvailabilityStarts
    */
    public function availabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setAvailabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailabilityStarts()
    {
       return $this->getProperty('availabilityStarts');
    }

    /**
    * The delivery method(s) available for this offer.
    * @param DeliveryMethod|array|string $value
    * @return $this
    * @deprecated use setAvailableDeliveryMethod
    */
    public function availableDeliveryMethod($value)
    {
        $this->setProperty('availableDeliveryMethod', $value);
        return $this;
    }
   /**
    * @param DeliveryMethod|array|string $value
    * @return $this
    */
    public function setAvailableDeliveryMethod($value)
    {
        $this->setProperty('availableDeliveryMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableDeliveryMethod()
    {
       return $this->getProperty('availableDeliveryMethod');
    }

    /**
    * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
    * @param string|array $value
    * @return $this
    * @deprecated use setMpn
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
    * @return $this|string|array
    */
    public function getMpn()
    {
       return $this->getProperty('mpn');
    }

    /**
    * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
    * @param string|array $value
    * @return $this
    * @deprecated use setSerialNumber
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
    * @return $this|string|array
    */
    public function getSerialNumber()
    {
       return $this->getProperty('serialNumber');
    }

    /**
    * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br/><br/>

See also <a class="localLink" href="http://schema.org/eligibleRegion">eligibleRegion</a>.
    * @param Place|string|GeoShape|array $value
    * @return $this
    * @deprecated use setIneligibleRegion
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
    * @return $this|string|array
    */
    public function getIneligibleRegion()
    {
       return $this->getProperty('ineligibleRegion');
    }

    /**
    * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx">GTIN-8</a> code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
    * @param string|array $value
    * @return $this
    * @deprecated use setGtin8
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
    * @return $this|string|array
    */
    public function getGtin8()
    {
       return $this->getProperty('gtin8');
    }

    /**
    * Review of the item.
    * @param Review|array|string $value
    * @return $this
    * @deprecated use setReviews
    */
    public function reviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }
   /**
    * @param Review|array|string $value
    * @return $this
    */
    public function setReviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReviews()
    {
       return $this->getProperty('reviews');
    }

    /**
    * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
    * @param PriceSpecification|array|string $value
    * @return $this
    * @deprecated use setPriceSpecification
    */
    public function priceSpecification($value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }
   /**
    * @param PriceSpecification|array|string $value
    * @return $this
    */
    public function setPriceSpecification($value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPriceSpecification()
    {
       return $this->getProperty('priceSpecification');
    }

    /**
    * The current approximate inventory level for the item or items.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setInventoryLevel
    */
    public function inventoryLevel($value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setInventoryLevel($value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInventoryLevel()
    {
       return $this->getProperty('inventoryLevel');
    }

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating|array|string $value
    * @return $this
    * @deprecated use setAggregateRating
    */
    public function aggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }
   /**
    * @param AggregateRating|array|string $value
    * @return $this
    */
    public function setAggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAggregateRating()
    {
       return $this->getProperty('aggregateRating');
    }

    /**
    * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
    * @param PriceSpecification|array|string $value
    * @return $this
    * @deprecated use setEligibleTransactionVolume
    */
    public function eligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }
   /**
    * @param PriceSpecification|array|string $value
    * @return $this
    */
    public function setEligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEligibleTransactionVolume()
    {
       return $this->getProperty('eligibleTransactionVolume');
    }

    /**
    * The place(s) from which the offer can be obtained (e.g. store locations).
    * @param Place|array|string $value
    * @return $this
    * @deprecated use setAvailableAtOrFrom
    */
    public function availableAtOrFrom($value)
    {
        $this->setProperty('availableAtOrFrom', $value);
        return $this;
    }
   /**
    * @param Place|array|string $value
    * @return $this
    */
    public function setAvailableAtOrFrom($value)
    {
        $this->setProperty('availableAtOrFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableAtOrFrom()
    {
       return $this->getProperty('availableAtOrFrom');
    }

    /**
    * The currency of the price, or a price component when attached to <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> and its subtypes.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string|array $value
    * @return $this
    * @deprecated use setPriceCurrency
    */
    public function priceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPriceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPriceCurrency()
    {
       return $this->getProperty('priceCurrency');
    }

    /**
    * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @param string|PhysicalActivityCategory|Thing|array $value
    * @return $this
    * @deprecated use setCategory
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }
   /**
    * @param string|PhysicalActivityCategory|Thing|array $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }

    /**
    * The date after which the price is no longer available.
    * @param array|string $value
    * @return $this
    * @deprecated use setPriceValidUntil
    */
    public function priceValidUntil($value)
    {
        $this->setProperty('priceValidUntil', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setPriceValidUntil($value)
    {
        $this->setProperty('priceValidUntil', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPriceValidUntil()
    {
       return $this->getProperty('priceValidUntil');
    }

    /**
    * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
    * @param Offer|array|string $value
    * @return $this
    * @deprecated use setAddOn
    */
    public function addOn($value)
    {
        $this->setProperty('addOn', $value);
        return $this;
    }
   /**
    * @param Offer|array|string $value
    * @return $this
    */
    public function setAddOn($value)
    {
        $this->setProperty('addOn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAddOn()
    {
       return $this->getProperty('addOn');
    }

    /**
    * The warranty promise(s) included in the offer.
    * @param WarrantyPromise|array|string $value
    * @return $this
    * @deprecated use setWarranty
    */
    public function warranty($value)
    {
        $this->setProperty('warranty', $value);
        return $this;
    }
   /**
    * @param WarrantyPromise|array|string $value
    * @return $this
    */
    public function setWarranty($value)
    {
        $this->setProperty('warranty', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWarranty()
    {
       return $this->getProperty('warranty');
    }

    /**
    * This links to a node or nodes indicating the exact quantity of the products included in the offer.
    * @param TypeAndQuantityNode|array|string $value
    * @return $this
    * @deprecated use setIncludesObject
    */
    public function includesObject($value)
    {
        $this->setProperty('includesObject', $value);
        return $this;
    }
   /**
    * @param TypeAndQuantityNode|array|string $value
    * @return $this
    */
    public function setIncludesObject($value)
    {
        $this->setProperty('includesObject', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIncludesObject()
    {
       return $this->getProperty('includesObject');
    }

    /**
    * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setEligibleQuantity
    */
    public function eligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setEligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEligibleQuantity()
    {
       return $this->getProperty('eligibleQuantity');
    }

    /**
    * The date when the item becomes valid.
    * @param array|string $value
    * @return $this
    * @deprecated use setValidFrom
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }

    /**
    * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setAdvanceBookingRequirement
    */
    public function advanceBookingRequirement($value)
    {
        $this->setProperty('advanceBookingRequirement', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setAdvanceBookingRequirement($value)
    {
        $this->setProperty('advanceBookingRequirement', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAdvanceBookingRequirement()
    {
       return $this->getProperty('advanceBookingRequirement');
    }

    /**
    * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
    * @param array|string $value
    * @return $this
    * @deprecated use setValidThrough
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getValidThrough()
    {
       return $this->getProperty('validThrough');
    }

    /**
    * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.<br/><br/>

Usage guidelines:<br/><br/>

<ul>
<li>Use the <a class="localLink" href="http://schema.org/priceCurrency">priceCurrency</a> property (with standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR") instead of including <a href="http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign">ambiguous symbols</a> such as '$' in the value.</li>
<li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
<li>Note that both <a href="http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute">RDFa</a> and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.</li>
<li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
</ul>

    * @param string|array $value
    * @return $this
    * @deprecated use setPrice
    */
    public function price($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPrice($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrice()
    {
       return $this->getProperty('price');
    }

    /**
    * The GTIN-14 code of the product, or the product to which the offer refers. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
    * @param string|array $value
    * @return $this
    * @deprecated use setGtin14
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
    * @return $this|string|array
    */
    public function getGtin14()
    {
       return $this->getProperty('gtin14');
    }

    /**
    * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
    * @param string|array $value
    * @return $this
    * @deprecated use setGtin13
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
    * @return $this|string|array
    */
    public function getGtin13()
    {
       return $this->getProperty('gtin13');
    }

    /**
    * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
    * @param string|array $value
    * @return $this
    * @deprecated use setGtin12
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
    * @return $this|string|array
    */
    public function getGtin12()
    {
       return $this->getProperty('gtin12');
    }

    /**
    * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
    * @param Person|Organization|array|string $value
    * @return $this
    * @deprecated use setSeller
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array|string $value
    * @return $this
    */
    public function setSeller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeller()
    {
       return $this->getProperty('seller');
    }

    /**
    * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setDeliveryLeadTime
    */
    public function deliveryLeadTime($value)
    {
        $this->setProperty('deliveryLeadTime', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setDeliveryLeadTime($value)
    {
        $this->setProperty('deliveryLeadTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDeliveryLeadTime()
    {
       return $this->getProperty('deliveryLeadTime');
    }

    /**
    * A Global Trade Item Number (<a href="https://www.gs1.org/standards/id-keys/gtin">GTIN</a>). GTINs identify trade items, including products and services, using numeric identification codes. The <a class="localLink" href="http://schema.org/gtin">gtin</a> property generalizes the earlier <a class="localLink" href="http://schema.org/gtin8">gtin8</a>, <a class="localLink" href="http://schema.org/gtin12">gtin12</a>, <a class="localLink" href="http://schema.org/gtin13">gtin13</a>, and <a class="localLink" href="http://schema.org/gtin14">gtin14</a> properties. The GS1 <a href="https://www.gs1.org/standards/Digital-Link/">digital link specifications</a> express GTINs as URLs. A correct <a class="localLink" href="http://schema.org/gtin">gtin</a> value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a <a href="https://www.gs1.org/services/check-digit-calculator">valid GS1 check digit</a> and meet the other rules for valid GTINs. See also <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1's GTIN Summary</a> and <a href="https://en.wikipedia.org/wiki/Global_Trade_Item_Number">Wikipedia</a> for more details. Left-padding of the gtin values is not required or encouraged.
    * @param string|array $value
    * @return $this
    * @deprecated use setGtin
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
    * @return $this|string|array
    */
    public function getGtin()
    {
       return $this->getProperty('gtin');
    }

    /**
    * The end of the availability of the product or service included in the offer.
    * @param array|string $value
    * @return $this
    * @deprecated use setAvailabilityEnds
    */
    public function availabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setAvailabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailabilityEnds()
    {
       return $this->getProperty('availabilityEnds');
    }

    /**
    * A review of the item.
    * @param Review|array|string $value
    * @return $this
    * @deprecated use setReview
    */
    public function review($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }
   /**
    * @param Review|array|string $value
    * @return $this
    */
    public function setReview($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReview()
    {
       return $this->getProperty('review');
    }

    /**
    * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
    * @param ItemAvailability|array|string $value
    * @return $this
    * @deprecated use setAvailability
    */
    public function availability($value)
    {
        $this->setProperty('availability', $value);
        return $this;
    }
   /**
    * @param ItemAvailability|array|string $value
    * @return $this
    */
    public function setAvailability($value)
    {
        $this->setProperty('availability', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailability()
    {
       return $this->getProperty('availability');
    }

    /**
    * The type(s) of customers for which the given offer is valid.
    * @param BusinessEntityType|array|string $value
    * @return $this
    * @deprecated use setEligibleCustomerType
    */
    public function eligibleCustomerType($value)
    {
        $this->setProperty('eligibleCustomerType', $value);
        return $this;
    }
   /**
    * @param BusinessEntityType|array|string $value
    * @return $this
    */
    public function setEligibleCustomerType($value)
    {
        $this->setProperty('eligibleCustomerType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEligibleCustomerType()
    {
       return $this->getProperty('eligibleCustomerType');
    }

    /**
    * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
    * @param OfferItemCondition|array|string $value
    * @return $this
    * @deprecated use setItemCondition
    */
    public function itemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }
   /**
    * @param OfferItemCondition|array|string $value
    * @return $this
    */
    public function setItemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getItemCondition()
    {
       return $this->getProperty('itemCondition');
    }

    /**
    * The item being offered.
    * @param Product|Service|array|string $value
    * @return $this
    * @deprecated use setItemOffered
    */
    public function itemOffered($value)
    {
        $this->setProperty('itemOffered', $value);
        return $this;
    }
   /**
    * @param Product|Service|array|string $value
    * @return $this
    */
    public function setItemOffered($value)
    {
        $this->setProperty('itemOffered', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getItemOffered()
    {
       return $this->getProperty('itemOffered');
    }

    /**
    * A pointer to the organization or person making the offer.
    * @param Person|Organization|array|string $value
    * @return $this
    * @deprecated use setOfferedBy
    */
    public function offeredBy($value)
    {
        $this->setProperty('offeredBy', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array|string $value
    * @return $this
    */
    public function setOfferedBy($value)
    {
        $this->setProperty('offeredBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOfferedBy()
    {
       return $this->getProperty('offeredBy');
    }

    /**
    * The duration for which the given offer is valid.
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setEligibleDuration
    */
    public function eligibleDuration($value)
    {
        $this->setProperty('eligibleDuration', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setEligibleDuration($value)
    {
        $this->setProperty('eligibleDuration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEligibleDuration()
    {
       return $this->getProperty('eligibleDuration');
    }

    /**
    * The payment method(s) accepted by seller for this offer.
    * @param LoanOrCredit|PaymentMethod|array|string $value
    * @return $this
    * @deprecated use setAcceptedPaymentMethod
    */
    public function acceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }
   /**
    * @param LoanOrCredit|PaymentMethod|array|string $value
    * @return $this
    */
    public function setAcceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAcceptedPaymentMethod()
    {
       return $this->getProperty('acceptedPaymentMethod');
    }

    /**
    * The geographic area where a service or offered item is provided.
    * @param string|GeoShape|Place|AdministrativeArea|array $value
    * @return $this
    * @deprecated use setAreaServed
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }
   /**
    * @param string|GeoShape|Place|AdministrativeArea|array $value
    * @return $this
    */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAreaServed()
    {
       return $this->getProperty('areaServed');
    }

    /**
    * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
    * @param BusinessFunction|array|string $value
    * @return $this
    * @deprecated use setBusinessFunction
    */
    public function businessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }
   /**
    * @param BusinessFunction|array|string $value
    * @return $this
    */
    public function setBusinessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBusinessFunction()
    {
       return $this->getProperty('businessFunction');
    }

    /**
    * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>

See also <a class="localLink" href="http://schema.org/ineligibleRegion">ineligibleRegion</a>.
    * @param Place|string|GeoShape|array $value
    * @return $this
    * @deprecated use setEligibleRegion
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
    * @return $this|string|array
    */
    public function getEligibleRegion()
    {
       return $this->getProperty('eligibleRegion');
    }


}
