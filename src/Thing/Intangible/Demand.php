<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\ItemAvailability;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\WarrantyPromise;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\TypeAndQuantityNode;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BusinessFunction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\BusinessEntityType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
/**
* A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.
* @see http://schema.org/Demand
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Demand extends Intangible
{

     
     /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
     * @param string $value
     * @return $this
     */

     public function sku(?string $value):self
     {
        $this->setProperty("sku",$value);
        return $this;
     }

     
     /**
     * The beginning of the availability of the product or service included in the offer.
     * @param  $value
     * @return $this
     */

     public function availabilityStarts( $value):self
     {
        $this->setProperty("availabilityStarts",$value);
        return $this;
     }

     
     /**
     * The delivery method(s) available for this offer.
     * @param DeliveryMethod $value
     * @return $this
     */

     public function availableDeliveryMethod(?DeliveryMethod $value):self
     {
        $this->setProperty("availableDeliveryMethod",$value);
        return $this;
     }

     
     /**
     * The geographic area where a service or offered item is provided.
     * @param AdministrativeArea|string|Place|GeoShape $value
     * @return $this
     */

     public function areaServed( $value):self
     {
        $this->setProperty("areaServed",$value);
        return $this;
     }

     
     /**
     * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
     * @param string $value
     * @return $this
     */

     public function mpn(?string $value):self
     {
        $this->setProperty("mpn",$value);
        return $this;
     }

     
     /**
     * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
     * @param string $value
     * @return $this
     */

     public function serialNumber(?string $value):self
     {
        $this->setProperty("serialNumber",$value);
        return $this;
     }

     
     /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br/><br/>

See also <a class="localLink" href="http://schema.org/eligibleRegion">eligibleRegion</a>.
     * @param Place|string|GeoShape $value
     * @return $this
     */

     public function ineligibleRegion( $value):self
     {
        $this->setProperty("ineligibleRegion",$value);
        return $this;
     }

     
     /**
     * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx">GTIN-8</a> code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     * @param string $value
     * @return $this
     */

     public function gtin8(?string $value):self
     {
        $this->setProperty("gtin8",$value);
        return $this;
     }

     
     /**
     * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
     * @param ItemAvailability $value
     * @return $this
     */

     public function availability(?ItemAvailability $value):self
     {
        $this->setProperty("availability",$value);
        return $this;
     }

     
     /**
     * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
     * @param PriceSpecification $value
     * @return $this
     */

     public function priceSpecification(?PriceSpecification $value):self
     {
        $this->setProperty("priceSpecification",$value);
        return $this;
     }

     
     /**
     * The current approximate inventory level for the item or items.
     * @param QuantitativeValue $value
     * @return $this
     */

     public function inventoryLevel(?QuantitativeValue $value):self
     {
        $this->setProperty("inventoryLevel",$value);
        return $this;
     }

     
     /**
     * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
     * @param PriceSpecification $value
     * @return $this
     */

     public function eligibleTransactionVolume(?PriceSpecification $value):self
     {
        $this->setProperty("eligibleTransactionVolume",$value);
        return $this;
     }

     
     /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     * @param Place $value
     * @return $this
     */

     public function availableAtOrFrom(?Place $value):self
     {
        $this->setProperty("availableAtOrFrom",$value);
        return $this;
     }

     
     /**
     * The warranty promise(s) included in the offer.
     * @param WarrantyPromise $value
     * @return $this
     */

     public function warranty(?WarrantyPromise $value):self
     {
        $this->setProperty("warranty",$value);
        return $this;
     }

     
     /**
     * This links to a node or nodes indicating the exact quantity of the products included in the offer.
     * @param TypeAndQuantityNode $value
     * @return $this
     */

     public function includesObject(?TypeAndQuantityNode $value):self
     {
        $this->setProperty("includesObject",$value);
        return $this;
     }

     
     /**
     * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
     * @param QuantitativeValue $value
     * @return $this
     */

     public function eligibleQuantity(?QuantitativeValue $value):self
     {
        $this->setProperty("eligibleQuantity",$value);
        return $this;
     }

     
     /**
     * The date when the item becomes valid.
     * @param  $value
     * @return $this
     */

     public function validFrom( $value):self
     {
        $this->setProperty("validFrom",$value);
        return $this;
     }

     
     /**
     * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
     * @param QuantitativeValue $value
     * @return $this
     */

     public function advanceBookingRequirement(?QuantitativeValue $value):self
     {
        $this->setProperty("advanceBookingRequirement",$value);
        return $this;
     }

     
     /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     * @param  $value
     * @return $this
     */

     public function validThrough( $value):self
     {
        $this->setProperty("validThrough",$value);
        return $this;
     }

     
     /**
     * The GTIN-14 code of the product, or the product to which the offer refers. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     * @param string $value
     * @return $this
     */

     public function gtin14(?string $value):self
     {
        $this->setProperty("gtin14",$value);
        return $this;
     }

     
     /**
     * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     * @param string $value
     * @return $this
     */

     public function gtin13(?string $value):self
     {
        $this->setProperty("gtin13",$value);
        return $this;
     }

     
     /**
     * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
     * @param string $value
     * @return $this
     */

     public function gtin12(?string $value):self
     {
        $this->setProperty("gtin12",$value);
        return $this;
     }

     
     /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     * @param Organization|Person $value
     * @return $this
     */

     public function seller( $value):self
     {
        $this->setProperty("seller",$value);
        return $this;
     }

     
     /**
     * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
     * @param QuantitativeValue $value
     * @return $this
     */

     public function deliveryLeadTime(?QuantitativeValue $value):self
     {
        $this->setProperty("deliveryLeadTime",$value);
        return $this;
     }

     
     /**
     * The end of the availability of the product or service included in the offer.
     * @param  $value
     * @return $this
     */

     public function availabilityEnds( $value):self
     {
        $this->setProperty("availabilityEnds",$value);
        return $this;
     }

     
     /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
     * @param BusinessFunction $value
     * @return $this
     */

     public function businessFunction(?BusinessFunction $value):self
     {
        $this->setProperty("businessFunction",$value);
        return $this;
     }

     
     /**
     * The type(s) of customers for which the given offer is valid.
     * @param BusinessEntityType $value
     * @return $this
     */

     public function eligibleCustomerType(?BusinessEntityType $value):self
     {
        $this->setProperty("eligibleCustomerType",$value);
        return $this;
     }

     
     /**
     * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
     * @param OfferItemCondition $value
     * @return $this
     */

     public function itemCondition(?OfferItemCondition $value):self
     {
        $this->setProperty("itemCondition",$value);
        return $this;
     }

     
     /**
     * The item being offered.
     * @param Service|Product $value
     * @return $this
     */

     public function itemOffered( $value):self
     {
        $this->setProperty("itemOffered",$value);
        return $this;
     }

     
     /**
     * The duration for which the given offer is valid.
     * @param QuantitativeValue $value
     * @return $this
     */

     public function eligibleDuration(?QuantitativeValue $value):self
     {
        $this->setProperty("eligibleDuration",$value);
        return $this;
     }

     
     /**
     * The payment method(s) accepted by seller for this offer.
     * @param PaymentMethod|LoanOrCredit $value
     * @return $this
     */

     public function acceptedPaymentMethod( $value):self
     {
        $this->setProperty("acceptedPaymentMethod",$value);
        return $this;
     }

     
     /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>

See also <a class="localLink" href="http://schema.org/ineligibleRegion">ineligibleRegion</a>.
     * @param string|Place|GeoShape $value
     * @return $this
     */

     public function eligibleRegion( $value):self
     {
        $this->setProperty("eligibleRegion",$value);
        return $this;
     }

     
}

