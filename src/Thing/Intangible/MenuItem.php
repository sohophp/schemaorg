<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\CreativeWork\MenuSection;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Diet;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RestrictedDiet;
  use Sohophp\SchemaOrg\Thing\Intangible\Offer;
  use Sohophp\SchemaOrg\Thing\Intangible\Demand;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation;

/**
  * A food or drink item listed in a menu or menu section.
  * @see schema:MenuItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MenuItem extends Intangible
{


  /**
      * Additional menu item(s) such as a side dish of salad or side order of fries
 * that can be added to this menu item. Additionally it can be a menu section
 * containing allowed add-on menu items for this menu item.
    * @param MenuSection|MenuItem|array $value
  * @return $this
  */
  public function menuAddOn($value)
  {
  $this->setProperty('menuAddOn', $value);
  return $this;
  }

  /**
  * @param MenuSection|MenuItem|array $value
  * @return $this
  */
  public function setMenuAddOn($value)
  {
  $this->setProperty('menuAddOn', $value);
  return $this;
  }

  /**
  * @param MenuSection|MenuItem $value
  * @return $this
  */
  public function addMenuAddOn($value)
  {
  $current = $this->getProperty('menuAddOn');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('menuAddOn', $current);
  return $this;
  }

  /**
  * @return MenuSection|MenuItem|array
  */
  public function getMenuAddOn()
  {
  return $this->getProperty('menuAddOn');
  }


  /**
      * Indicates a dietary restriction or guideline for which this recipe or menu
 * item is suitable, e.g. diabetic, halal etc.
    * @param Diet|RestrictedDiet|array $value
  * @return $this
  */
  public function suitableForDiet($value)
  {
  $this->setProperty('suitableForDiet', $value);
  return $this;
  }

  /**
  * @param Diet|RestrictedDiet|array $value
  * @return $this
  */
  public function setSuitableForDiet($value)
  {
  $this->setProperty('suitableForDiet', $value);
  return $this;
  }

  /**
  * @param Diet|RestrictedDiet $value
  * @return $this
  */
  public function addSuitableForDiet($value)
  {
  $current = $this->getProperty('suitableForDiet');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('suitableForDiet', $current);
  return $this;
  }

  /**
  * @return Diet|RestrictedDiet|array
  */
  public function getSuitableForDiet()
  {
  return $this->getProperty('suitableForDiet');
  }


  /**
      * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
 * Use [[businessFunction]] to indicate the kind of transaction offered, i.e.
 * sell, lease, etc. This property can also be used to describe a [[Demand]].
 * While this property is listed as expected on a number of common types, it can
 * be used in others. In that case, using a second type, such as Product or a
 * subtype of Product, can clarify the nature of the offer.
    * @param Offer|Demand|array $value
  * @return $this
  */
  public function offers($value)
  {
  $this->setProperty('offers', $value);
  return $this;
  }

  /**
  * @param Offer|Demand|array $value
  * @return $this
  */
  public function setOffers($value)
  {
  $this->setProperty('offers', $value);
  return $this;
  }

  /**
  * @param Offer|Demand $value
  * @return $this
  */
  public function addOffers($value)
  {
  $current = $this->getProperty('offers');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('offers', $current);
  return $this;
  }

  /**
  * @return Offer|Demand|array
  */
  public function getOffers()
  {
  return $this->getProperty('offers');
  }


  /**
      * Nutrition information about the recipe or menu item.
    * @param NutritionInformation|array $value
  * @return $this
  */
  public function nutrition($value)
  {
  $this->setProperty('nutrition', $value);
  return $this;
  }

  /**
  * @param NutritionInformation|array $value
  * @return $this
  */
  public function setNutrition($value)
  {
  $this->setProperty('nutrition', $value);
  return $this;
  }

  /**
  * @param NutritionInformation $value
  * @return $this
  */
  public function addNutrition($value)
  {
  $current = $this->getProperty('nutrition');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('nutrition', $current);
  return $this;
  }

  /**
  * @return NutritionInformation|array
  */
  public function getNutrition()
  {
  return $this->getProperty('nutrition');
  }


}
