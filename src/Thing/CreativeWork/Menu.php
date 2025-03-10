<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A structured representation of food or drink items available from a
 * FoodEstablishment.
* @see schema:Menu
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Menu extends CreativeWork
{


    /**
        * A food or drink item contained in a menu or menu section.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasMenuItem($value)
    {
        $this->setProperty('hasMenuItem', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasMenuItem($value)
    {
        $this->setProperty('hasMenuItem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMenuItem()
    {
       return $this->getProperty('hasMenuItem');
    }


    /**
        * A subgrouping of the menu (by dishes, course, serving time period, etc.).
        * @param array|string|mixed $value
    * @return $this
    */
    public function hasMenuSection($value)
    {
        $this->setProperty('hasMenuSection', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHasMenuSection($value)
    {
        $this->setProperty('hasMenuSection', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMenuSection()
    {
       return $this->getProperty('hasMenuSection');
    }


}
