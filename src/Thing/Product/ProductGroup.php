<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A ProductGroup represents a group of [[Product]]s that vary only in certain well-described ways, such as by [[size]], [[color]], [[material]] etc.

While a ProductGroup itself is not directly offered for sale, the various varying products that it represents can be. The ProductGroup serves as a prototype or template, standing in for all of the products who have an [[isVariantOf]] relationship to it. As such, properties (including additional types) can be applied to the ProductGroup to represent characteristics shared by each of the (possibly very many) variants. Properties that reference a ProductGroup are not included in this mechanism; neither are the following specific properties [[variesBy]], [[hasVariant]], [[url]]. 
* @see schema:ProductGroup
* @package Sohophp\SchemaOrg\Thing\Product
*/
class ProductGroup extends Product
{
   /**
        * Indicates a textual identifier for a ProductGroup.
        */
    protected $productGroupID = null;

   /**
        * Indicates the property or properties by which the variants in a [[ProductGroup]] vary, e.g. their size, color etc. Schema.org properties can be referenced by their short name e.g. "color"; terms defined elsewhere can be referenced with their URIs.
        */
    protected $variesBy = null;

   /**
        * Indicates a [[Product]] that is a member of this [[ProductGroup]] (or [[ProductModel]]).
        */
    protected $hasVariant = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setProductGroupID($value)
    {
        $this->setProperty('productGroupID', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductGroupID()
    {
       return $this->getProperty('productGroupID');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setVariesBy($value)
    {
        $this->setProperty('variesBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVariesBy()
    {
       return $this->getProperty('variesBy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasVariant($value)
    {
        $this->setProperty('hasVariant', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasVariant()
    {
       return $this->getProperty('hasVariant');
    }


}
