<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Product\ProductGroup;

/**
 * A datasheet or vendor specification of a product (in the sense of a prototypical description).
 * @see https://schema.org/ProductModel
 * @package Sohophp\SchemaOrg\Thing\Product
 */
class ProductModel extends Product
{
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
     * A pointer from a previous, often discontinued variant of the product to its newer variant.
     * @see https://schema.org/predecessorOf
     * @param ProductModel|array $value
     * @return $this
     */
    public function predecessorOf($value)
    {
        $this->setProperty('predecessorOf', $value);
        return $this;
    }

    /**
     * @param ProductModel|array $value
     * @return $this
     */
    public function setPredecessorOf($value)
    {
        $this->setProperty('predecessorOf', $value);
        return $this;
    }

    /**
     * @param ProductModel $value
     * @return $this
     */
    public function addPredecessorOf($value)
    {
        $current = $this->getProperty('predecessorOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('predecessorOf', $current);
        return $this;
    }

    /**
     * @return ProductModel|array
     */
    public function getPredecessorOf()
    {
        return $this->getProperty('predecessorOf');
    }
    /**
     * A pointer from a newer variant of a product to its previous, often discontinued predecessor.
     * @see https://schema.org/successorOf
     * @param ProductModel|array $value
     * @return $this
     */
    public function successorOf($value)
    {
        $this->setProperty('successorOf', $value);
        return $this;
    }

    /**
     * @param ProductModel|array $value
     * @return $this
     */
    public function setSuccessorOf($value)
    {
        $this->setProperty('successorOf', $value);
        return $this;
    }

    /**
     * @param ProductModel $value
     * @return $this
     */
    public function addSuccessorOf($value)
    {
        $current = $this->getProperty('successorOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('successorOf', $current);
        return $this;
    }

    /**
     * @return ProductModel|array
     */
    public function getSuccessorOf()
    {
        return $this->getProperty('successorOf');
    }
}
