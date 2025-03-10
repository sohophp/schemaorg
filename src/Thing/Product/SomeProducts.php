<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A placeholder for multiple similar products of the same kind.
* @see http://schema.org/SomeProducts
* @package Sohophp\SchemaOrg\Thing\Product
*/
class SomeProducts extends Product
{


    /**
        * The current approximate inventory level for the item or items.
        * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function inventoryLevel($value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }

    /**
    * @param QuantitativeValue|array|string|mixed $value
    * @return $this
    */
    public function setInventoryLevel($value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInventoryLevel()
    {
       return $this->getProperty('inventoryLevel');
    }


}
