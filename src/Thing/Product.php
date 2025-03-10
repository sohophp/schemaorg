<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Product\ProductModel;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\ProductReturnPolicy;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;

/**
* Any offered product or service. For example: a pair of shoes; a concert
 * ticket; the rental of a car; a haircut; or an episode of a TV show streamed
 * online.
* @see http://schema.org/Product
* @package Sohophp\SchemaOrg\Thing
*/
class Product extends Thing
{


    /**
        * Indicates the [NATO stock
 * number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a
 * [[Product]].
        * @param string|array|mixed $value
    * @return $this
    */
    public function nsn($value)
    {
        $this->setProperty('nsn', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The manufacturer of the product.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function manufacturer($value)
    {
        $this->setProperty('manufacturer', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
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
        * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
 * product or service, or the product to which the offer refers.
        * @param string|array|mixed $value
    * @return $this
    */
    public function sku($value)
    {
        $this->setProperty('sku', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The date of production of the item, e.g. vehicle.
        * @param array|string|mixed $value
    * @return $this
    */
    public function productionDate($value)
    {
        $this->setProperty('productionDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An intended audience, i.e. a group for whom something was created.
        * @param Audience|array|string|mixed $value
    * @return $this
    */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * @param Audience|array|string|mixed $value
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
        * The Manufacturer Part Number (MPN) of the product, or the product to which
 * the offer refers.
        * @param string|array|mixed $value
    * @return $this
    */
    public function mpn($value)
    {
        $this->setProperty('mpn', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The height of the item.
        * @param Distance|QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @param Distance|QuantitativeValue|array|string|mixed $value
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
        * The [GTIN-8](http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx) code of the
 * product, or the product to which the offer refers. This code is also known as
 * EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
 * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        * @param string|array|mixed $value
    * @return $this
    */
    public function gtin8($value)
    {
        $this->setProperty('gtin8', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * Review of the item.
        * @param Review|array|string|mixed $value
    * @return $this
    */
    public function reviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
    * @param Review|array|string|mixed $value
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
        * The model of the product. Use with the URL of a ProductModel or a textual
 * representation of the model identifier. The URL of the ProductModel can be
 * from an external source. It is recommended to additionally provide strong
 * product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
        * @param string|ProductModel|array|mixed $value
    * @return $this
    */
    public function model($value)
    {
        $this->setProperty('model', $value);
        return $this;
    }

    /**
    * @param string|ProductModel|array|mixed $value
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
        * The overall rating, based on a collection of reviews or ratings, of the item.
        * @param AggregateRating|array|string|mixed $value
    * @return $this
    */
    public function aggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
    * @param AggregateRating|array|string|mixed $value
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
        * A pointer to another product (or multiple products) for which this product is
 * a consumable.
        * @param Product|array|string|mixed $value
    * @return $this
    */
    public function isConsumableFor($value)
    {
        $this->setProperty('isConsumableFor', $value);
        return $this;
    }

    /**
    * @param Product|array|string|mixed $value
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
        * Indicates a ProductReturnPolicy that may be applicable.
        * @param ProductReturnPolicy|array|string|mixed $value
    * @return $this
    */
    public function hasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
    * @param ProductReturnPolicy|array|string|mixed $value
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


    /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
        * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @param Offer|array|string|mixed $value
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
        * An award won by or for this item.
        * @param string|array|mixed $value
    * @return $this
    */
    public function award($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * A category for the item. Greater signs or slashes can be used to informally
 * indicate a category hierarchy.
        * @param string|PhysicalActivityCategory|Thing|array|mixed $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @param string|PhysicalActivityCategory|Thing|array|mixed $value
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
        * The width of the item.
        * @param QuantitativeValue|Distance|array|string|mixed $value
    * @return $this
    */
    public function width($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|Distance|array|string|mixed $value
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
        * A property-value pair representing an additional characteristics of the
 * entitity, e.g. a product feature or another characteristic for which there is
 * no matching property in schema.org.
 * 
 * Note: Publishers should be aware that applications designed to use specific
 * schema.org properties (e.g. http://schema.org/width, http://schema.org/color,
 * http://schema.org/gtin13, ...) will typically expect such data to be provided
 * using those properties, rather than using the generic property/value
 * mechanism.
        * @param PropertyValue|array|string|mixed $value
    * @return $this
    */
    public function additionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
    * @param PropertyValue|array|string|mixed $value
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
        * A material that something is made from, e.g. leather, wool, cotton, paper.
        * @param string|string|Product|array|mixed $value
    * @return $this
    */
    public function material($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
    * @param string|string|Product|array|mixed $value
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
        * A pointer to another product (or multiple products) for which this product is
 * an accessory or spare part.
        * @param Product|array|string|mixed $value
    * @return $this
    */
    public function isAccessoryOrSparePartFor($value)
    {
        $this->setProperty('isAccessoryOrSparePartFor', $value);
        return $this;
    }

    /**
    * @param Product|array|string|mixed $value
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
        * An associated logo.
        * @param ImageObject|string|array|mixed $value
    * @return $this
    */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * @param ImageObject|string|array|mixed $value
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
        * The GTIN-14 code of the product, or the product to which the offer refers.
 * See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for
 * more details.
        * @param string|array|mixed $value
    * @return $this
    */
    public function gtin14($value)
    {
        $this->setProperty('gtin14', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The GTIN-13 code of the product, or the product to which the offer refers.
 * This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC
 * codes can be converted into a GTIN-13 code by simply adding a preceeding
 * zero. See [GS1 GTIN
 * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more details.
        * @param string|array|mixed $value
    * @return $this
    */
    public function gtin13($value)
    {
        $this->setProperty('gtin13', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The GTIN-12 code of the product, or the product to which the offer refers.
 * The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C.
 * Company Prefix, Item Reference, and Check Digit used to identify trade items.
 * See [GS1 GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for
 * more details.
        * @param string|array|mixed $value
    * @return $this
    */
    public function gtin12($value)
    {
        $this->setProperty('gtin12', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The weight of the product or person.
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function weight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
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
        * A pointer to another, functionally similar product (or multiple products).
        * @param Service|Product|array|string|mixed $value
    * @return $this
    */
    public function isSimilarTo($value)
    {
        $this->setProperty('isSimilarTo', $value);
        return $this;
    }

    /**
    * @param Service|Product|array|string|mixed $value
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
        * Awards won by or for this item.
        * @param string|array|mixed $value
    * @return $this
    */
    public function awards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * A Global Trade Item Number
 * ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify trade
 * items, including products and services, using numeric identification codes.
 * The [[gtin]] property generalizes the earlier <a class="localLink"
 * href="http://schema.org/gtin8">gtin8</a>, <a class="localLink"
 * href="http://schema.org/gtin12">gtin12</a>, <a class="localLink"
 * href="http://schema.org/gtin13">gtin13</a>, and <a class="localLink"
 * href="http://schema.org/gtin14">gtin14</a> properties. The GS1 [digital link
 * specifications](https://www.gs1.org/standards/Digital-Link/) express GTINs as
 * URLs. A correct [[gtin]] value should be a valid GTIN, which means that it
 * should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1
 * Digital Link" URL based on such a string. The numeric component should also
 * have a [valid GS1 check
 * digit](https://www.gs1.org/services/check-digit-calculator) and meet the
 * other rules for valid GTINs. See also <a
 * href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1's GTIN
 * Summary</a> and
 * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for more
 * details. Left-padding of the gtin values is not required or encouraged.
        * @param string|array|mixed $value
    * @return $this
    */
    public function gtin($value)
    {
        $this->setProperty('gtin', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The color of the product.
        * @param string|array|mixed $value
    * @return $this
    */
    public function color($value)
    {
        $this->setProperty('color', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * A pointer to another, somehow related product (or multiple products).
        * @param Product|Service|array|string|mixed $value
    * @return $this
    */
    public function isRelatedTo($value)
    {
        $this->setProperty('isRelatedTo', $value);
        return $this;
    }

    /**
    * @param Product|Service|array|string|mixed $value
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
        * The product identifier, such as ISBN. For example: ```meta
 * itemprop="productID" content="isbn:123-456-789"```.
        * @param string|array|mixed $value
    * @return $this
    */
    public function productID($value)
    {
        $this->setProperty('productID', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * A review of the item.
        * @param Review|array|string|mixed $value
    * @return $this
    */
    public function review($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
    * @param Review|array|string|mixed $value
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
        * The depth of the item.
        * @param Distance|QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function depth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
    * @param Distance|QuantitativeValue|array|string|mixed $value
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
        * The date the item e.g. vehicle was purchased by the current owner.
        * @param array|string|mixed $value
    * @return $this
    */
    public function purchaseDate($value)
    {
        $this->setProperty('purchaseDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A predefined value from OfferItemCondition or a textual description of the
 * condition of the product or service, or the products or services included in
 * the offer.
        * @param OfferItemCondition|array|string|mixed $value
    * @return $this
    */
    public function itemCondition($value)
    {
        $this->setProperty('itemCondition', $value);
        return $this;
    }

    /**
    * @param OfferItemCondition|array|string|mixed $value
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
        * A slogan or motto associated with the item.
        * @param string|array|mixed $value
    * @return $this
    */
    public function slogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
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
        * The brand(s) associated with a product or service, or the brand(s) maintained
 * by an organization or business person.
        * @param Organization|Brand|array|string|mixed $value
    * @return $this
    */
    public function brand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
    * @param Organization|Brand|array|string|mixed $value
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
        * The release date of a product or product model. This can be used to
 * distinguish the exact variant of a product.
        * @param array|string|mixed $value
    * @return $this
    */
    public function releaseDate($value)
    {
        $this->setProperty('releaseDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
