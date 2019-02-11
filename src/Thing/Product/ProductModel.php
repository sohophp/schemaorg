<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A datasheet or vendor specification of a product (in the sense of a prototypical description).
* @see http://schema.org/ProductModel
* @package Sohophp\SchemaOrg\Thing\Product
*/
class ProductModel extends Product
{

    /**
    * A pointer from a previous, often discontinued variant of the product to its newer variant.
    * @param ProductModel $value
    * @return $this
    */
    public function predecessorOf(?ProductModel $value)
    {
        $this->setProperty('predecessorOf', $value);
        return $this;
    }

    /**
    * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
    * @param ProductModel $value
    * @return $this
    */
    public function successorOf(?ProductModel $value)
    {
        $this->setProperty('successorOf', $value);
        return $this;
    }

    /**
    * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
    * @param ProductModel $value
    * @return $this
    */
    public function isVariantOf(?ProductModel $value)
    {
        $this->setProperty('isVariantOf', $value);
        return $this;
    }


}

