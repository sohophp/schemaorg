<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A demand entity represents the public, not necessarily binding, not
 * necessarily exclusive, announcement by an organization or person to seek a
 * certain type of goods or services. For describing demand using this type, the
 * very same properties used for Offer apply.
* @see schema:Demand
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Demand extends Intangible
{


    /**
        * The amount of time that is required between accepting the offer and the
 * actual usage of the resource or service.
        * @param array|string|mixed $value
    * @return $this
    */
    public function advanceBookingRequirement($value)
    {
        $this->setProperty('advanceBookingRequirement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAdvanceBookingRequirement($value)
    {
        $this->setProperty('advanceBookingRequirement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdvanceBookingRequirement()
    {
       return $this->getProperty('advanceBookingRequirement');
    }


    /**
        * The type(s) of customers for which the given offer is valid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function eligibleCustomerType($value)
    {
        $this->setProperty('eligibleCustomerType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEligibleCustomerType($value)
    {
        $this->setProperty('eligibleCustomerType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleCustomerType()
    {
       return $this->getProperty('eligibleCustomerType');
    }


    /**
        * The interval and unit of measurement of ordering quantities for which the
 * offer or price specification is valid. This allows e.g. specifying that a
 * certain freight charge is valid only for a certain quantity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function eligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEligibleQuantity($value)
    {
        $this->setProperty('eligibleQuantity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleQuantity()
    {
       return $this->getProperty('eligibleQuantity');
    }


    /**
        * The serial number or any alphanumeric identifier of a particular product.
 * When attached to an offer, it is a shortcut for the serial number of the
 * product included in the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function serialNumber($value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSerialNumber($value)
    {
        $this->setProperty('serialNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSerialNumber()
    {
       return $this->getProperty('serialNumber');
    }


    /**
        * The Manufacturer Part Number (MPN) of the product, or the product to which
 * the offer refers.
        * @param array|string|mixed $value
    * @return $this
    */
    public function mpn($value)
    {
        $this->setProperty('mpn', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMpn($value)
    {
        $this->setProperty('mpn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMpn()
    {
       return $this->getProperty('mpn');
    }


    /**
        * The date after when the item is not valid. For example the end of an offer,
 * salary period, or a period of opening hours.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidThrough()
    {
       return $this->getProperty('validThrough');
    }


    /**
        * A Global Trade Item Number
 * ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade
 * items, including products and services, using numeric identification codes.
 * 
 * A correct [[gtin]] value should be a valid GTIN, which means that it should
 * be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital
 * Link" URL based on such a string. The numeric component should also have a
 * [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator)
 * and meet the other rules for valid GTINs. See also [GS1's GTIN
 * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and
 * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more
 * details. Left-padding of the gtin values is not required or encouraged. The
 * [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]],
 * and [[gtin14]] properties.
 * 
 * The GS1 [digital link
 * specifications](https://www.gs1.org/standards/Digital-Link/) expresses GTINs
 * as URLs (URIs, IRIs, etc.).
 * Digital Links should be populated into the [[hasGS1DigitalLink]] attribute.
 * 
 * Note also that this is a definition for how to include GTINs in Schema.org
 * data, and not a definition of GTINs in general - see the GS1 documentation
 * for authoritative details.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gtin($value)
    {
        $this->setProperty('gtin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGtin($value)
    {
        $this->setProperty('gtin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGtin()
    {
       return $this->getProperty('gtin');
    }


    /**
        * The delivery method(s) available for this offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableDeliveryMethod($value)
    {
        $this->setProperty('availableDeliveryMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailableDeliveryMethod($value)
    {
        $this->setProperty('availableDeliveryMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableDeliveryMethod()
    {
       return $this->getProperty('availableDeliveryMethod');
    }


    /**
        * The GTIN-12 code of the product, or the product to which the offer refers.
 * The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C.
 * Company Prefix, Item Reference, and Check Digit used to identify trade items.
 * See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for
 * more details.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gtin12($value)
    {
        $this->setProperty('gtin12', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGtin12($value)
    {
        $this->setProperty('gtin12', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGtin12()
    {
       return $this->getProperty('gtin12');
    }


    /**
        * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
 * product or service, or the product to which the offer refers.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sku($value)
    {
        $this->setProperty('sku', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSku($value)
    {
        $this->setProperty('sku', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSku()
    {
       return $this->getProperty('sku');
    }


    /**
        * A predefined value from OfferItemCondition specifying the condition of the
 * product or service, or the products or services included in the offer. Also
 * used for product return policies to specify the condition of products
 * accepted for returns.
        * @param array|string|mixed $value
    * @return $this
    */
    public function itemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setItemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemCondition()
    {
       return $this->getProperty('itemCondition');
    }


    /**
        * The end of the availability of the product or service included in the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailabilityEnds()
    {
       return $this->getProperty('availabilityEnds');
    }


    /**
        * The payment method(s) that are accepted in general by an organization, or for
 * some specific demand or offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function acceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAcceptedPaymentMethod($value)
    {
        $this->setProperty('acceptedPaymentMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAcceptedPaymentMethod()
    {
       return $this->getProperty('acceptedPaymentMethod');
    }


    /**
        * An Amazon Standard Identification Number (ASIN) is a 10-character
 * alphanumeric unique identifier assigned by Amazon.com and its partners for
 * product identification within the Amazon organization (summary from
 * [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s
 * article).
 * 
 * Note also that this is a definition for how to include ASINs in Schema.org
 * data, and not a definition of ASINs in general - see documentation from
 * Amazon for authoritative details.
 * ASINs are most commonly encoded as text strings, but the [asin] property
 * supports URL/URI as potential values too.
        * @param array|string|mixed $value
    * @return $this
    */
    public function asin($value)
    {
        $this->setProperty('asin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAsin($value)
    {
        $this->setProperty('asin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAsin()
    {
       return $this->getProperty('asin');
    }


    /**
        * The warranty promise(s) included in the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function warranty($value)
    {
        $this->setProperty('warranty', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setWarranty($value)
    {
        $this->setProperty('warranty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWarranty()
    {
       return $this->getProperty('warranty');
    }


    /**
        * The date when the item becomes valid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }


    /**
        * The duration for which the given offer is valid.
        * @param array|string|mixed $value
    * @return $this
    */
    public function eligibleDuration($value)
    {
        $this->setProperty('eligibleDuration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEligibleDuration($value)
    {
        $this->setProperty('eligibleDuration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleDuration()
    {
       return $this->getProperty('eligibleDuration');
    }


    /**
        * One or more detailed price specifications, indicating the unit price and
 * delivery or payment charges.
        * @param array|string|mixed $value
    * @return $this
    */
    public function priceSpecification($value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPriceSpecification($value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceSpecification()
    {
       return $this->getProperty('priceSpecification');
    }


    /**
        * The current approximate inventory level for the item or items.
        * @param array|string|mixed $value
    * @return $this
    */
    public function inventoryLevel($value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setInventoryLevel($value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInventoryLevel()
    {
       return $this->getProperty('inventoryLevel');
    }


    /**
        * The typical delay between the receipt of the order and the goods either
 * leaving the warehouse or being prepared for pickup, in case the delivery
 * method is on site pickup.
        * @param array|string|mixed $value
    * @return $this
    */
    public function deliveryLeadTime($value)
    {
        $this->setProperty('deliveryLeadTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDeliveryLeadTime($value)
    {
        $this->setProperty('deliveryLeadTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeliveryLeadTime()
    {
       return $this->getProperty('deliveryLeadTime');
    }


    /**
        * An item being offered (or demanded). The transactional nature of the offer or
 * demand is documented using [[businessFunction]], e.g. sell, lease etc. While
 * several common expected types are listed explicitly in this definition,
 * others can be used. Using a second type, such as Product or a subtype of
 * Product, can clarify the nature of the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function itemOffered($value)
    {
        $this->setProperty('itemOffered', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setItemOffered($value)
    {
        $this->setProperty('itemOffered', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemOffered()
    {
       return $this->getProperty('itemOffered');
    }


    /**
        * The availability of this item&#x2014;for example In stock, Out of stock,
 * Pre-order, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availability($value)
    {
        $this->setProperty('availability', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailability($value)
    {
        $this->setProperty('availability', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailability()
    {
       return $this->getProperty('availability');
    }


    /**
        * The GTIN-8 code of the product, or the product to which the offer refers.
 * This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
 * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gtin8($value)
    {
        $this->setProperty('gtin8', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGtin8($value)
    {
        $this->setProperty('gtin8', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGtin8()
    {
       return $this->getProperty('gtin8');
    }


    /**
        * The place(s) from which the offer can be obtained (e.g. store locations).
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableAtOrFrom($value)
    {
        $this->setProperty('availableAtOrFrom', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailableAtOrFrom($value)
    {
        $this->setProperty('availableAtOrFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableAtOrFrom()
    {
       return $this->getProperty('availableAtOrFrom');
    }


    /**
        * The geographic area where a service or offered item is provided.
        * @param array|string|mixed $value
    * @return $this
    */
    public function areaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAreaServed($value)
    {
        $this->setProperty('areaServed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAreaServed()
    {
       return $this->getProperty('areaServed');
    }


    /**
        * The business function (e.g. sell, lease, repair, dispose) of the offer or
 * component of a bundle (TypeAndQuantityNode). The default is
 * http://purl.org/goodrelations/v1#Sell.
        * @param array|string|mixed $value
    * @return $this
    */
    public function businessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBusinessFunction($value)
    {
        $this->setProperty('businessFunction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBusinessFunction()
    {
       return $this->getProperty('businessFunction');
    }


    /**
        * The GTIN-13 code of the product, or the product to which the offer refers.
 * This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC
 * codes can be converted into a GTIN-13 code by simply adding a preceding zero.
 * See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for
 * more details.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gtin13($value)
    {
        $this->setProperty('gtin13', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGtin13($value)
    {
        $this->setProperty('gtin13', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGtin13()
    {
       return $this->getProperty('gtin13');
    }


    /**
        * The beginning of the availability of the product or service included in the
 * offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailabilityStarts()
    {
       return $this->getProperty('availabilityStarts');
    }


    /**
        * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
 * GeoShape for the geo-political region(s) for which the offer or delivery
 * charge specification is valid.
 * 
 * See also [[ineligibleRegion]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function eligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleRegion()
    {
       return $this->getProperty('eligibleRegion');
    }


    /**
        * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
 * GeoShape for the geo-political region(s) for which the offer or delivery
 * charge specification is not valid, e.g. a region where the transaction is not
 * allowed.
 * 
 * See also [[eligibleRegion]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function ineligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIneligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIneligibleRegion()
    {
       return $this->getProperty('ineligibleRegion');
    }


    /**
        * This links to a node or nodes indicating the exact quantity of the products
 * included in  an [[Offer]] or [[ProductCollection]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function includesObject($value)
    {
        $this->setProperty('includesObject', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIncludesObject($value)
    {
        $this->setProperty('includesObject', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludesObject()
    {
       return $this->getProperty('includesObject');
    }


    /**
        * The transaction volume, in a monetary unit, for which the offer or price
 * specification is valid, e.g. for indicating a minimal purchasing volume, to
 * express free shipping above a certain order volume, or to limit the
 * acceptance of credit cards to purchases to a certain minimal amount.
        * @param array|string|mixed $value
    * @return $this
    */
    public function eligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEligibleTransactionVolume($value)
    {
        $this->setProperty('eligibleTransactionVolume', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleTransactionVolume()
    {
       return $this->getProperty('eligibleTransactionVolume');
    }


    /**
        * The GTIN-14 code of the product, or the product to which the offer refers.
 * See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for
 * more details.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gtin14($value)
    {
        $this->setProperty('gtin14', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGtin14($value)
    {
        $this->setProperty('gtin14', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGtin14()
    {
       return $this->getProperty('gtin14');
    }


    /**
        * An entity which offers (sells / leases / lends / loans) the services / goods.
 *  A seller may also be a provider.
        * @param array|string|mixed $value
    * @return $this
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSeller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeller()
    {
       return $this->getProperty('seller');
    }


}
