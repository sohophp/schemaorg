<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification;
/**
* A compound price specification is one that bundles multiple prices that all apply in combination for different dimensions of consumption. Use the name property of the attached unit price specification for indicating the dimension of a price component (e.g. "electricity" or "final cleaning").
* @see http://schema.org/CompoundPriceSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class CompoundPriceSpecification extends PriceSpecification
{

     
     /**
     * This property links to all <a class="localLink" href="http://schema.org/UnitPriceSpecification">UnitPriceSpecification</a> nodes that apply in parallel for the <a class="localLink" href="http://schema.org/CompoundPriceSpecification">CompoundPriceSpecification</a> node.
     * @param UnitPriceSpecification $value
     * @return $this
     */

     public function priceComponent(?UnitPriceSpecification $value):self
     {
        $this->setProperty("priceComponent",$value);
        return $this;
     }

     
}

