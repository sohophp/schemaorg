<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\MenuItem;

/**
  * A sub-grouping of food or drink items in a menu. E.g. courses (such as
 * 'Dinner', 'Breakfast', etc.), specific type of dishes (such as 'Meat',
 * 'Vegan', 'Drinks', etc.), or some other classification made by the menu
 * provider.
  * @see schema:MenuSection
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MenuSection extends CreativeWork
{


  /**
      * A subgrouping of the menu (by dishes, course, serving time period, etc.).
    * @param MenuSection|array $value
  * @return $this
  */
  public function hasMenuSection($value)
  {
  $this->setProperty('hasMenuSection', $value);
  return $this;
  }

  /**
  * @param MenuSection|array $value
  * @return $this
  */
  public function setHasMenuSection($value)
  {
  $this->setProperty('hasMenuSection', $value);
  return $this;
  }

  /**
  * @param MenuSection $value
  * @return $this
  */
  public function addHasMenuSection($value)
  {
  $current = $this->getProperty('hasMenuSection');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasMenuSection', $current);
  return $this;
  }

  /**
  * @return MenuSection|array
  */
  public function getHasMenuSection()
  {
  return $this->getProperty('hasMenuSection');
  }


  /**
      * A food or drink item contained in a menu or menu section.
    * @param MenuItem|array $value
  * @return $this
  */
  public function hasMenuItem($value)
  {
  $this->setProperty('hasMenuItem', $value);
  return $this;
  }

  /**
  * @param MenuItem|array $value
  * @return $this
  */
  public function setHasMenuItem($value)
  {
  $this->setProperty('hasMenuItem', $value);
  return $this;
  }

  /**
  * @param MenuItem $value
  * @return $this
  */
  public function addHasMenuItem($value)
  {
  $current = $this->getProperty('hasMenuItem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasMenuItem', $current);
  return $this;
  }

  /**
  * @return MenuItem|array
  */
  public function getHasMenuItem()
  {
  return $this->getProperty('hasMenuItem');
  }


}
