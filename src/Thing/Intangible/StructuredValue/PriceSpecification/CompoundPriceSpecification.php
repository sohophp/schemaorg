<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
* A compound price specification is one that bundles multiple prices that all apply in combination for different dimensions of consumption. Use the name property of the attached unit price specification for indicating the dimension of a price component (e.g. "electricity" or "final cleaning").
* @see schema:CompoundPriceSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class CompoundPriceSpecification extends PriceSpecification
{
   /**
        * This property links to all [[UnitPriceSpecification]] nodes that apply in parallel for the [[CompoundPriceSpecification]] node.
        */
    protected $priceComponent = null;

   /**
        * Defines the type of a price specified for an offered product, for example a list price, a (temporary) sale price or a manufacturer suggested retail price. If multiple prices are specified for an offer the [[priceType]] property can be used to identify the type of each such specified price. The value of priceType can be specified as a value from enumeration PriceTypeEnumeration or as a free form text string for price types that are not already predefined in PriceTypeEnumeration.
        */
    protected $priceType = null;


    /**
    * @param array|string $value
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

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPriceType($value)
    {
        $this->setProperty('priceType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPriceType()
    {
       return $this->getProperty('priceType');
    }


}
