<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A placeholder for multiple similar products of the same kind.
* @see schema:SomeProducts
* @package Sohophp\SchemaOrg\Thing\Product
*/
class SomeProducts extends Product
{
   /**
        * The current approximate inventory level for the item or items.
        */
    protected $inventoryLevel = null;


    /**
    * @param array|string $value
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
