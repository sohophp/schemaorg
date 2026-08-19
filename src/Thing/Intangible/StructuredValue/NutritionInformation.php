<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Quantity\Mass;
  use Sohophp\SchemaOrg\Quantity\Energy;

/**
  * Nutritional information about the recipe.
  * @see schema:NutritionInformation
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class NutritionInformation extends StructuredValue
{


  /**
      * The number of grams of saturated fat.
    * @param Mass|array $value
  * @return $this
  */
  public function saturatedFatContent($value)
  {
  $this->setProperty('saturatedFatContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setSaturatedFatContent($value)
  {
  $this->setProperty('saturatedFatContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addSaturatedFatContent($value)
  {
  $current = $this->getProperty('saturatedFatContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('saturatedFatContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getSaturatedFatContent()
  {
  return $this->getProperty('saturatedFatContent');
  }


  /**
      * The number of milligrams of cholesterol.
    * @param Mass|array $value
  * @return $this
  */
  public function cholesterolContent($value)
  {
  $this->setProperty('cholesterolContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setCholesterolContent($value)
  {
  $this->setProperty('cholesterolContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addCholesterolContent($value)
  {
  $current = $this->getProperty('cholesterolContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('cholesterolContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getCholesterolContent()
  {
  return $this->getProperty('cholesterolContent');
  }


  /**
      * The number of grams of unsaturated fat.
    * @param Mass|array $value
  * @return $this
  */
  public function unsaturatedFatContent($value)
  {
  $this->setProperty('unsaturatedFatContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setUnsaturatedFatContent($value)
  {
  $this->setProperty('unsaturatedFatContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addUnsaturatedFatContent($value)
  {
  $current = $this->getProperty('unsaturatedFatContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('unsaturatedFatContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getUnsaturatedFatContent()
  {
  return $this->getProperty('unsaturatedFatContent');
  }


  /**
      * The number of grams of fat.
    * @param Mass|array $value
  * @return $this
  */
  public function fatContent($value)
  {
  $this->setProperty('fatContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setFatContent($value)
  {
  $this->setProperty('fatContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addFatContent($value)
  {
  $current = $this->getProperty('fatContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('fatContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getFatContent()
  {
  return $this->getProperty('fatContent');
  }


  /**
      * The number of grams of fiber.
    * @param Mass|array $value
  * @return $this
  */
  public function fiberContent($value)
  {
  $this->setProperty('fiberContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setFiberContent($value)
  {
  $this->setProperty('fiberContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addFiberContent($value)
  {
  $current = $this->getProperty('fiberContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('fiberContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getFiberContent()
  {
  return $this->getProperty('fiberContent');
  }


  /**
      * The number of grams of carbohydrates.
    * @param Mass|array $value
  * @return $this
  */
  public function carbohydrateContent($value)
  {
  $this->setProperty('carbohydrateContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setCarbohydrateContent($value)
  {
  $this->setProperty('carbohydrateContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addCarbohydrateContent($value)
  {
  $current = $this->getProperty('carbohydrateContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('carbohydrateContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getCarbohydrateContent()
  {
  return $this->getProperty('carbohydrateContent');
  }


  /**
      * The number of grams of trans fat.
    * @param Mass|array $value
  * @return $this
  */
  public function transFatContent($value)
  {
  $this->setProperty('transFatContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setTransFatContent($value)
  {
  $this->setProperty('transFatContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addTransFatContent($value)
  {
  $current = $this->getProperty('transFatContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('transFatContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getTransFatContent()
  {
  return $this->getProperty('transFatContent');
  }


  /**
      * The serving size, in terms of the number of volume or mass.
    * @param string|array $value
  * @return $this
  */
  public function servingSize($value)
  {
  $this->setProperty('servingSize', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setServingSize($value)
  {
  $this->setProperty('servingSize', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addServingSize($value)
  {
  $current = $this->getProperty('servingSize');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('servingSize', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getServingSize()
  {
  return $this->getProperty('servingSize');
  }


  /**
      * The number of grams of sugar.
    * @param Mass|array $value
  * @return $this
  */
  public function sugarContent($value)
  {
  $this->setProperty('sugarContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setSugarContent($value)
  {
  $this->setProperty('sugarContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addSugarContent($value)
  {
  $current = $this->getProperty('sugarContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sugarContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getSugarContent()
  {
  return $this->getProperty('sugarContent');
  }


  /**
      * The number of calories.
    * @param Energy|array $value
  * @return $this
  */
  public function calories($value)
  {
  $this->setProperty('calories', $value);
  return $this;
  }

  /**
  * @param Energy|array $value
  * @return $this
  */
  public function setCalories($value)
  {
  $this->setProperty('calories', $value);
  return $this;
  }

  /**
  * @param Energy $value
  * @return $this
  */
  public function addCalories($value)
  {
  $current = $this->getProperty('calories');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('calories', $current);
  return $this;
  }

  /**
  * @return Energy|array
  */
  public function getCalories()
  {
  return $this->getProperty('calories');
  }


  /**
      * The number of grams of protein.
    * @param Mass|array $value
  * @return $this
  */
  public function proteinContent($value)
  {
  $this->setProperty('proteinContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setProteinContent($value)
  {
  $this->setProperty('proteinContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addProteinContent($value)
  {
  $current = $this->getProperty('proteinContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('proteinContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getProteinContent()
  {
  return $this->getProperty('proteinContent');
  }


  /**
      * The number of milligrams of sodium.
    * @param Mass|array $value
  * @return $this
  */
  public function sodiumContent($value)
  {
  $this->setProperty('sodiumContent', $value);
  return $this;
  }

  /**
  * @param Mass|array $value
  * @return $this
  */
  public function setSodiumContent($value)
  {
  $this->setProperty('sodiumContent', $value);
  return $this;
  }

  /**
  * @param Mass $value
  * @return $this
  */
  public function addSodiumContent($value)
  {
  $current = $this->getProperty('sodiumContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sodiumContent', $current);
  return $this;
  }

  /**
  * @return Mass|array
  */
  public function getSodiumContent()
  {
  return $this->getProperty('sodiumContent');
  }


}
