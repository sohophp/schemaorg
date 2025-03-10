<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification;

/**
* A compound price specification is one that bundles multiple prices that all
 * apply in combination for different dimensions of consumption. Use the name
 * property of the attached unit price specification for indicating the
 * dimension of a price component (e.g. "electricity" or "final cleaning").
* @see http://schema.org/CompoundPriceSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class CompoundPriceSpecification extends PriceSpecification
{


    /**
        * This property links to all [[UnitPriceSpecification]] nodes that apply in
 * parallel for the [[CompoundPriceSpecification]] node.
        * @param UnitPriceSpecification|array|string|mixed $value
    * @return $this
    */
    public function priceComponent($value)
    {
        $this->setProperty('priceComponent', $value);
        return $this;
    }

    /**
    * @param UnitPriceSpecification|array|string|mixed $value
    * @return $this
    */
    public function setPriceComponent($value)
    {
        $this->setProperty('priceComponent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceComponent()
    {
       return $this->getProperty('priceComponent');
    }


}
