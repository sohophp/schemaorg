<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\HowTo;

use Sohophp\SchemaOrg\Thing\CreativeWork\HowTo;

/**
* A recipe. For dietary restrictions covered by the recipe, a few common restrictions are enumerated via [[suitableForDiet]]. The [[keywords]] property can also be used to add more detail.
* @see schema:Recipe
* @package Sohophp\SchemaOrg\Thing\CreativeWork\HowTo
*/
class Recipe extends HowTo
{
   /**
        * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
        */
    protected $recipeIngredient = null;

   /**
        * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
        */
    protected $recipeInstructions = null;

   /**
        * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
        */
    protected $suitableForDiet = null;

   /**
        * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
        */
    protected $recipeYield = null;

   /**
        * The category of the recipe—for example, appetizer, entree, etc.
        */
    protected $recipeCategory = null;

   /**
        * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
        */
    protected $ingredients = null;

   /**
        * Nutrition information about the recipe or menu item.
        */
    protected $nutrition = null;

   /**
        * The time it takes to actually cook the dish, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
        */
    protected $cookTime = null;

   /**
        * The method of cooking, such as Frying, Steaming, ...
        */
    protected $cookingMethod = null;

   /**
        * The cuisine of the recipe (for example, French or Ethiopian).
        */
    protected $recipeCuisine = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecipeIngredient($value)
    {
        $this->setProperty('recipeIngredient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipeIngredient()
    {
       return $this->getProperty('recipeIngredient');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecipeInstructions($value)
    {
        $this->setProperty('recipeInstructions', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipeInstructions()
    {
       return $this->getProperty('recipeInstructions');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSuitableForDiet($value)
    {
        $this->setProperty('suitableForDiet', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuitableForDiet()
    {
       return $this->getProperty('suitableForDiet');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecipeYield($value)
    {
        $this->setProperty('recipeYield', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipeYield()
    {
       return $this->getProperty('recipeYield');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecipeCategory($value)
    {
        $this->setProperty('recipeCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipeCategory()
    {
       return $this->getProperty('recipeCategory');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIngredients($value)
    {
        $this->setProperty('ingredients', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIngredients()
    {
       return $this->getProperty('ingredients');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNutrition($value)
    {
        $this->setProperty('nutrition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNutrition()
    {
       return $this->getProperty('nutrition');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCookTime($value)
    {
        $this->setProperty('cookTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCookTime()
    {
       return $this->getProperty('cookTime');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCookingMethod($value)
    {
        $this->setProperty('cookingMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCookingMethod()
    {
       return $this->getProperty('cookingMethod');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecipeCuisine($value)
    {
        $this->setProperty('recipeCuisine', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipeCuisine()
    {
       return $this->getProperty('recipeCuisine');
    }


}
