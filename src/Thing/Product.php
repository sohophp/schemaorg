<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Product\ProductModel;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;
/**
* Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.
* @see http://schema.org/Product
* @package Sohophp\SchemaOrg\Thing
*/
class Product extends Thing
{

     
     /**
     * The manufacturer of the product.
     * @param Organization $value
     * @return $this
     */

     public function manufacturer(?Organization $value):self
     {
        $this->setProperty("manufacturer",$value);
        return $this;
     }

     
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
     * The date of production of the item, e.g. vehicle.
     * @param  $value
     * @return $this
     */

     public function productionDate( $value):self
     {
        $this->setProperty("productionDate",$value);
        return $this;
     }

     
     /**
     * An intended audience, i.e. a group for whom something was created.
     * @param Audience $value
     * @return $this
     */

     public function audience(?Audience $value):self
     {
        $this->setProperty("audience",$value);
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
     * The height of the item.
     * @param Distance|QuantitativeValue $value
     * @return $this
     */

     public function height( $value):self
     {
        $this->setProperty("height",$value);
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
     * Review of the item.
     * @param Review $value
     * @return $this
     */

     public function reviews(?Review $value):self
     {
        $this->setProperty("reviews",$value);
        return $this;
     }

     
     /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @param AggregateRating $value
     * @return $this
     */

     public function aggregateRating(?AggregateRating $value):self
     {
        $this->setProperty("aggregateRating",$value);
        return $this;
     }

     
     /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     * @param Product $value
     * @return $this
     */

     public function isConsumableFor(?Product $value):self
     {
        $this->setProperty("isConsumableFor",$value);
        return $this;
     }

     
     /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     * @param Offer $value
     * @return $this
     */

     public function offers(?Offer $value):self
     {
        $this->setProperty("offers",$value);
        return $this;
     }

     
     /**
     * An award won by or for this item.
     * @param string $value
     * @return $this
     */

     public function award(?string $value):self
     {
        $this->setProperty("award",$value);
        return $this;
     }

     
     /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @param string|Thing $value
     * @return $this
     */

     public function category( $value):self
     {
        $this->setProperty("category",$value);
        return $this;
     }

     
     /**
     * The width of the item.
     * @param Distance|QuantitativeValue $value
     * @return $this
     */

     public function width( $value):self
     {
        $this->setProperty("width",$value);
        return $this;
     }

     
     /**
     * Awards won by or for this item.
     * @param string $value
     * @return $this
     */

     public function awards(?string $value):self
     {
        $this->setProperty("awards",$value);
        return $this;
     }

     
     /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br/><br/>

Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     * @param PropertyValue $value
     * @return $this
     */

     public function additionalProperty(?PropertyValue $value):self
     {
        $this->setProperty("additionalProperty",$value);
        return $this;
     }

     
     /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     * @param Product $value
     * @return $this
     */

     public function isAccessoryOrSparePartFor(?Product $value):self
     {
        $this->setProperty("isAccessoryOrSparePartFor",$value);
        return $this;
     }

     
     /**
     * An associated logo.
     * @param string|ImageObject $value
     * @return $this
     */

     public function logo( $value):self
     {
        $this->setProperty("logo",$value);
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
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @param Product|string|string $value
     * @return $this
     */

     public function material( $value):self
     {
        $this->setProperty("material",$value);
        return $this;
     }

     
     /**
     * The weight of the product or person.
     * @param QuantitativeValue $value
     * @return $this
     */

     public function weight(?QuantitativeValue $value):self
     {
        $this->setProperty("weight",$value);
        return $this;
     }

     
     /**
     * A pointer to another, functionally similar product (or multiple products).
     * @param Service|Product $value
     * @return $this
     */

     public function isSimilarTo( $value):self
     {
        $this->setProperty("isSimilarTo",$value);
        return $this;
     }

     
     /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     * @param string|ProductModel $value
     * @return $this
     */

     public function model( $value):self
     {
        $this->setProperty("model",$value);
        return $this;
     }

     
     /**
     * The color of the product.
     * @param string $value
     * @return $this
     */

     public function color(?string $value):self
     {
        $this->setProperty("color",$value);
        return $this;
     }

     
     /**
     * A pointer to another, somehow related product (or multiple products).
     * @param Product|Service $value
     * @return $this
     */

     public function isRelatedTo( $value):self
     {
        $this->setProperty("isRelatedTo",$value);
        return $this;
     }

     
     /**
     * The product identifier, such as ISBN. For example: <code>meta itemprop="productID" content="isbn:123-456-789"</code>.
     * @param string $value
     * @return $this
     */

     public function productID(?string $value):self
     {
        $this->setProperty("productID",$value);
        return $this;
     }

     
     /**
     * A review of the item.
     * @param Review $value
     * @return $this
     */

     public function review(?Review $value):self
     {
        $this->setProperty("review",$value);
        return $this;
     }

     
     /**
     * The depth of the item.
     * @param QuantitativeValue|Distance $value
     * @return $this
     */

     public function depth( $value):self
     {
        $this->setProperty("depth",$value);
        return $this;
     }

     
     /**
     * The date the item e.g. vehicle was purchased by the current owner.
     * @param  $value
     * @return $this
     */

     public function purchaseDate( $value):self
     {
        $this->setProperty("purchaseDate",$value);
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
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @param Organization|Brand $value
     * @return $this
     */

     public function brand( $value):self
     {
        $this->setProperty("brand",$value);
        return $this;
     }

     
     /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     * @param  $value
     * @return $this
     */

     public function releaseDate( $value):self
     {
        $this->setProperty("releaseDate",$value);
        return $this;
     }

     
}

