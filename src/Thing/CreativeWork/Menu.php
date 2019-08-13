<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\MenuItem;
use Sohophp\SchemaOrg\Thing\CreativeWork\MenuSection;

/**
* A structured representation of food or drink items available from a FoodEstablishment.
* @see http://schema.org/Menu
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Menu extends CreativeWork
{

    /**
    * A food or drink item contained in a menu or menu section.
    * @param MenuItem $value
    * @return $this
    */
    public function hasMenuItem(?MenuItem $value)
    {
        $this->setProperty('hasMenuItem', $value);
        return $this;
    }

    /**
    * A subgrouping of the menu (by dishes, course, serving time period, etc.).
    * @param MenuSection $value
    * @return $this
    */
    public function hasMenuSection(?MenuSection $value)
    {
        $this->setProperty('hasMenuSection', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Menu','Thing\\Menu');

