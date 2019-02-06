<?php

declare (strict_types=1);

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
     * @param QuantitativeValue $value
     * @return $this
     */

     public function inventoryLevel(?QuantitativeValue $value):self
     {
        $this->setProperty("inventoryLevel",$value);
        return $this;
     }

     
}

