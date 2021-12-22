<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* An item used as either a tool or supply when performing the instructions for how to to achieve a result.
* @see http://schema.org/HowToItem
* @package Sohophp\SchemaOrg\Thing\Intangible\ListItem

*
*/
class HowToItem extends ListItem
{

    /**
    * The required quantity of the item(s).
    * @param string|QuantitativeValue|array $value
    * @return $this
    */
    public function requiredQuantity($value)
    {
        $this->setProperty('requiredQuantity', $value);
        return $this;
    }
   /**
    * @param string|QuantitativeValue|array $value
    * @return $this
    */
    public function setRequiredQuantity($value)
    {
        $this->setProperty('requiredQuantity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRequiredQuantity()
    {
       return $this->getProperty('requiredQuantity');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\ListItem\\HowToItem','Thing\\HowToItem');

