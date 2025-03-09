<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A set of products (either [[ProductGroup]]s or specific variants) that are listed together e.g. in an [[Offer]].
* @see schema:ProductCollection
* @package Sohophp\SchemaOrg\Thing\Product
*/
class ProductCollection extends Product
{
   /**
        * This links to a node or nodes indicating the exact quantity of the products included in  an [[Offer]] or [[ProductCollection]].
        */
    protected $includesObject = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setIncludesObject($value)
    {
        $this->setProperty('includesObject', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludesObject()
    {
       return $this->getProperty('includesObject');
    }


}
