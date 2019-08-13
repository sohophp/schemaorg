<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Mass;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Energy;

/**
* Nutritional information about the recipe.
* @see http://schema.org/NutritionInformation
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class NutritionInformation extends StructuredValue
{

    /**
    * The number of grams of saturated fat.
    * @param Mass $value
    * @return $this
    */
    public function saturatedFatContent(?Mass $value)
    {
        $this->setProperty('saturatedFatContent', $value);
        return $this;
    }

    /**
    * The number of grams of fat.
    * @param Mass $value
    * @return $this
    */
    public function fatContent(?Mass $value)
    {
        $this->setProperty('fatContent', $value);
        return $this;
    }

    /**
    * The number of grams of unsaturated fat.
    * @param Mass $value
    * @return $this
    */
    public function unsaturatedFatContent(?Mass $value)
    {
        $this->setProperty('unsaturatedFatContent', $value);
        return $this;
    }

    /**
    * The number of grams of sugar.
    * @param Mass $value
    * @return $this
    */
    public function sugarContent(?Mass $value)
    {
        $this->setProperty('sugarContent', $value);
        return $this;
    }

    /**
    * The number of milligrams of cholesterol.
    * @param Mass $value
    * @return $this
    */
    public function cholesterolContent(?Mass $value)
    {
        $this->setProperty('cholesterolContent', $value);
        return $this;
    }

    /**
    * The number of grams of carbohydrates.
    * @param Mass $value
    * @return $this
    */
    public function carbohydrateContent(?Mass $value)
    {
        $this->setProperty('carbohydrateContent', $value);
        return $this;
    }

    /**
    * The number of grams of protein.
    * @param Mass $value
    * @return $this
    */
    public function proteinContent(?Mass $value)
    {
        $this->setProperty('proteinContent', $value);
        return $this;
    }

    /**
    * The number of milligrams of sodium.
    * @param Mass $value
    * @return $this
    */
    public function sodiumContent(?Mass $value)
    {
        $this->setProperty('sodiumContent', $value);
        return $this;
    }

    /**
    * The number of grams of trans fat.
    * @param Mass $value
    * @return $this
    */
    public function transFatContent(?Mass $value)
    {
        $this->setProperty('transFatContent', $value);
        return $this;
    }

    /**
    * The number of grams of fiber.
    * @param Mass $value
    * @return $this
    */
    public function fiberContent(?Mass $value)
    {
        $this->setProperty('fiberContent', $value);
        return $this;
    }

    /**
    * The number of calories.
    * @param Energy $value
    * @return $this
    */
    public function calories(?Energy $value)
    {
        $this->setProperty('calories', $value);
        return $this;
    }

    /**
    * The serving size, in terms of the number of volume or mass.
    * @param string $value
    * @return $this
    */
    public function servingSize(?string $value)
    {
        $this->setProperty('servingSize', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\NutritionInformation','Thing\\NutritionInformation');

