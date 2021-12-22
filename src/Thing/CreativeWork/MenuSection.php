<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\MenuItem;

/**
* A sub-grouping of food or drink items in a menu. E.g. courses (such as 'Dinner', 'Breakfast', etc.), specific type of dishes (such as 'Meat', 'Vegan', 'Drinks', etc.), or some other classification made by the menu provider.
* @see http://schema.org/MenuSection
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class MenuSection extends CreativeWork
{

    /**
    * A food or drink item contained in a menu or menu section.
    * @param MenuItem|array $value
    * @return $this
    */
    public function hasMenuItem(?MenuItem $value)
    {
        $this->setProperty('hasMenuItem', $value);
        return $this;
    }
   /**
    * @param MenuItem|array $value
    * @return $this
    */
    public function setHasMenuItem(?MenuItem $value)
    {
        $this->setProperty('hasMenuItem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasMenuItem()
    {
       return $this->getProperty('hasMenuItem');
    }

    /**
    * A subgrouping of the menu (by dishes, course, serving time period, etc.).
    * @param MenuSection|array $value
    * @return $this
    */
    public function hasMenuSection(?MenuSection $value)
    {
        $this->setProperty('hasMenuSection', $value);
        return $this;
    }
   /**
    * @param MenuSection|array $value
    * @return $this
    */
    public function setHasMenuSection(?MenuSection $value)
    {
        $this->setProperty('hasMenuSection', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasMenuSection()
    {
       return $this->getProperty('hasMenuSection');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\MenuSection','Thing\\MenuSection');

