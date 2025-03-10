<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem;

/**
* A supply consumed when performing the instructions for how to achieve a
 * result.
* @see schema:HowToSupply
* @package Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem
*/
class HowToSupply extends HowToItem
{


    /**
        * The estimated cost of the supply or supplies consumed when performing
 * instructions.
        * @param array|string|mixed $value
    * @return $this
    */
    public function estimatedCost($value)
    {
        $this->setProperty('estimatedCost', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
