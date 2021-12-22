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
    * @param ProductModel|array $value
    * @return $this
    */
    public function predecessorOf(?ProductModel $value)
    {
        $this->setProperty('predecessorOf', $value);
        return $this;
    }
   /**
    * @param ProductModel|array $value
    * @return $this
    */
    public function setPredecessorOf(?ProductModel $value)
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
    * @param ProductModel|array $value
    * @return $this
    */
    public function successorOf(?ProductModel $value)
    {
        $this->setProperty('successorOf', $value);
        return $this;
    }
   /**
    * @param ProductModel|array $value
    * @return $this
    */
    public function setSuccessorOf(?ProductModel $value)
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
    * @param ProductModel|array $value
    * @return $this
    */
    public function isVariantOf(?ProductModel $value)
    {
        $this->setProperty('isVariantOf', $value);
        return $this;
    }
   /**
    * @param ProductModel|array $value
    * @return $this
    */
    public function setIsVariantOf(?ProductModel $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Product\\ProductModel','Thing\\ProductModel');

