<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\MenuItem;
/**
* A sub-grouping of food or drink items in a menu. E.g. courses (such as 'Dinner', 'Breakfast', etc.), specific type of dishes (such as 'Meat', 'Vegan', 'Drinks', etc.), or some other classification made by the menu provider.
* @see http://schema.org/MenuSection
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MenuSection extends CreativeWork
{

     
     /**
     * A food or drink item contained in a menu or menu section.
     * @param MenuItem $value
     * @return $this
     */

     public function hasMenuItem(?MenuItem $value):self
     {
        $this->setProperty("hasMenuItem",$value);
        return $this;
     }

     
     /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     * @param MenuSection $value
     * @return $this
     */

     public function hasMenuSection(?MenuSection $value):self
     {
        $this->setProperty("hasMenuSection",$value);
        return $this;
     }

     
}

