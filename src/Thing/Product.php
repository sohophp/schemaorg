<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.
* @see schema:Product
* @package Sohophp\SchemaOrg\Thing
*/
class Product extends Thing
{
   /**
        * The place where the product was assembled.
        */
    protected $countryOfAssembly = null;

   /**
        * The color of the product.
        */
    protected $color = null;

   /**
        * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 

In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described. Since product descriptions 
tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]].

The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the beginning of the list).
        */
    protected $negativeNotes = null;

   /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
      
        */
    protected $offers = null;

   /**
        * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]], the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]], this property can apply to any [[Product]] included in the group.
        */
    protected $isVariantOf = null;

   /**
        * Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]]. 
        */
    protected $nsn = null;

   /**
        * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
        */
    protected $pattern = null;

   /**
        * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
        */
    protected $keywords = null;

   /**
        * The height of the item.
        */
    protected $height = null;

   /**
        * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
        */
    protected $mpn = null;

   /**
        * The width of the item.
        */
    protected $width = null;

   /**
        * The date of production of the item, e.g. vehicle.
        */
    protected $productionDate = null;

   /**
        * The depth of the item.
        */
    protected $depth = null;

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
        * A pointer to another, functionally similar product (or multiple products).
        */
    protected $isSimilarTo = null;

   /**
        * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a  QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable. 
        */
    protected $size = null;

   /**
        * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
        */
    protected $isAccessoryOrSparePartFor = null;

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
        * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
        */
    protected $funding = null;

   /**
        * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
        */
    protected $brand = null;

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
        * The manufacturer of the product.
        */
    protected $manufacturer = null;

   /**
        * A slogan or motto associated with the item.
        */
    protected $slogan = null;

   /**
        * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.

        */
    protected $additionalProperty = null;

   /**
        * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.

In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described.

The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most positive is at the beginning of the list).
        */
    protected $positiveNotes = null;

   /**
        * An intended audience, i.e. a group for whom something was created.
        */
    protected $audience = null;

   /**
        * A pointer to another, somehow related product (or multiple products).
        */
    protected $isRelatedTo = null;

   /**
        * A review of the item.
        */
    protected $review = null;

   /**
        * Review of the item.
        */
    protected $reviews = null;

   /**
        * The date the item, e.g. vehicle, was purchased by the current owner.
        */
    protected $purchaseDate = null;

   /**
        * An associated logo.
        */
    protected $logo = null;

   /**
        * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
        */
    protected $category = null;

   /**
        * An award won by or for this item.
        */
    protected $award = null;

   /**
        * Specifies a MerchantReturnPolicy that may be applicable.
        */
    protected $hasMerchantReturnPolicy = null;

   /**
        * The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
        */
    protected $productID = null;

   /**
        * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
        */
    protected $releaseDate = null;

   /**
        * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]]. 
        */
    protected $inProductGroupWithID = null;

   /**
        * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
        */
    protected $model = null;

   /**
        * A material that something is made from, e.g. leather, wool, cotton, paper.
        */
    protected $material = null;

   /**
        * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        */
    protected $gtin8 = null;

   /**
        * A pointer to another product (or multiple products) for which this product is a consumable.
        */
    protected $isConsumableFor = null;

   /**
        * The place where the item (typically [[Product]]) was last processed and tested before importation.
        */
    protected $countryOfLastProcessing = null;

   /**
        * Awards won by or for this item.
        */
    protected $awards = null;

   /**
        * The overall rating, based on a collection of reviews or ratings, of the item.
        */
    protected $aggregateRating = null;

   /**
        * The weight of the product or person.
        */
    protected $weight = null;

   /**
        * The <a href="https://www.gs1.org/standards/gs1-digital-link">GS1 digital link</a> associated with the object. This URL should conform to the particular requirements of digital links. The link should only contain the Application Identifiers (AIs) that are relevant for the entity being annotated, for instance a [[Product]] or an [[Organization]], and for the correct granularity. In particular, for products:<ul><li>A Digital Link that contains a serial number (AI <code>21</code>) should only be present on instances of [[IndividualProduct]]</li><li>A Digital Link that contains a lot number (AI <code>10</code>) should be annotated as [[SomeProduct]] if only products from that lot are sold, or [[IndividualProduct]] if there is only a specific product.</li><li>A Digital Link that contains a global model number (AI <code>8013</code>)  should be attached to a [[Product]] or a [[ProductModel]].</li></ul> Other item types should be adapted similarly.
        */
    protected $hasGS1DigitalLink = null;

   /**
        * The country of origin of something, including products as well as creative  works such as movie and TV content.

In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable.

In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
        */
    protected $countryOfOrigin = null;

   /**
        * Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
        */
    protected $hasEnergyConsumptionDetails = null;

   /**
        * Certification information about a product, organization, service, place, or person.
        */
    protected $hasCertification = null;

   /**
        * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceding zero. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        */
    protected $gtin13 = null;

   /**
        * A color swatch image, visualizing the color of a [[Product]]. Should match the textual description specified in the [[color]] property. This can be a URL or a fully described ImageObject.
        */
    protected $colorSwatch = null;

   /**
        * The GTIN-14 code of the product, or the product to which the offer refers. See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        */
    protected $gtin14 = null;

   /**
        * Indicates a ProductReturnPolicy that may be applicable.
        */
    protected $hasProductReturnPolicy = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setCountryOfAssembly($value)
    {
        $this->setProperty('countryOfAssembly', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCountryOfAssembly()
    {
       return $this->getProperty('countryOfAssembly');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setColor($value)
    {
        $this->setProperty('color', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getColor()
    {
       return $this->getProperty('color');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNegativeNotes($value)
    {
        $this->setProperty('negativeNotes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNegativeNotes()
    {
       return $this->getProperty('negativeNotes');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsVariantOf($value)
    {
        $this->setProperty('isVariantOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsVariantOf()
    {
       return $this->getProperty('isVariantOf');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNsn($value)
    {
        $this->setProperty('nsn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNsn()
    {
       return $this->getProperty('nsn');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPattern($value)
    {
        $this->setProperty('pattern', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPattern()
    {
       return $this->getProperty('pattern');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setKeywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getKeywords()
    {
       return $this->getProperty('keywords');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHeight($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHeight()
    {
       return $this->getProperty('height');
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
    public function setWidth($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWidth()
    {
       return $this->getProperty('width');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProductionDate($value)
    {
        $this->setProperty('productionDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductionDate()
    {
       return $this->getProperty('productionDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDepth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepth()
    {
       return $this->getProperty('depth');
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
    public function setIsSimilarTo($value)
    {
        $this->setProperty('isSimilarTo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsSimilarTo()
    {
       return $this->getProperty('isSimilarTo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSize($value)
    {
        $this->setProperty('size', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSize()
    {
       return $this->getProperty('size');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsAccessoryOrSparePartFor($value)
    {
        $this->setProperty('isAccessoryOrSparePartFor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsAccessoryOrSparePartFor()
    {
       return $this->getProperty('isAccessoryOrSparePartFor');
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
    public function setFunding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunding()
    {
       return $this->getProperty('funding');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBrand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBrand()
    {
       return $this->getProperty('brand');
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
    public function setManufacturer($value)
    {
        $this->setProperty('manufacturer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getManufacturer()
    {
       return $this->getProperty('manufacturer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSlogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSlogan()
    {
       return $this->getProperty('slogan');
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
    public function setPositiveNotes($value)
    {
        $this->setProperty('positiveNotes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPositiveNotes()
    {
       return $this->getProperty('positiveNotes');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAudience()
    {
       return $this->getProperty('audience');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsRelatedTo($value)
    {
        $this->setProperty('isRelatedTo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsRelatedTo()
    {
       return $this->getProperty('isRelatedTo');
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
    public function setPurchaseDate($value)
    {
        $this->setProperty('purchaseDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPurchaseDate()
    {
       return $this->getProperty('purchaseDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLogo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLogo()
    {
       return $this->getProperty('logo');
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
    public function setAward($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAward()
    {
       return $this->getProperty('award');
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
    public function setProductID($value)
    {
        $this->setProperty('productID', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductID()
    {
       return $this->getProperty('productID');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReleaseDate($value)
    {
        $this->setProperty('releaseDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReleaseDate()
    {
       return $this->getProperty('releaseDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setInProductGroupWithID($value)
    {
        $this->setProperty('inProductGroupWithID', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInProductGroupWithID()
    {
       return $this->getProperty('inProductGroupWithID');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setModel($value)
    {
        $this->setProperty('model', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getModel()
    {
       return $this->getProperty('model');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMaterial($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaterial()
    {
       return $this->getProperty('material');
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
    public function setIsConsumableFor($value)
    {
        $this->setProperty('isConsumableFor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsConsumableFor()
    {
       return $this->getProperty('isConsumableFor');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCountryOfLastProcessing($value)
    {
        $this->setProperty('countryOfLastProcessing', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCountryOfLastProcessing()
    {
       return $this->getProperty('countryOfLastProcessing');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAwards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAwards()
    {
       return $this->getProperty('awards');
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
    public function setWeight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWeight()
    {
       return $this->getProperty('weight');
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
    public function setCountryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCountryOfOrigin()
    {
       return $this->getProperty('countryOfOrigin');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasEnergyConsumptionDetails($value)
    {
        $this->setProperty('hasEnergyConsumptionDetails', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasEnergyConsumptionDetails()
    {
       return $this->getProperty('hasEnergyConsumptionDetails');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasCertification()
    {
       return $this->getProperty('hasCertification');
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
    public function setColorSwatch($value)
    {
        $this->setProperty('colorSwatch', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getColorSwatch()
    {
       return $this->getProperty('colorSwatch');
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
    public function setHasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasProductReturnPolicy()
    {
       return $this->getProperty('hasProductReturnPolicy');
    }


}
