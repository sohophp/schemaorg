<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;
use Sohophp\SchemaOrg\Thing\Product\ProductModel;
use Sohophp\SchemaOrg\Thing\Product\ProductGroup;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue\SizeSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
use Sohophp\SchemaOrg\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OfferItemCondition;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Quantity\Mass;
use Sohophp\SchemaOrg\Thing\Intangible\Grant;
use Sohophp\SchemaOrg\Thing\Intangible\EnergyConsumptionDetails;
use Sohophp\SchemaOrg\Certification;
use Sohophp\SchemaOrg\Thing\Intangible\MerchantReturnPolicy;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebContent;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Demand;
use Sohophp\SchemaOrg\Thing\Intangible\Rating\AggregateRating;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Brand;
use Sohophp\SchemaOrg\Thing\Intangible\ProductReturnPolicy;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\AdultOrientedEnumeration;

/**
 * Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.
 * @see https://schema.org/Product
 * @package Sohophp\SchemaOrg\Thing
 */
class Product extends Thing
{
    /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     * @see https://schema.org/isConsumableFor
     * @param Product|array $value
     * @return $this
     */
    public function isConsumableFor($value)
    {
        $this->setProperty('isConsumableFor', $value);
        return $this;
    }

    /**
     * @param Product|array $value
     * @return $this
     */
    public function setIsConsumableFor($value)
    {
        $this->setProperty('isConsumableFor', $value);
        return $this;
    }

    /**
     * @param Product $value
     * @return $this
     */
    public function addIsConsumableFor($value)
    {
        $current = $this->getProperty('isConsumableFor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isConsumableFor', $current);
        return $this;
    }

    /**
     * @return Product|array
     */
    public function getIsConsumableFor()
    {
        return $this->getProperty('isConsumableFor');
    }
    /**
     * A pointer to another, functionally similar product (or multiple products).
     * @see https://schema.org/isSimilarTo
     * @param Service|Product|array $value
     * @return $this
     */
    public function isSimilarTo($value)
    {
        $this->setProperty('isSimilarTo', $value);
        return $this;
    }

    /**
     * @param Service|Product|array $value
     * @return $this
     */
    public function setIsSimilarTo($value)
    {
        $this->setProperty('isSimilarTo', $value);
        return $this;
    }

    /**
     * @param Service|Product $value
     * @return $this
     */
    public function addIsSimilarTo($value)
    {
        $current = $this->getProperty('isSimilarTo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isSimilarTo', $current);
        return $this;
    }

    /**
     * @return Service|Product|array
     */
    public function getIsSimilarTo()
    {
        return $this->getProperty('isSimilarTo');
    }
    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @see https://schema.org/category
     * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
     * @return $this
     */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
     * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
     * @return $this
     */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
     * @param string|Thing|PhysicalActivityCategory|CategoryCode $value
     * @return $this
     */
    public function addCategory($value)
    {
        $current = $this->getProperty('category');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('category', $current);
        return $this;
    }

    /**
     * @return string|Thing|PhysicalActivityCategory|CategoryCode|array
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }
    /**
     * An associated logo.
     * @see https://schema.org/logo
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function setLogo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
     * @param string|ImageObject $value
     * @return $this
     */
    public function addLogo($value)
    {
        $current = $this->getProperty('logo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('logo', $current);
        return $this;
    }

    /**
     * @return string|ImageObject|array
     */
    public function getLogo()
    {
        return $this->getProperty('logo');
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
     * The location at which an item can be viewed or experienced in-person.
     * @see https://schema.org/displayLocation
     * @param Place|array $value
     * @return $this
     */
    public function displayLocation($value)
    {
        $this->setProperty('displayLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setDisplayLocation($value)
    {
        $this->setProperty('displayLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addDisplayLocation($value)
    {
        $current = $this->getProperty('displayLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('displayLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getDisplayLocation()
    {
        return $this->getProperty('displayLocation');
    }
    /**
     * Indicates the [NATO stock number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a [[Product]].
     * @see https://schema.org/nsn
     * @param string|array $value
     * @return $this
     */
    public function nsn($value)
    {
        $this->setProperty('nsn', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setNsn($value)
    {
        $this->setProperty('nsn', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addNsn($value)
    {
        $current = $this->getProperty('nsn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('nsn', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getNsn()
    {
        return $this->getProperty('nsn');
    }
    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     * @see https://schema.org/countryOfOrigin
     * @param Country|array $value
     * @return $this
     */
    public function countryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
     * @param Country|array $value
     * @return $this
     */
    public function setCountryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
     * @param Country $value
     * @return $this
     */
    public function addCountryOfOrigin($value)
    {
        $current = $this->getProperty('countryOfOrigin');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('countryOfOrigin', $current);
        return $this;
    }

    /**
     * @return Country|array
     */
    public function getCountryOfOrigin()
    {
        return $this->getProperty('countryOfOrigin');
    }
    /**
     * Review of the item.
     * @see https://schema.org/reviews
     * @param Review|array $value
     * @return $this
     */
    public function reviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
     * @param Review|array $value
     * @return $this
     */
    public function setReviews($value)
    {
        $this->setProperty('reviews', $value);
        return $this;
    }

    /**
     * @param Review $value
     * @return $this
     */
    public function addReviews($value)
    {
        $current = $this->getProperty('reviews');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('reviews', $current);
        return $this;
    }

    /**
     * @return Review|array
     */
    public function getReviews()
    {
        return $this->getProperty('reviews');
    }
    /**
     * Indicates the kind of product that this is a variant of. In the case of [[ProductModel]], this is a pointer (from a ProductModel) to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive. In the case of a [[ProductGroup]], the group description also serves as a template, representing a set of Products that vary on explicitly defined, specific dimensions only (so it defines both a set of variants, as well as which values distinguish amongst those variants). When used with [[ProductGroup]], this property can apply to any [[Product]] included in the group.
     * @see https://schema.org/isVariantOf
     * @param ProductModel|ProductGroup|array $value
     * @return $this
     */
    public function isVariantOf($value)
    {
        $this->setProperty('isVariantOf', $value);
        return $this;
    }

    /**
     * @param ProductModel|ProductGroup|array $value
     * @return $this
     */
    public function setIsVariantOf($value)
    {
        $this->setProperty('isVariantOf', $value);
        return $this;
    }

    /**
     * @param ProductModel|ProductGroup $value
     * @return $this
     */
    public function addIsVariantOf($value)
    {
        $current = $this->getProperty('isVariantOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isVariantOf', $current);
        return $this;
    }

    /**
     * @return ProductModel|ProductGroup|array
     */
    public function getIsVariantOf()
    {
        return $this->getProperty('isVariantOf');
    }
    /**
     * A standardized size of a product or creative work, specified either through a simple textual string (for example 'XL', '32Wx34L'), a QuantitativeValue with a unitCode, or a comprehensive and structured [[SizeSpecification]]; in other cases, the [[width]], [[height]], [[depth]] and [[weight]] properties may be more applicable.
     * @see https://schema.org/size
     * @param DefinedTerm|QuantitativeValue|SizeSpecification|string|array $value
     * @return $this
     */
    public function size($value)
    {
        $this->setProperty('size', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|QuantitativeValue|SizeSpecification|string|array $value
     * @return $this
     */
    public function setSize($value)
    {
        $this->setProperty('size', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|QuantitativeValue|SizeSpecification|string $value
     * @return $this
     */
    public function addSize($value)
    {
        $current = $this->getProperty('size');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('size', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|QuantitativeValue|SizeSpecification|string|array
     */
    public function getSize()
    {
        return $this->getProperty('size');
    }
    /**
     * A property-value pair representing an additional characteristic of the entity, e.g. a product feature or another characteristic for which there is no matching property in schema.org. Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     * @see https://schema.org/additionalProperty
     * @param PropertyValue|array $value
     * @return $this
     */
    public function additionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
     * @param PropertyValue|array $value
     * @return $this
     */
    public function setAdditionalProperty($value)
    {
        $this->setProperty('additionalProperty', $value);
        return $this;
    }

    /**
     * @param PropertyValue $value
     * @return $this
     */
    public function addAdditionalProperty($value)
    {
        $current = $this->getProperty('additionalProperty');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('additionalProperty', $current);
        return $this;
    }

    /**
     * @return PropertyValue|array
     */
    public function getAdditionalProperty()
    {
        return $this->getProperty('additionalProperty');
    }
    /**
     * The width of the item.
     * @see https://schema.org/width
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function width($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function setWidth($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance $value
     * @return $this
     */
    public function addWidth($value)
    {
        $current = $this->getProperty('width');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('width', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Distance|array
     */
    public function getWidth()
    {
        return $this->getProperty('width');
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
     * Keywords or tags used to describe some item. Multiple textual entries in a keywords list are typically delimited by commas, or by repeating the property.
     * @see https://schema.org/keywords
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function keywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setKeywords($value)
    {
        $this->setProperty('keywords', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addKeywords($value)
    {
        $current = $this->getProperty('keywords');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('keywords', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getKeywords()
    {
        return $this->getProperty('keywords');
    }
    /**
     * The manufacturer of the product.
     * @see https://schema.org/manufacturer
     * @param Organization|array $value
     * @return $this
     */
    public function manufacturer($value)
    {
        $this->setProperty('manufacturer', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setManufacturer($value)
    {
        $this->setProperty('manufacturer', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addManufacturer($value)
    {
        $current = $this->getProperty('manufacturer');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('manufacturer', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getManufacturer()
    {
        return $this->getProperty('manufacturer');
    }
    /**
     * The depth of the item.
     * @see https://schema.org/depth
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function depth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function setDepth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance $value
     * @return $this
     */
    public function addDepth($value)
    {
        $current = $this->getProperty('depth');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('depth', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Distance|array
     */
    public function getDepth()
    {
        return $this->getProperty('depth');
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
     * The weight of the product or person.
     * @see https://schema.org/weight
     * @param QuantitativeValue|Mass|array $value
     * @return $this
     */
    public function weight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Mass|array $value
     * @return $this
     */
    public function setWeight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Mass $value
     * @return $this
     */
    public function addWeight($value)
    {
        $current = $this->getProperty('weight');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('weight', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Mass|array
     */
    public function getWeight()
    {
        return $this->getProperty('weight');
    }
    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
     * @see https://schema.org/funding
     * @param Grant|array $value
     * @return $this
     */
    public function funding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
     * @param Grant|array $value
     * @return $this
     */
    public function setFunding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
     * @param Grant $value
     * @return $this
     */
    public function addFunding($value)
    {
        $current = $this->getProperty('funding');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('funding', $current);
        return $this;
    }

    /**
     * @return Grant|array
     */
    public function getFunding()
    {
        return $this->getProperty('funding');
    }
    /**
     * Defines the energy efficiency Category (also known as "class" or "rating") for a product according to an international energy efficiency standard.
     * @see https://schema.org/hasEnergyConsumptionDetails
     * @param EnergyConsumptionDetails|array $value
     * @return $this
     */
    public function hasEnergyConsumptionDetails($value)
    {
        $this->setProperty('hasEnergyConsumptionDetails', $value);
        return $this;
    }

    /**
     * @param EnergyConsumptionDetails|array $value
     * @return $this
     */
    public function setHasEnergyConsumptionDetails($value)
    {
        $this->setProperty('hasEnergyConsumptionDetails', $value);
        return $this;
    }

    /**
     * @param EnergyConsumptionDetails $value
     * @return $this
     */
    public function addHasEnergyConsumptionDetails($value)
    {
        $current = $this->getProperty('hasEnergyConsumptionDetails');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasEnergyConsumptionDetails', $current);
        return $this;
    }

    /**
     * @return EnergyConsumptionDetails|array
     */
    public function getHasEnergyConsumptionDetails()
    {
        return $this->getProperty('hasEnergyConsumptionDetails');
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
     * A review of the item.
     * @see https://schema.org/review
     * @param Review|array $value
     * @return $this
     */
    public function review($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
     * @param Review|array $value
     * @return $this
     */
    public function setReview($value)
    {
        $this->setProperty('review', $value);
        return $this;
    }

    /**
     * @param Review $value
     * @return $this
     */
    public function addReview($value)
    {
        $current = $this->getProperty('review');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('review', $current);
        return $this;
    }

    /**
     * @return Review|array
     */
    public function getReview()
    {
        return $this->getProperty('review');
    }
    /**
     * Indicates whether this content is family friendly.
     * @see https://schema.org/isFamilyFriendly
     * @param bool|array $value
     * @return $this
     */
    public function isFamilyFriendly($value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setIsFamilyFriendly($value)
    {
        $this->setProperty('isFamilyFriendly', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addIsFamilyFriendly($value)
    {
        $current = $this->getProperty('isFamilyFriendly');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isFamilyFriendly', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getIsFamilyFriendly()
    {
        return $this->getProperty('isFamilyFriendly');
    }
    /**
     * Certification information about a product, organization, service, place, or person.
     * @see https://schema.org/hasCertification
     * @param Certification|array $value
     * @return $this
     */
    public function hasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
     * @param Certification|array $value
     * @return $this
     */
    public function setHasCertification($value)
    {
        $this->setProperty('hasCertification', $value);
        return $this;
    }

    /**
     * @param Certification $value
     * @return $this
     */
    public function addHasCertification($value)
    {
        $current = $this->getProperty('hasCertification');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasCertification', $current);
        return $this;
    }

    /**
     * @return Certification|array
     */
    public function getHasCertification()
    {
        return $this->getProperty('hasCertification');
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
     * The color of the product.
     * @see https://schema.org/color
     * @param string|array $value
     * @return $this
     */
    public function color($value)
    {
        $this->setProperty('color', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setColor($value)
    {
        $this->setProperty('color', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addColor($value)
    {
        $current = $this->getProperty('color');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('color', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getColor()
    {
        return $this->getProperty('color');
    }
    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     * @see https://schema.org/hasMerchantReturnPolicy
     * @param MerchantReturnPolicy|array $value
     * @return $this
     */
    public function hasMerchantReturnPolicy($value)
    {
        $this->setProperty('hasMerchantReturnPolicy', $value);
        return $this;
    }

    /**
     * @param MerchantReturnPolicy|array $value
     * @return $this
     */
    public function setHasMerchantReturnPolicy($value)
    {
        $this->setProperty('hasMerchantReturnPolicy', $value);
        return $this;
    }

    /**
     * @param MerchantReturnPolicy $value
     * @return $this
     */
    public function addHasMerchantReturnPolicy($value)
    {
        $current = $this->getProperty('hasMerchantReturnPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasMerchantReturnPolicy', $current);
        return $this;
    }

    /**
     * @return MerchantReturnPolicy|array
     */
    public function getHasMerchantReturnPolicy()
    {
        return $this->getProperty('hasMerchantReturnPolicy');
    }
    /**
     * Awards won by or for this item.
     * @see https://schema.org/awards
     * @param string|array $value
     * @return $this
     */
    public function awards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAwards($value)
    {
        $this->setProperty('awards', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAwards($value)
    {
        $current = $this->getProperty('awards');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('awards', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAwards()
    {
        return $this->getProperty('awards');
    }
    /**
     * The place where the item (typically [[Product]]) was last processed and tested before importation.
     * @see https://schema.org/countryOfLastProcessing
     * @param string|array $value
     * @return $this
     */
    public function countryOfLastProcessing($value)
    {
        $this->setProperty('countryOfLastProcessing', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCountryOfLastProcessing($value)
    {
        $this->setProperty('countryOfLastProcessing', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCountryOfLastProcessing($value)
    {
        $current = $this->getProperty('countryOfLastProcessing');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('countryOfLastProcessing', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCountryOfLastProcessing()
    {
        return $this->getProperty('countryOfLastProcessing');
    }
    /**
     * The product identifier, such as ISBN. For example: ``` meta itemprop="productID" content="isbn:123-456-789" ```.
     * @see https://schema.org/productID
     * @param string|array $value
     * @return $this
     */
    public function productID($value)
    {
        $this->setProperty('productID', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setProductID($value)
    {
        $this->setProperty('productID', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addProductID($value)
    {
        $current = $this->getProperty('productID');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('productID', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getProductID()
    {
        return $this->getProperty('productID');
    }
    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     * @see https://schema.org/purchaseDate
     * @param mixed $value
     * @return $this
     */
    public function purchaseDate($value)
    {
        $this->setProperty('purchaseDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setPurchaseDate($value)
    {
        $this->setProperty('purchaseDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addPurchaseDate($value)
    {
        $current = $this->getProperty('purchaseDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('purchaseDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseDate()
    {
        return $this->getProperty('purchaseDate');
    }
    /**
     * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews. In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described. The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most positive is at the beginning of the list).
     * @see https://schema.org/positiveNotes
     * @param WebContent|ItemList|ListItem|string|array $value
     * @return $this
     */
    public function positiveNotes($value)
    {
        $this->setProperty('positiveNotes', $value);
        return $this;
    }

    /**
     * @param WebContent|ItemList|ListItem|string|array $value
     * @return $this
     */
    public function setPositiveNotes($value)
    {
        $this->setProperty('positiveNotes', $value);
        return $this;
    }

    /**
     * @param WebContent|ItemList|ListItem|string $value
     * @return $this
     */
    public function addPositiveNotes($value)
    {
        $current = $this->getProperty('positiveNotes');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('positiveNotes', $current);
        return $this;
    }

    /**
     * @return WebContent|ItemList|ListItem|string|array
     */
    public function getPositiveNotes()
    {
        return $this->getProperty('positiveNotes');
    }
    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use [[businessFunction]] to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a [[Demand]]. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.
     * @see https://schema.org/offers
     * @param Offer|Demand|array $value
     * @return $this
     */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
     * @param Offer|Demand|array $value
     * @return $this
     */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
     * @param Offer|Demand $value
     * @return $this
     */
    public function addOffers($value)
    {
        $current = $this->getProperty('offers');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('offers', $current);
        return $this;
    }

    /**
     * @return Offer|Demand|array
     */
    public function getOffers()
    {
        return $this->getProperty('offers');
    }
    /**
     * The [GS1 digital link](https://www.gs1.org/standards/gs1-digital-link) associated with the object. This URL should conform to the particular requirements of digital links. The link should only contain the Application Identifiers (AIs) that are relevant for the entity being annotated, for instance a [[Product]] or an [[Organization]], and for the correct granularity. In particular, for products:<ul>* A Digital Link that contains a serial number (AI ```21```) should only be present on instances of [[IndividualProduct]]* A Digital Link that contains a lot number (AI ```10```) should be annotated as [[SomeProducts]] if only products from that lot are sold, or [[IndividualProduct]] if there is only a specific product.* A Digital Link that contains a global model number (AI ```8013```) should be attached to a [[Product]] or a [[ProductModel]]. Other item types should be adapted similarly.
     * @see https://schema.org/hasGS1DigitalLink
     * @param string|array $value
     * @return $this
     */
    public function hasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setHasGS1DigitalLink($value)
    {
        $this->setProperty('hasGS1DigitalLink', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addHasGS1DigitalLink($value)
    {
        $current = $this->getProperty('hasGS1DigitalLink');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasGS1DigitalLink', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getHasGS1DigitalLink()
    {
        return $this->getProperty('hasGS1DigitalLink');
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
     * The [[mobileUrl]] property is provided for specific situations in which data consumers need to determine whether one of several provided URLs is a dedicated 'mobile site'. To discourage over-use, and reflecting intial usecases, the property is expected only on [[Product]] and [[Offer]], rather than [[Thing]]. The general trend in web technology is towards [responsive design](https://en.wikipedia.org/wiki/Responsive_web_design) in which content can be flexibly adapted to a wide range of browsing environments. Pages and sites referenced with the long-established [[url]] property should ideally also be usable on a wide variety of devices, including mobile phones. In most cases, it would be pointless and counter productive to attempt to update all [[url]] markup to use [[mobileUrl]] for more mobile-oriented pages. The property is intended for the case when items (primarily [[Product]] and [[Offer]]) have extra URLs hosted on an additional "mobile site" alongside the main one. It should not be taken as an endorsement of this publication style.
     * @see https://schema.org/mobileUrl
     * @param string|array $value
     * @return $this
     */
    public function mobileUrl($value)
    {
        $this->setProperty('mobileUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setMobileUrl($value)
    {
        $this->setProperty('mobileUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addMobileUrl($value)
    {
        $current = $this->getProperty('mobileUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('mobileUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getMobileUrl()
    {
        return $this->getProperty('mobileUrl');
    }
    /**
     * The overall rating, based on a collection of reviews or ratings, of the item.
     * @see https://schema.org/aggregateRating
     * @param AggregateRating|array $value
     * @return $this
     */
    public function aggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
     * @param AggregateRating|array $value
     * @return $this
     */
    public function setAggregateRating($value)
    {
        $this->setProperty('aggregateRating', $value);
        return $this;
    }

    /**
     * @param AggregateRating $value
     * @return $this
     */
    public function addAggregateRating($value)
    {
        $current = $this->getProperty('aggregateRating');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('aggregateRating', $current);
        return $this;
    }

    /**
     * @return AggregateRating|array
     */
    public function getAggregateRating()
    {
        return $this->getProperty('aggregateRating');
    }
    /**
     * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described. Since product descriptions tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]]. The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the beginning of the list).
     * @see https://schema.org/negativeNotes
     * @param ItemList|ListItem|string|WebContent|array $value
     * @return $this
     */
    public function negativeNotes($value)
    {
        $this->setProperty('negativeNotes', $value);
        return $this;
    }

    /**
     * @param ItemList|ListItem|string|WebContent|array $value
     * @return $this
     */
    public function setNegativeNotes($value)
    {
        $this->setProperty('negativeNotes', $value);
        return $this;
    }

    /**
     * @param ItemList|ListItem|string|WebContent $value
     * @return $this
     */
    public function addNegativeNotes($value)
    {
        $current = $this->getProperty('negativeNotes');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('negativeNotes', $current);
        return $this;
    }

    /**
     * @return ItemList|ListItem|string|WebContent|array
     */
    public function getNegativeNotes()
    {
        return $this->getProperty('negativeNotes');
    }
    /**
     * A slogan or motto associated with the item.
     * @see https://schema.org/slogan
     * @param string|array $value
     * @return $this
     */
    public function slogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSlogan($value)
    {
        $this->setProperty('slogan', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSlogan($value)
    {
        $current = $this->getProperty('slogan');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('slogan', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSlogan()
    {
        return $this->getProperty('slogan');
    }
    /**
     * A pointer to another, somehow related product (or multiple products).
     * @see https://schema.org/isRelatedTo
     * @param Service|Product|array $value
     * @return $this
     */
    public function isRelatedTo($value)
    {
        $this->setProperty('isRelatedTo', $value);
        return $this;
    }

    /**
     * @param Service|Product|array $value
     * @return $this
     */
    public function setIsRelatedTo($value)
    {
        $this->setProperty('isRelatedTo', $value);
        return $this;
    }

    /**
     * @param Service|Product $value
     * @return $this
     */
    public function addIsRelatedTo($value)
    {
        $current = $this->getProperty('isRelatedTo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isRelatedTo', $current);
        return $this;
    }

    /**
     * @return Service|Product|array
     */
    public function getIsRelatedTo()
    {
        return $this->getProperty('isRelatedTo');
    }
    /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     * @see https://schema.org/model
     * @param string|ProductModel|array $value
     * @return $this
     */
    public function model($value)
    {
        $this->setProperty('model', $value);
        return $this;
    }

    /**
     * @param string|ProductModel|array $value
     * @return $this
     */
    public function setModel($value)
    {
        $this->setProperty('model', $value);
        return $this;
    }

    /**
     * @param string|ProductModel $value
     * @return $this
     */
    public function addModel($value)
    {
        $current = $this->getProperty('model');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('model', $current);
        return $this;
    }

    /**
     * @return string|ProductModel|array
     */
    public function getModel()
    {
        return $this->getProperty('model');
    }
    /**
     * An intended audience, i.e. a group for whom something was created.
     * @see https://schema.org/audience
     * @param Audience|array $value
     * @return $this
     */
    public function audience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
     * @param Audience|array $value
     * @return $this
     */
    public function setAudience($value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
     * @param Audience $value
     * @return $this
     */
    public function addAudience($value)
    {
        $current = $this->getProperty('audience');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('audience', $current);
        return $this;
    }

    /**
     * @return Audience|array
     */
    public function getAudience()
    {
        return $this->getProperty('audience');
    }
    /**
     * A material that something is made from, e.g. leather, wool, cotton, paper.
     * @see https://schema.org/material
     * @param string|Product|array $value
     * @return $this
     */
    public function material($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
     * @param string|Product|array $value
     * @return $this
     */
    public function setMaterial($value)
    {
        $this->setProperty('material', $value);
        return $this;
    }

    /**
     * @param string|Product $value
     * @return $this
     */
    public function addMaterial($value)
    {
        $current = $this->getProperty('material');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('material', $current);
        return $this;
    }

    /**
     * @return string|Product|array
     */
    public function getMaterial()
    {
        return $this->getProperty('material');
    }
    /**
     * A pattern that something has, for example 'polka dot', 'striped', 'Canadian flag'. Values are typically expressed as text, although links to controlled value schemes are also supported.
     * @see https://schema.org/pattern
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function pattern($value)
    {
        $this->setProperty('pattern', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setPattern($value)
    {
        $this->setProperty('pattern', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addPattern($value)
    {
        $current = $this->getProperty('pattern');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pattern', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getPattern()
    {
        return $this->getProperty('pattern');
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
     * A color swatch image, visualizing the color of a [[Product]]. Should match the textual description specified in the [[color]] property. This can be a URL or a fully described ImageObject.
     * @see https://schema.org/colorSwatch
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function colorSwatch($value)
    {
        $this->setProperty('colorSwatch', $value);
        return $this;
    }

    /**
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function setColorSwatch($value)
    {
        $this->setProperty('colorSwatch', $value);
        return $this;
    }

    /**
     * @param string|ImageObject $value
     * @return $this
     */
    public function addColorSwatch($value)
    {
        $current = $this->getProperty('colorSwatch');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('colorSwatch', $current);
        return $this;
    }

    /**
     * @return string|ImageObject|array
     */
    public function getColorSwatch()
    {
        return $this->getProperty('colorSwatch');
    }
    /**
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product [[isVariantOf]].
     * @see https://schema.org/inProductGroupWithID
     * @param string|array $value
     * @return $this
     */
    public function inProductGroupWithID($value)
    {
        $this->setProperty('inProductGroupWithID', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setInProductGroupWithID($value)
    {
        $this->setProperty('inProductGroupWithID', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addInProductGroupWithID($value)
    {
        $current = $this->getProperty('inProductGroupWithID');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inProductGroupWithID', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getInProductGroupWithID()
    {
        return $this->getProperty('inProductGroupWithID');
    }
    /**
     * The place where the product was assembled.
     * @see https://schema.org/countryOfAssembly
     * @param string|array $value
     * @return $this
     */
    public function countryOfAssembly($value)
    {
        $this->setProperty('countryOfAssembly', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCountryOfAssembly($value)
    {
        $this->setProperty('countryOfAssembly', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCountryOfAssembly($value)
    {
        $current = $this->getProperty('countryOfAssembly');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('countryOfAssembly', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCountryOfAssembly()
    {
        return $this->getProperty('countryOfAssembly');
    }
    /**
     * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
     * @see https://schema.org/brand
     * @param Organization|Brand|array $value
     * @return $this
     */
    public function brand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
     * @param Organization|Brand|array $value
     * @return $this
     */
    public function setBrand($value)
    {
        $this->setProperty('brand', $value);
        return $this;
    }

    /**
     * @param Organization|Brand $value
     * @return $this
     */
    public function addBrand($value)
    {
        $current = $this->getProperty('brand');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('brand', $current);
        return $this;
    }

    /**
     * @return Organization|Brand|array
     */
    public function getBrand()
    {
        return $this->getProperty('brand');
    }
    /**
     * An award won by or for this item.
     * @see https://schema.org/award
     * @param string|array $value
     * @return $this
     */
    public function award($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAward($value)
    {
        $this->setProperty('award', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAward($value)
    {
        $current = $this->getProperty('award');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('award', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAward()
    {
        return $this->getProperty('award');
    }
    /**
     * Indicates a ProductReturnPolicy that may be applicable.
     * @see https://schema.org/hasProductReturnPolicy
     * @param ProductReturnPolicy|array $value
     * @return $this
     */
    public function hasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
     * @param ProductReturnPolicy|array $value
     * @return $this
     */
    public function setHasProductReturnPolicy($value)
    {
        $this->setProperty('hasProductReturnPolicy', $value);
        return $this;
    }

    /**
     * @param ProductReturnPolicy $value
     * @return $this
     */
    public function addHasProductReturnPolicy($value)
    {
        $current = $this->getProperty('hasProductReturnPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasProductReturnPolicy', $current);
        return $this;
    }

    /**
     * @return ProductReturnPolicy|array
     */
    public function getHasProductReturnPolicy()
    {
        return $this->getProperty('hasProductReturnPolicy');
    }
    /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     * @see https://schema.org/releaseDate
     * @param mixed $value
     * @return $this
     */
    public function releaseDate($value)
    {
        $this->setProperty('releaseDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setReleaseDate($value)
    {
        $this->setProperty('releaseDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addReleaseDate($value)
    {
        $current = $this->getProperty('releaseDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('releaseDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->getProperty('releaseDate');
    }
    /**
     * The height of the item.
     * @see https://schema.org/height
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance|array $value
     * @return $this
     */
    public function setHeight($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Distance $value
     * @return $this
     */
    public function addHeight($value)
    {
        $current = $this->getProperty('height');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('height', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Distance|array
     */
    public function getHeight()
    {
        return $this->getProperty('height');
    }
    /**
     * Used to tag an item to be intended or suitable for consumption or use by adults only.
     * @see https://schema.org/hasAdultConsideration
     * @param AdultOrientedEnumeration|array $value
     * @return $this
     */
    public function hasAdultConsideration($value)
    {
        $this->setProperty('hasAdultConsideration', $value);
        return $this;
    }

    /**
     * @param AdultOrientedEnumeration|array $value
     * @return $this
     */
    public function setHasAdultConsideration($value)
    {
        $this->setProperty('hasAdultConsideration', $value);
        return $this;
    }

    /**
     * @param AdultOrientedEnumeration $value
     * @return $this
     */
    public function addHasAdultConsideration($value)
    {
        $current = $this->getProperty('hasAdultConsideration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasAdultConsideration', $current);
        return $this;
    }

    /**
     * @return AdultOrientedEnumeration|array
     */
    public function getHasAdultConsideration()
    {
        return $this->getProperty('hasAdultConsideration');
    }
    /**
     * The date of production of the item, e.g. vehicle.
     * @see https://schema.org/productionDate
     * @param mixed $value
     * @return $this
     */
    public function productionDate($value)
    {
        $this->setProperty('productionDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setProductionDate($value)
    {
        $this->setProperty('productionDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addProductionDate($value)
    {
        $current = $this->getProperty('productionDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('productionDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductionDate()
    {
        return $this->getProperty('productionDate');
    }
    /**
     * A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @see https://schema.org/hasMeasurement
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function hasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setHasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addHasMeasurement($value)
    {
        $current = $this->getProperty('hasMeasurement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasMeasurement', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getHasMeasurement()
    {
        return $this->getProperty('hasMeasurement');
    }
    /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     * @see https://schema.org/isAccessoryOrSparePartFor
     * @param Product|array $value
     * @return $this
     */
    public function isAccessoryOrSparePartFor($value)
    {
        $this->setProperty('isAccessoryOrSparePartFor', $value);
        return $this;
    }

    /**
     * @param Product|array $value
     * @return $this
     */
    public function setIsAccessoryOrSparePartFor($value)
    {
        $this->setProperty('isAccessoryOrSparePartFor', $value);
        return $this;
    }

    /**
     * @param Product $value
     * @return $this
     */
    public function addIsAccessoryOrSparePartFor($value)
    {
        $current = $this->getProperty('isAccessoryOrSparePartFor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isAccessoryOrSparePartFor', $current);
        return $this;
    }

    /**
     * @return Product|array
     */
    public function getIsAccessoryOrSparePartFor()
    {
        return $this->getProperty('isAccessoryOrSparePartFor');
    }
}
