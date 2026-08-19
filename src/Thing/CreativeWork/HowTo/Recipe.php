<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\HowTo;

  use Sohophp\SchemaOrg\Thing\CreativeWork\HowTo;
  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Diet;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RestrictedDiet;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation;

/**
  * A recipe. For dietary restrictions covered by the recipe, a few common
 * restrictions are enumerated via [[suitableForDiet]]. The [[keywords]]
 * property can also be used to add more detail.
  * @see schema:Recipe
* @package Sohophp\SchemaOrg\Thing\CreativeWork\HowTo
*/
class Recipe extends HowTo
{


  /**
      * The method of cooking, such as Frying, Steaming, ...
    * @param string|array $value
  * @return $this
  */
  public function cookingMethod($value)
  {
  $this->setProperty('cookingMethod', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCookingMethod($value)
  {
  $this->setProperty('cookingMethod', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCookingMethod($value)
  {
  $current = $this->getProperty('cookingMethod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cookingMethod', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCookingMethod()
  {
  return $this->getProperty('cookingMethod');
  }


  /**
      * A step in making the recipe, in the form of a single item (document, video,
 * etc.) or an ordered list with HowToStep and/or HowToSection items.
    * @param CreativeWork|string|ItemList|array $value
  * @return $this
  */
  public function recipeInstructions($value)
  {
  $this->setProperty('recipeInstructions', $value);
  return $this;
  }

  /**
  * @param CreativeWork|string|ItemList|array $value
  * @return $this
  */
  public function setRecipeInstructions($value)
  {
  $this->setProperty('recipeInstructions', $value);
  return $this;
  }

  /**
  * @param CreativeWork|string|ItemList $value
  * @return $this
  */
  public function addRecipeInstructions($value)
  {
  $current = $this->getProperty('recipeInstructions');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recipeInstructions', $current);
  return $this;
  }

  /**
  * @return CreativeWork|string|ItemList|array
  */
  public function getRecipeInstructions()
  {
  return $this->getProperty('recipeInstructions');
  }


  /**
      * The category of the recipe—for example, appetizer, entree, etc.
    * @param string|array $value
  * @return $this
  */
  public function recipeCategory($value)
  {
  $this->setProperty('recipeCategory', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setRecipeCategory($value)
  {
  $this->setProperty('recipeCategory', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addRecipeCategory($value)
  {
  $current = $this->getProperty('recipeCategory');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recipeCategory', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getRecipeCategory()
  {
  return $this->getProperty('recipeCategory');
  }


  /**
      * The time it takes to actually cook the dish, in [ISO 8601 duration
 * format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param Duration|array $value
  * @return $this
  */
  public function cookTime($value)
  {
  $this->setProperty('cookTime', $value);
  return $this;
  }

  /**
  * @param Duration|array $value
  * @return $this
  */
  public function setCookTime($value)
  {
  $this->setProperty('cookTime', $value);
  return $this;
  }

  /**
  * @param Duration $value
  * @return $this
  */
  public function addCookTime($value)
  {
  $current = $this->getProperty('cookTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cookTime', $current);
  return $this;
  }

  /**
  * @return Duration|array
  */
  public function getCookTime()
  {
  return $this->getProperty('cookTime');
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
      * An ingredient or ordered list of ingredients and potentially quantities used
 * in the recipe, e.g. 1 cup of sugar, flour or garlic.  The ingredients can be
 * represented as free text or more structured values.
    * @param string|ItemList|PropertyValue|array $value
  * @return $this
  */
  public function recipeIngredient($value)
  {
  $this->setProperty('recipeIngredient', $value);
  return $this;
  }

  /**
  * @param string|ItemList|PropertyValue|array $value
  * @return $this
  */
  public function setRecipeIngredient($value)
  {
  $this->setProperty('recipeIngredient', $value);
  return $this;
  }

  /**
  * @param string|ItemList|PropertyValue $value
  * @return $this
  */
  public function addRecipeIngredient($value)
  {
  $current = $this->getProperty('recipeIngredient');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recipeIngredient', $current);
  return $this;
  }

  /**
  * @return string|ItemList|PropertyValue|array
  */
  public function getRecipeIngredient()
  {
  return $this->getProperty('recipeIngredient');
  }


  /**
      * The quantity produced by the recipe (for example, number of people served,
 * number of servings, etc).
    * @param string|QuantitativeValue|array $value
  * @return $this
  */
  public function recipeYield($value)
  {
  $this->setProperty('recipeYield', $value);
  return $this;
  }

  /**
  * @param string|QuantitativeValue|array $value
  * @return $this
  */
  public function setRecipeYield($value)
  {
  $this->setProperty('recipeYield', $value);
  return $this;
  }

  /**
  * @param string|QuantitativeValue $value
  * @return $this
  */
  public function addRecipeYield($value)
  {
  $current = $this->getProperty('recipeYield');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recipeYield', $current);
  return $this;
  }

  /**
  * @return string|QuantitativeValue|array
  */
  public function getRecipeYield()
  {
  return $this->getProperty('recipeYield');
  }


  /**
      * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
    * @param string|array $value
  * @return $this
  */
  public function ingredients($value)
  {
  $this->setProperty('ingredients', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setIngredients($value)
  {
  $this->setProperty('ingredients', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addIngredients($value)
  {
  $current = $this->getProperty('ingredients');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('ingredients', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getIngredients()
  {
  return $this->getProperty('ingredients');
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


  /**
      * The cuisine of the recipe (for example, French or Ethiopian).
    * @param string|array $value
  * @return $this
  */
  public function recipeCuisine($value)
  {
  $this->setProperty('recipeCuisine', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setRecipeCuisine($value)
  {
  $this->setProperty('recipeCuisine', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addRecipeCuisine($value)
  {
  $current = $this->getProperty('recipeCuisine');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recipeCuisine', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getRecipeCuisine()
  {
  return $this->getProperty('recipeCuisine');
  }


}
