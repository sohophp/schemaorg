<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An offer to transfer some rights to an item or to provide a service — for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.\n\nNote: As the [[businessFunction]] property, which identifies the form of offer (e.g. sell, lease, repair, dispose), defaults to http://purl.org/goodrelations/v1#Sell; an Offer without a defined businessFunction value can be assumed to be an offer to sell.\n\nFor [GTIN](http://www.gs1.org/barcodes/technical/idkeys/gtin)-related fields, see [Check Digit calculator](http://www.gs1.org/barcodes/support/check_digit_calculator) and [validation guide](http://www.gs1us.org/resources/standards/gtin-validation-guide) from [GS1](http://www.gs1.org/).
* @see schema:Offer
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Offer extends Intangible
{
   /**
        * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
        */
    protected $advanceBookingRequirement = null;

   /**
        * The type(s) of customers for which the given offer is valid.
        */
    protected $eligibleCustomerType = null;

   /**
        * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
        */
    protected $eligibleQuantity = null;

   /**
        * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
        */
    protected $serialNumber = null;

   /**
        * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
        */
    protected $mpn = null;

   /**
        * The date after which the price is no longer available.
        */
    protected $priceValidUntil = null;

   /**
        * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
        */
    protected $validThrough = null;

   /**
        * A Global Trade Item Number ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade items, including products and services, using numeric identification codes.

A correct [[gtin]] value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a [valid GS1 check digit](https://www.gs1.org/services/check-digit-calculator) and meet the other rules for valid GTINs. See also [GS1's GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more details. Left-padding of the gtin values is not required or encouraged. The [[gtin]] property generalizes the earlier [[gtin8]], [[gtin12]], [[gtin13]], and [[gtin14]] properties.

The GS1 [digital link specifications](https://www.gs1.org/standards/Digital-Link/) expresses GTINs as URLs (URIs, IRIs, etc.).
Digital Links should be populated into the [[hasGS1DigitalLink]] attribute.

Note also that this is a definition for how to include GTINs in Schema.org data, and not a definition of GTINs in general - see the GS1 documentation for authoritative details.
        */
    protected $gtin = null;

   /**
        * Used to tag an item to be intended or suitable for consumption or use by adults only.
        */
    protected $hasAdultConsideration = null;

   /**
        * Indicates whether this content is family friendly.
        */
    protected $isFamilyFriendly = null;

   /**
        * The delivery method(s) available for this offer.
        */
    protected $availableDeliveryMethod = null;

   /**
        * Length of the lease for some [[Accommodation]], either particular to some [[Offer]] or in some cases intrinsic to the property.
        */
    protected $leaseLength = null;

   /**
        * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        */
    protected $gtin12 = null;

   /**
        * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
        */
    protected $sku = null;

   /**
        * A predefined value from OfferItemCondition specifying the condition of the product or service, or the products or services included in the offer. Also used for product return policies to specify the condition of products accepted for returns.
        */
    protected $itemCondition = null;

   /**
        * The end of the availability of the product or service included in the offer.
        */
    protected $availabilityEnds = null;

   /**
        * The payment method(s) that are accepted in general by an organization, or for some specific demand or offer.
        */
    protected $acceptedPaymentMethod = null;

   /**
        * An Amazon Standard Identification Number (ASIN) is a 10-character alphanumeric unique identifier assigned by Amazon.com and its partners for product identification within the Amazon organization (summary from [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s article).

Note also that this is a definition for how to include ASINs in Schema.org data, and not a definition of ASINs in general - see documentation from Amazon for authoritative details.
ASINs are most commonly encoded as text strings, but the [asin] property supports URL/URI as potential values too.
        */
    protected $asin = null;

   /**
        * A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
        */
    protected $hasMeasurement = null;

   /**
        * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs is a dedicated 'mobile site'.

To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]], rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken as an endorsement of this publication style.
    
        */
    protected $mobileUrl = null;

   /**
        * The warranty promise(s) included in the offer.
        */
    protected $warranty = null;

   /**
        * A pointer to the organization or person making the offer.
        */
    protected $offeredBy = null;

   /**
        * The date when the item becomes valid.
        */
    protected $validFrom = null;

   /**
        * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

        */
    protected $additionalProperty = null;

   /**
        * The duration for which the given offer is valid.
        */
    protected $eligibleDuration = null;

   /**
        * A review of the item.
        */
    protected $review = null;

   /**
        * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
        */
    protected $priceSpecification = null;

   /**
        * Review of the item.
        */
    protected $reviews = null;

   /**
        * The current approximate inventory level for the item or items.
        */
    protected $inventoryLevel = null;

   /**
        * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
        */
    protected $category = null;

   /**
        * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
        */
    protected $deliveryLeadTime = null;

   /**
        * Specifies a MerchantReturnPolicy that may be applicable.
        */
    protected $hasMerchantReturnPolicy = null;

   /**
        * An item being offered (or demanded). The transactional nature of the offer or demand is documented using [[businessFunction]], e.g. sell, lease etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
        */
    protected $itemOffered = null;

   /**
        * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
        */
    protected $availability = null;

   /**
        * The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
        */
    protected $priceCurrency = null;

   /**
        * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        */
    protected $gtin8 = null;

   /**
        * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
        */
    protected $addOn = null;

   /**
        * The place(s) from which the offer can be obtained (e.g. store locations).
        */
    protected $availableAtOrFrom = null;

   /**
        * The overall rating, based on a collection of reviews or ratings, of the item.
        */
    protected $aggregateRating = null;

   /**
        * The <a href="https://www.gs1.org/standards/gs1-digital-link">GS1 digital link</a> associated with the object. This URL should conform to the particular requirements of digital links. The link should only contain the Application Identifiers (AIs) that are relevant for the entity being annotated, for instance a [[Product]] or an [[Organization]], and for the correct granularity. In particular, for products:<ul><li>A Digital Link that contains a serial number (AI <code>21</code>) should only be present on instances of [[IndividualProduct]]</li><li>A Digital Link that contains a lot number (AI <code>10</code>) should be annotated as [[SomeProduct]] if only products from that lot are sold, or [[IndividualProduct]] if there is only a specific product.</li><li>A Digital Link that contains a global model number (AI <code>8013</code>)  should be attached to a [[Product]] or a [[ProductModel]].</li></ul> Other item types should be adapted similarly.
        */
    protected $hasGS1DigitalLink = null;

   /**
        * The geographic area where a service or offered item is provided.
        */
    protected $areaServed = null;

   /**
        * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
        */
    protected $businessFunction = null;

   /**
        * The membership program tier an Offer (or a PriceSpecification, OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
        */
    protected $validForMemberTier = null;

   /**
        * A URL template (RFC 6570) for a checkout page for an offer. This approach allows merchants to specify a URL for online checkout of the offered product, by interpolating parameters such as the logged in user ID, product ID, quantity, discount code etc. Parameter naming and standardization are not specified here.
        */
    protected $checkoutPageURLTemplate = null;

   /**
        * Indicates information about the shipping policies and options associated with an [[Offer]].
        */
    protected $shippingDetails = null;

   /**
        * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        */
    protected $gtin13 = null;

   /**
        * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.\n\nUsage guidelines:\n\n* Use the [[priceCurrency]] property (with standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR") instead of including [ambiguous symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign) such as '$' in the value.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.\n* Note that both [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute) and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols.
      
        */
    protected $price = null;

   /**
        * The beginning of the availability of the product or service included in the offer.
        */
    protected $availabilityStarts = null;

   /**
        * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.\n\nSee also [[ineligibleRegion]].
    
        */
    protected $eligibleRegion = null;

   /**
        * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.\n\nSee also [[eligibleRegion]].
      
        */
    protected $ineligibleRegion = null;

   /**
        * This links to a node or nodes indicating the exact quantity of the products included in  an [[Offer]] or [[ProductCollection]].
        */
    protected $includesObject = null;

   /**
        * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
        */
    protected $eligibleTransactionVolume = null;

   /**
        * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        */
    protected $gtin14 = null;

   /**
        * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
        */
    protected $seller = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setPriceValidUntil($value)
    {
        $this->setProperty('priceValidUntil', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceValidUntil()
    {
       return $this->getProperty('priceValidUntil');
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
    * @return string|array|mixed
    */
    public function getValidThrough()
    {
       return $this->getProperty('validThrough');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setHasAdultConsideration($value)
    {
        $this->setProperty('hasAdultConsideration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasAdultConsideration()
    {
       return $this->getProperty('hasAdultConsideration');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsFamilyFriendly($value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsFamilyFriendly()
    {
       return $this->getProperty('isFamilyFriendly');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setLeaseLength($value)
    {
        $this->setProperty('leaseLength', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLeaseLength()
    {
       return $this->getProperty('leaseLength');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setHasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMeasurement()
    {
       return $this->getProperty('hasMeasurement');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMobileUrl($value)
    {
        $this->setProperty('mobileUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMobileUrl()
    {
       return $this->getProperty('mobileUrl');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setOfferedBy($value)
    {
        $this->setProperty('offeredBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOfferedBy()
    {
       return $this->getProperty('offeredBy');
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
    * @return string|array|mixed
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAdditionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdditionalProperty()
    {
       return $this->getProperty('additionalProperty');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setReview($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReview()
    {
       return $this->getProperty('review');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setReviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviews()
    {
       return $this->getProperty('reviews');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setHasMerchantReturnPolicy($value)
    {
        $this->setProperty('hasMerchantReturnPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMerchantReturnPolicy()
    {
       return $this->getProperty('hasMerchantReturnPolicy');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setPriceCurrency($value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceCurrency()
    {
       return $this->getProperty('priceCurrency');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setAddOn($value)
    {
        $this->setProperty('addOn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAddOn()
    {
       return $this->getProperty('addOn');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setAggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAggregateRating()
    {
       return $this->getProperty('aggregateRating');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasGS1DigitalLink()
    {
       return $this->getProperty('hasGS1DigitalLink');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setValidForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidForMemberTier()
    {
       return $this->getProperty('validForMemberTier');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCheckoutPageURLTemplate($value)
    {
        $this->setProperty('checkoutPageURLTemplate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCheckoutPageURLTemplate()
    {
       return $this->getProperty('checkoutPageURLTemplate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setShippingDetails($value)
    {
        $this->setProperty('shippingDetails', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingDetails()
    {
       return $this->getProperty('shippingDetails');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setPrice($value)
    {
        $this->setProperty('price', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrice()
    {
       return $this->getProperty('price');
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
    * @return string|array|mixed
    */
    public function getAvailabilityStarts()
    {
       return $this->getProperty('availabilityStarts');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
