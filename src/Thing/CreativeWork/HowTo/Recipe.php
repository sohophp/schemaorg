<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\HowTo;

use Sohophp\SchemaOrg\Thing\CreativeWork\HowTo;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RestrictedDiet;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
/**
* A recipe. For dietary restrictions covered by the recipe, a few common restrictions are enumerated via <a class="localLink" href="http://schema.org/suitableForDiet">suitableForDiet</a>. The <a class="localLink" href="http://schema.org/keywords">keywords</a> property can also be used to add more detail.
* @see http://schema.org/Recipe
* @package Sohophp\SchemaOrg\Thing\CreativeWork\HowTo
*/
class Recipe extends HowTo
{

     
     /**
     * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
     * @param QuantitativeValue|string $value
     * @return $this
     */

     public function recipeYield( $value):self
     {
        $this->setProperty("recipeYield",$value);
        return $this;
     }

     
     /**
     * The category of the recipe—for example, appetizer, entree, etc.
     * @param string $value
     * @return $this
     */

     public function recipeCategory(?string $value):self
     {
        $this->setProperty("recipeCategory",$value);
        return $this;
     }

     
     /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     * @param string $value
     * @return $this
     */

     public function recipeIngredient(?string $value):self
     {
        $this->setProperty("recipeIngredient",$value);
        return $this;
     }

     
     /**
     * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
     * @param ItemList|CreativeWork|string $value
     * @return $this
     */

     public function recipeInstructions( $value):self
     {
        $this->setProperty("recipeInstructions",$value);
        return $this;
     }

     
     /**
     * Nutrition information about the recipe or menu item.
     * @param NutritionInformation $value
     * @return $this
     */

     public function nutrition(?NutritionInformation $value):self
     {
        $this->setProperty("nutrition",$value);
        return $this;
     }

     
     /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
     * @param RestrictedDiet $value
     * @return $this
     */

     public function suitableForDiet(?RestrictedDiet $value):self
     {
        $this->setProperty("suitableForDiet",$value);
        return $this;
     }

     
     /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     * @param string $value
     * @return $this
     */

     public function recipeCuisine(?string $value):self
     {
        $this->setProperty("recipeCuisine",$value);
        return $this;
     }

     
     /**
     * The time it takes to actually cook the dish, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     * @param Duration $value
     * @return $this
     */

     public function cookTime(?Duration $value):self
     {
        $this->setProperty("cookTime",$value);
        return $this;
     }

     
     /**
     * The method of cooking, such as Frying, Steaming, ...
     * @param string $value
     * @return $this
     */

     public function cookingMethod(?string $value):self
     {
        $this->setProperty("cookingMethod",$value);
        return $this;
     }

     
     /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     * @param string $value
     * @return $this
     */

     public function ingredients(?string $value):self
     {
        $this->setProperty("ingredients",$value);
        return $this;
     }

     
}

