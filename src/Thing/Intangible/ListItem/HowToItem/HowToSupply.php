<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A supply consumed when performing the instructions for how to achieve a
 * result.
* @see http://schema.org/HowToSupply
* @package Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem
*/
class HowToSupply extends HowToItem
{


    /**
        * The estimated cost of the supply or supplies consumed when performing
 * instructions.
        * @param string|MonetaryAmount|array|mixed $value
    * @return $this
    */
    public function estimatedCost($value)
    {
        $this->setProperty('estimatedCost', $value);
        return $this;
    }

    /**
    * @param string|MonetaryAmount|array|mixed $value
    * @return $this
    */
    public function setEstimatedCost($value)
    {
        $this->setProperty('estimatedCost', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEstimatedCost()
    {
       return $this->getProperty('estimatedCost');
    }


}
