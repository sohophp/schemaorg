<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
 * A ProductGroup represents a group of [[Product]]s that vary only in certain well-described ways, such as by [[size]], [[color]], [[material]] etc. While a ProductGroup itself is not directly offered for sale, the various varying products that it represents can be. The ProductGroup serves as a prototype or template, standing in for all of the products who have an [[isVariantOf]] relationship to it. As such, properties (including additional types) can be applied to the ProductGroup to represent characteristics shared by each of the (possibly very many) variants. Properties that reference a ProductGroup are not included in this mechanism; neither are the following specific properties [[variesBy]], [[hasVariant]], [[url]].
 * @see https://schema.org/ProductGroup
 * @package Sohophp\SchemaOrg\Thing\Product
 */
class ProductGroup extends Product
{
    /**
     * Indicates a textual identifier for a ProductGroup.
     * @see https://schema.org/productGroupID
     * @param string|array $value
     * @return $this
     */
    public function productGroupID($value)
    {
        $this->setProperty('productGroupID', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setProductGroupID($value)
    {
        $this->setProperty('productGroupID', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addProductGroupID($value)
    {
        $current = $this->getProperty('productGroupID');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('productGroupID', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getProductGroupID()
    {
        return $this->getProperty('productGroupID');
    }
    /**
     * Indicates the property or properties by which the variants in a [[ProductGroup]] vary, e.g. their size, color etc. Schema.org properties can be referenced by their short name e.g. "color"; terms defined elsewhere can be referenced with their URIs.
     * @see https://schema.org/variesBy
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function variesBy($value)
    {
        $this->setProperty('variesBy', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setVariesBy($value)
    {
        $this->setProperty('variesBy', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addVariesBy($value)
    {
        $current = $this->getProperty('variesBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('variesBy', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getVariesBy()
    {
        return $this->getProperty('variesBy');
    }
    /**
     * Indicates a [[Product]] that is a member of this [[ProductGroup]] (or [[ProductModel]]).
     * @see https://schema.org/hasVariant
     * @param Product|array $value
     * @return $this
     */
    public function hasVariant($value)
    {
        $this->setProperty('hasVariant', $value);
        return $this;
    }

    /**
     * @param Product|array $value
     * @return $this
     */
    public function setHasVariant($value)
    {
        $this->setProperty('hasVariant', $value);
        return $this;
    }

    /**
     * @param Product $value
     * @return $this
     */
    public function addHasVariant($value)
    {
        $current = $this->getProperty('hasVariant');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasVariant', $current);
        return $this;
    }

    /**
     * @return Product|array
     */
    public function getHasVariant()
    {
        return $this->getProperty('hasVariant');
    }
}
