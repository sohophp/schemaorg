<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A datasheet or vendor specification of a product (in the sense of a
 * prototypical description).
* @see schema:ProductModel
* @package Sohophp\SchemaOrg\Thing\Product
*/
class ProductModel extends Product
{


    /**
        * Indicates the kind of product that this is a variant of. In the case of
 * [[ProductModel]], this is a pointer (from a ProductModel) to a base product
 * from which this product is a variant. It is safe to infer that the variant
 * inherits all product features from the base model, unless defined locally.
 * This is not transitive. In the case of a [[ProductGroup]], the group
 * description also serves as a template, representing a set of Products that
 * vary on explicitly defined, specific dimensions only (so it defines both a
 * set of variants, as well as which values distinguish amongst those variants).
 * When used with [[ProductGroup]], this property can apply to any [[Product]]
 * included in the group.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isVariantOf($value)
    {
        $this->setProperty('isVariantOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A pointer from a newer variant of a product  to its previous, often
 * discontinued predecessor.
        * @param array|string|mixed $value
    * @return $this
    */
    public function successorOf($value)
    {
        $this->setProperty('successorOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSuccessorOf($value)
    {
        $this->setProperty('successorOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuccessorOf()
    {
       return $this->getProperty('successorOf');
    }


    /**
        * A pointer from a previous, often discontinued variant of the product to its
 * newer variant.
        * @param array|string|mixed $value
    * @return $this
    */
    public function predecessorOf($value)
    {
        $this->setProperty('predecessorOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPredecessorOf($value)
    {
        $this->setProperty('predecessorOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPredecessorOf()
    {
       return $this->getProperty('predecessorOf');
    }


}
