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
        * @param array|string|mixed $value
    * @return $this
    */
    public function fatContent($value)
    {
        $this->setProperty('fatContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of milligrams of sodium.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sodiumContent($value)
    {
        $this->setProperty('sodiumContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of grams of fiber.
        * @param array|string|mixed $value
    * @return $this
    */
    public function fiberContent($value)
    {
        $this->setProperty('fiberContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of grams of sugar.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sugarContent($value)
    {
        $this->setProperty('sugarContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of grams of unsaturated fat.
        * @param array|string|mixed $value
    * @return $this
    */
    public function unsaturatedFatContent($value)
    {
        $this->setProperty('unsaturatedFatContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of grams of saturated fat.
        * @param array|string|mixed $value
    * @return $this
    */
    public function saturatedFatContent($value)
    {
        $this->setProperty('saturatedFatContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The serving size, in terms of the number of volume or mass.
        * @param array|string|mixed $value
    * @return $this
    */
    public function servingSize($value)
    {
        $this->setProperty('servingSize', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of milligrams of cholesterol.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cholesterolContent($value)
    {
        $this->setProperty('cholesterolContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of grams of trans fat.
        * @param array|string|mixed $value
    * @return $this
    */
    public function transFatContent($value)
    {
        $this->setProperty('transFatContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of calories.
        * @param array|string|mixed $value
    * @return $this
    */
    public function calories($value)
    {
        $this->setProperty('calories', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of grams of carbohydrates.
        * @param array|string|mixed $value
    * @return $this
    */
    public function carbohydrateContent($value)
    {
        $this->setProperty('carbohydrateContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of grams of protein.
        * @param array|string|mixed $value
    * @return $this
    */
    public function proteinContent($value)
    {
        $this->setProperty('proteinContent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
