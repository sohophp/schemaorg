<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A datasheet or vendor specification of a product (in the sense of a prototypical description).
* @see http://schema.org/ProductModel
* @package Sohophp\SchemaOrg\Thing\Product

*
*/
class ProductModel extends Product
{

    /**
    * A pointer from a previous, often discontinued variant of the product to its newer variant.
    * @param ProductModel|array|string $value
    * @return $this
    * @deprecated use setPredecessorOf
    */
    public function predecessorOf($value)
    {
        $this->setProperty('predecessorOf', $value);
        return $this;
    }
   /**
    * @param ProductModel|array|string $value
    * @return $this
    */
    public function setPredecessorOf($value)
    {
        $this->setProperty('predecessorOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPredecessorOf()
    {
       return $this->getProperty('predecessorOf');
    }

    /**
    * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
    * @param ProductModel|array|string $value
    * @return $this
    * @deprecated use setSuccessorOf
    */
    public function successorOf($value)
    {
        $this->setProperty('successorOf', $value);
        return $this;
    }
   /**
    * @param ProductModel|array|string $value
    * @return $this
    */
    public function setSuccessorOf($value)
    {
        $this->setProperty('successorOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSuccessorOf()
    {
       return $this->getProperty('successorOf');
    }

    /**
    * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
    * @param ProductModel|array|string $value
    * @return $this
    * @deprecated use setIsVariantOf
    */
    public function isVariantOf($value)
    {
        $this->setProperty('isVariantOf', $value);
        return $this;
    }
   /**
    * @param ProductModel|array|string $value
    * @return $this
    */
    public function setIsVariantOf($value)
    {
        $this->setProperty('isVariantOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsVariantOf()
    {
       return $this->getProperty('isVariantOf');
    }


}
