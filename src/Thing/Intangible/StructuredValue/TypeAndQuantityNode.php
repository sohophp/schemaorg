<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
/**
* A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
* @see http://schema.org/TypeAndQuantityNode
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class TypeAndQuantityNode extends StructuredValue
{

     
     /**
     * The quantity of the goods included in the offer.
     * @param  $value
     * @return $this
     */

     public function amountOfThisGood( $value):self
     {
        $this->setProperty("amountOfThisGood",$value);
        return $this;
     }

     
}

