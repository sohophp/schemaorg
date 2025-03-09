<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* Nutritional information about the recipe.
* @see schema:NutritionInformation
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class NutritionInformation extends StructuredValue
{
   /**
        * The number of grams of fat.
        */
    protected $fatContent = null;

   /**
        * The number of milligrams of sodium.
        */
    protected $sodiumContent = null;

   /**
        * The number of grams of fiber.
        */
    protected $fiberContent = null;

   /**
        * The number of grams of sugar.
        */
    protected $sugarContent = null;

   /**
        * The number of grams of unsaturated fat.
        */
    protected $unsaturatedFatContent = null;

   /**
        * The number of grams of saturated fat.
        */
    protected $saturatedFatContent = null;

   /**
        * The serving size, in terms of the number of volume or mass.
        */
    protected $servingSize = null;

   /**
        * The number of milligrams of cholesterol.
        */
    protected $cholesterolContent = null;

   /**
        * The number of grams of trans fat.
        */
    protected $transFatContent = null;

   /**
        * The number of calories.
        */
    protected $calories = null;

   /**
        * The number of grams of carbohydrates.
        */
    protected $carbohydrateContent = null;

   /**
        * The number of grams of protein.
        */
    protected $proteinContent = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setFatContent($value)
    {
        $this->setProperty('fatContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFatContent()
    {
       return $this->getProperty('fatContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSodiumContent($value)
    {
        $this->setProperty('sodiumContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSodiumContent()
    {
       return $this->getProperty('sodiumContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFiberContent($value)
    {
        $this->setProperty('fiberContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFiberContent()
    {
       return $this->getProperty('fiberContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSugarContent($value)
    {
        $this->setProperty('sugarContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSugarContent()
    {
       return $this->getProperty('sugarContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setUnsaturatedFatContent($value)
    {
        $this->setProperty('unsaturatedFatContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUnsaturatedFatContent()
    {
       return $this->getProperty('unsaturatedFatContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSaturatedFatContent($value)
    {
        $this->setProperty('saturatedFatContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSaturatedFatContent()
    {
       return $this->getProperty('saturatedFatContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setServingSize($value)
    {
        $this->setProperty('servingSize', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getServingSize()
    {
       return $this->getProperty('servingSize');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCholesterolContent($value)
    {
        $this->setProperty('cholesterolContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCholesterolContent()
    {
       return $this->getProperty('cholesterolContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTransFatContent($value)
    {
        $this->setProperty('transFatContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTransFatContent()
    {
       return $this->getProperty('transFatContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCalories($value)
    {
        $this->setProperty('calories', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCalories()
    {
       return $this->getProperty('calories');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCarbohydrateContent($value)
    {
        $this->setProperty('carbohydrateContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCarbohydrateContent()
    {
       return $this->getProperty('carbohydrateContent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProteinContent($value)
    {
        $this->setProperty('proteinContent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProteinContent()
    {
       return $this->getProperty('proteinContent');
    }


}
