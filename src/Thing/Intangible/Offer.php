<?php declare(strict_types=1);
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
*/
class Offer extends Intangible
{

    /**
    * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
    * @param string $value
    * @return $this
    */
    public function sku(?string $value)
    {
        $this->setProperty('sku', $value);
        return $this;
    }

    /**
    * The beginning of the availability of the product or service included in the offer.
    * @param  $value
    * @return $this
    */
    public function availabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
    * The delivery method(s) available for this offer.
    * @param DeliveryMethod $value
    * @return $this
    */
    public function availableDeliveryMethod(?DeliveryMethod $value)
    {
        $this->setProperty('availableDeliveryMethod', $value);
        return $this;
    }

    /**
    * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
    * @param string $value
    * @return $this
    */
    public function mpn(?string $value)
    {
        $this->setProperty('mpn', $value);
        return $this;
    }

    /**
    * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
    * @param string $value
    * @return $this
    */
    public function serialNumber(?string $value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
    * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br/><br/>

See also <a class="localLink" href="http://schema.org/eligibleRegion">eligibleRegion</a>.
    * @param Place|string|GeoShape $value
    * @return $this
    */
    public function ineligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
    * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx">GTIN-8</a> code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
    * @param string $value
    * @return $this
    */
    public function gtin8(?string $value)
    {
        $this->setProperty('gtin8', $value);
        return $this;
    }

    /**
    * Review of the item.
    * @param Review $value
    * @return $this
    */
    public function reviews(?Review $value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
    * @param PriceSpecification $value
    * @return $this
    */
    public function priceSpecification(?PriceSpecification $value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }

    /**
    * The current approximate inventory level for the item or items.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function inventoryLevel(?QuantitativeValue $value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }

    /**
    * The overall rating, based on a collection of reviews or ratings, of the item.
    * @param AggregateRating $value
    * @return $this
    */
    public function aggregateRating(?AggregateRating $value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
    * @param PriceSpecification $value
    * @return $this
    */
    public function eligibleTransactionVolume(?PriceSpecification $value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
    * The place(s) from which the offer can be obtained (e.g. store locations).
    * @param Place $value
    * @return $this
    */
    public function availableAtOrFrom(?Place $value)
    {
        $this->setProperty('availableAtOrFrom', $value);
        return $this;
    }

    /**
    * The currency of the price, or a price component when attached to <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> and its subtypes.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string $value
    * @return $this
    */
    public function priceCurrency(?string $value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
    * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @param string|PhysicalActivityCategory|Thing $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * The date after which the price is no longer available.
    * @param  $value
    * @return $this
    */
    public function priceValidUntil($value)
    {
        $this->setProperty('priceValidUntil', $value);
        return $this;
    }

    /**
    * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
    * @param Offer $value
    * @return $this
    */
    public function addOn(?Offer $value)
    {
        $this->setProperty('addOn', $value);
        return $this;
    }

    /**
    * The warranty promise(s) included in the offer.
    * @param WarrantyPromise $value
    * @return $this
    */
    public function warranty(?WarrantyPromise $value)
    {
        $this->setProperty('warranty', $value);
        return $this;
    }

    /**
    * This links to a node or nodes indicating the exact quantity of the products included in the offer.
    * @param TypeAndQuantityNode $value
    * @return $this
    */
    public function includesObject(?TypeAndQuantityNode $value)
    {
        $this->setProperty('includesObject', $value);
        return $this;
    }

    /**
    * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function eligibleQuantity(?QuantitativeValue $value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
    * The date when the item becomes valid.
    * @param  $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function advanceBookingRequirement(?QuantitativeValue $value)
    {
        $this->setProperty('advanceBookingRequirement', $value);
        return $this;
    }

    /**
    * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
    * @param  $value
    * @return $this
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
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

    * @param string $value
    * @return $this
    */
    public function price(?string $value)
    {
        $this->setProperty('price', $value);
        return $this;
    }

    /**
    * The GTIN-14 code of the product, or the product to which the offer refers. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
    * @param string $value
    * @return $this
    */
    public function gtin14(?string $value)
    {
        $this->setProperty('gtin14', $value);
        return $this;
    }

    /**
    * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
    * @param string $value
    * @return $this
    */
    public function gtin13(?string $value)
    {
        $this->setProperty('gtin13', $value);
        return $this;
    }

    /**
    * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
    * @param string $value
    * @return $this
    */
    public function gtin12(?string $value)
    {
        $this->setProperty('gtin12', $value);
        return $this;
    }

    /**
    * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
    * @param Person|Organization $value
    * @return $this
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function deliveryLeadTime(?QuantitativeValue $value)
    {
        $this->setProperty('deliveryLeadTime', $value);
        return $this;
    }

    /**
    * A Global Trade Item Number (<a href="https://www.gs1.org/standards/id-keys/gtin">GTIN</a>). GTINs identify trade items, including products and services, using numeric identification codes. The <a class="localLink" href="http://schema.org/gtin">gtin</a> property generalizes the earlier <a class="localLink" href="http://schema.org/gtin8">gtin8</a>, <a class="localLink" href="http://schema.org/gtin12">gtin12</a>, <a class="localLink" href="http://schema.org/gtin13">gtin13</a>, and <a class="localLink" href="http://schema.org/gtin14">gtin14</a> properties. The GS1 <a href="https://www.gs1.org/standards/Digital-Link/">digital link specifications</a> express GTINs as URLs. A correct <a class="localLink" href="http://schema.org/gtin">gtin</a> value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a <a href="https://www.gs1.org/services/check-digit-calculator">valid GS1 check digit</a> and meet the other rules for valid GTINs. See also <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1's GTIN Summary</a> and <a href="https://en.wikipedia.org/wiki/Global_Trade_Item_Number">Wikipedia</a> for more details. Left-padding of the gtin values is not required or encouraged.
    * @param string $value
    * @return $this
    */
    public function gtin(?string $value)
    {
        $this->setProperty('gtin', $value);
        return $this;
    }

    /**
    * The end of the availability of the product or service included in the offer.
    * @param  $value
    * @return $this
    */
    public function availabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
    * A review of the item.
    * @param Review $value
    * @return $this
    */
    public function review(?Review $value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
    * @param ItemAvailability $value
    * @return $this
    */
    public function availability(?ItemAvailability $value)
    {
        $this->setProperty('availability', $value);
        return $this;
    }

    /**
    * The type(s) of customers for which the given offer is valid.
    * @param BusinessEntityType $value
    * @return $this
    */
    public function eligibleCustomerType(?BusinessEntityType $value)
    {
        $this->setProperty('eligibleCustomerType', $value);
        return $this;
    }

    /**
    * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
    * @param OfferItemCondition $value
    * @return $this
    */
    public function itemCondition(?OfferItemCondition $value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }

    /**
    * The item being offered.
    * @param Product|Service $value
    * @return $this
    */
    public function itemOffered($value)
    {
        $this->setProperty('itemOffered', $value);
        return $this;
    }

    /**
    * A pointer to the organization or person making the offer.
    * @param Person|Organization $value
    * @return $this
    */
    public function offeredBy($value)
    {
        $this->setProperty('offeredBy', $value);
        return $this;
    }

    /**
    * The duration for which the given offer is valid.
    * @param QuantitativeValue $value
    * @return $this
    */
    public function eligibleDuration(?QuantitativeValue $value)
    {
        $this->setProperty('eligibleDuration', $value);
        return $this;
    }

    /**
    * The payment method(s) accepted by seller for this offer.
    * @param LoanOrCredit|PaymentMethod $value
    * @return $this
    */
    public function acceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
    * The geographic area where a service or offered item is provided.
    * @param string|GeoShape|Place|AdministrativeArea $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
    * @param BusinessFunction $value
    * @return $this
    */
    public function businessFunction(?BusinessFunction $value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
    * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>

See also <a class="localLink" href="http://schema.org/ineligibleRegion">ineligibleRegion</a>.
    * @param Place|string|GeoShape $value
    * @return $this
    */
    public function eligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Offer','Thing\\Offer');

