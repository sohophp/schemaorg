<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\ListItem;

use Sohophp\SchemaOrg\Thing\Intangible\ListItem;

/**
* An item used as either a tool or supply when performing the instructions for how to achieve a result.
* @see schema:HowToItem
* @package Sohophp\SchemaOrg\Thing\Intangible\ListItem
*/
class HowToItem extends ListItem
{
   /**
        * The required quantity of the item(s).
        */
    protected $requiredQuantity = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setRequiredQuantity($value)
    {
        $this->setProperty('requiredQuantity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRequiredQuantity()
    {
       return $this->getProperty('requiredQuantity');
    }


}
