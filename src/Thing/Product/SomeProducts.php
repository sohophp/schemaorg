<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A placeholder for multiple similar products of the same kind.
* @see http://schema.org/SomeProducts
* @package Sohophp\SchemaOrg\Thing\Product

*
*/
class SomeProducts extends Product
{

    /**
    * The current approximate inventory level for the item or items.
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function inventoryLevel(?QuantitativeValue $value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setInventoryLevel(?QuantitativeValue $value)
    {
        $this->setProperty('inventoryLevel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getInventoryLevel()
    {
       return $this->getProperty('inventoryLevel');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Product\\SomeProducts','Thing\\SomeProducts');

