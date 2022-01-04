<?php
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

*
*/
class Recipe extends HowTo
{

    /**
    * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
    * @param QuantitativeValue|string|array $value
    * @return $this
    * @deprecated use setRecipeYield
    */
    public function recipeYield($value)
    {
        $this->setProperty('recipeYield', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|string|array $value
    * @return $this
    */
    public function setRecipeYield($value)
    {
        $this->setProperty('recipeYield', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecipeYield()
    {
       return $this->getProperty('recipeYield');
    }

    /**
    * The category of the recipe—for example, appetizer, entree, etc.
    * @param string|array $value
    * @return $this
    * @deprecated use setRecipeCategory
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
    * @return $this|string|array
    */
    public function getRecipeCategory()
    {
       return $this->getProperty('recipeCategory');
    }

    /**
    * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
    * @param string|array $value
    * @return $this
    * @deprecated use setRecipeIngredient
    */
    public function recipeIngredient($value)
    {
        $this->setProperty('recipeIngredient', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setRecipeIngredient($value)
    {
        $this->setProperty('recipeIngredient', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecipeIngredient()
    {
       return $this->getProperty('recipeIngredient');
    }

    /**
    * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
    * @param ItemList|string|CreativeWork|array $value
    * @return $this
    * @deprecated use setRecipeInstructions
    */
    public function recipeInstructions($value)
    {
        $this->setProperty('recipeInstructions', $value);
        return $this;
    }
   /**
    * @param ItemList|string|CreativeWork|array $value
    * @return $this
    */
    public function setRecipeInstructions($value)
    {
        $this->setProperty('recipeInstructions', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecipeInstructions()
    {
       return $this->getProperty('recipeInstructions');
    }

    /**
    * Nutrition information about the recipe or menu item.
    * @param NutritionInformation|array|string $value
    * @return $this
    * @deprecated use setNutrition
    */
    public function nutrition($value)
    {
        $this->setProperty('nutrition', $value);
        return $this;
    }
   /**
    * @param NutritionInformation|array|string $value
    * @return $this
    */
    public function setNutrition($value)
    {
        $this->setProperty('nutrition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNutrition()
    {
       return $this->getProperty('nutrition');
    }

    /**
    * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
    * @param RestrictedDiet|array|string $value
    * @return $this
    * @deprecated use setSuitableForDiet
    */
    public function suitableForDiet($value)
    {
        $this->setProperty('suitableForDiet', $value);
        return $this;
    }
   /**
    * @param RestrictedDiet|array|string $value
    * @return $this
    */
    public function setSuitableForDiet($value)
    {
        $this->setProperty('suitableForDiet', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSuitableForDiet()
    {
       return $this->getProperty('suitableForDiet');
    }

    /**
    * The cuisine of the recipe (for example, French or Ethiopian).
    * @param string|array $value
    * @return $this
    * @deprecated use setRecipeCuisine
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
    * @return $this|string|array
    */
    public function getRecipeCuisine()
    {
       return $this->getProperty('recipeCuisine');
    }

    /**
    * The time it takes to actually cook the dish, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
    * @param Duration|array|string $value
    * @return $this
    * @deprecated use setCookTime
    */
    public function cookTime($value)
    {
        $this->setProperty('cookTime', $value);
        return $this;
    }
   /**
    * @param Duration|array|string $value
    * @return $this
    */
    public function setCookTime($value)
    {
        $this->setProperty('cookTime', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCookTime()
    {
       return $this->getProperty('cookTime');
    }

    /**
    * The method of cooking, such as Frying, Steaming, ...
    * @param string|array $value
    * @return $this
    * @deprecated use setCookingMethod
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
    * @return $this|string|array
    */
    public function getCookingMethod()
    {
       return $this->getProperty('cookingMethod');
    }

    /**
    * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
    * @param string|array $value
    * @return $this
    * @deprecated use setIngredients
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
    * @return $this|string|array
    */
    public function getIngredients()
    {
       return $this->getProperty('ingredients');
    }


}
