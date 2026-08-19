<?php
namespace Sohophp\SchemaOrg\Thing\Action\CreateAction;

  use Sohophp\SchemaOrg\Thing\Action\CreateAction;
  use Sohophp\SchemaOrg\Thing\Event\FoodEvent;
  use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\FoodEstablishment;
  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\CreativeWork\HowTo\Recipe;

/**
  * The act of producing/preparing food.
  * @see schema:CookAction
* @package Sohophp\SchemaOrg\Thing\Action\CreateAction
*/
class CookAction extends CreateAction
{


  /**
      * A sub property of location. The specific food event where the action
 * occurred.
    * @param FoodEvent|array $value
  * @return $this
  */
  public function foodEvent($value)
  {
  $this->setProperty('foodEvent', $value);
  return $this;
  }

  /**
  * @param FoodEvent|array $value
  * @return $this
  */
  public function setFoodEvent($value)
  {
  $this->setProperty('foodEvent', $value);
  return $this;
  }

  /**
  * @param FoodEvent $value
  * @return $this
  */
  public function addFoodEvent($value)
  {
  $current = $this->getProperty('foodEvent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('foodEvent', $current);
  return $this;
  }

  /**
  * @return FoodEvent|array
  */
  public function getFoodEvent()
  {
  return $this->getProperty('foodEvent');
  }


  /**
      * A sub property of location. The specific food establishment where the action
 * occurred.
    * @param FoodEstablishment|Place|array $value
  * @return $this
  */
  public function foodEstablishment($value)
  {
  $this->setProperty('foodEstablishment', $value);
  return $this;
  }

  /**
  * @param FoodEstablishment|Place|array $value
  * @return $this
  */
  public function setFoodEstablishment($value)
  {
  $this->setProperty('foodEstablishment', $value);
  return $this;
  }

  /**
  * @param FoodEstablishment|Place $value
  * @return $this
  */
  public function addFoodEstablishment($value)
  {
  $current = $this->getProperty('foodEstablishment');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('foodEstablishment', $current);
  return $this;
  }

  /**
  * @return FoodEstablishment|Place|array
  */
  public function getFoodEstablishment()
  {
  return $this->getProperty('foodEstablishment');
  }


  /**
      * A sub property of instrument. The recipe/instructions used to perform the
 * action.
    * @param Recipe|array $value
  * @return $this
  */
  public function recipe($value)
  {
  $this->setProperty('recipe', $value);
  return $this;
  }

  /**
  * @param Recipe|array $value
  * @return $this
  */
  public function setRecipe($value)
  {
  $this->setProperty('recipe', $value);
  return $this;
  }

  /**
  * @param Recipe $value
  * @return $this
  */
  public function addRecipe($value)
  {
  $current = $this->getProperty('recipe');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recipe', $current);
  return $this;
  }

  /**
  * @return Recipe|array
  */
  public function getRecipe()
  {
  return $this->getProperty('recipe');
  }


}
