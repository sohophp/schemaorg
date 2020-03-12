<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Mass;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Energy;

/**
* Nutritional information about the recipe.
* @see http://schema.org/NutritionInformation
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue

*
*/
class NutritionInformation extends StructuredValue
{

    /**
    * The number of grams of saturated fat.
    * @param Mass|array $value
    * @return $this
    */
    public function saturatedFatContent(?Mass $value)
    {
        $this->setProperty('saturatedFatContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setSaturatedFatContent(?Mass $value)
    {
        $this->setProperty('saturatedFatContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSaturatedFatContent()
    {
       return $this->getProperty('saturatedFatContent');
    }

    /**
    * The number of grams of fat.
    * @param Mass|array $value
    * @return $this
    */
    public function fatContent(?Mass $value)
    {
        $this->setProperty('fatContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setFatContent(?Mass $value)
    {
        $this->setProperty('fatContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFatContent()
    {
       return $this->getProperty('fatContent');
    }

    /**
    * The number of grams of unsaturated fat.
    * @param Mass|array $value
    * @return $this
    */
    public function unsaturatedFatContent(?Mass $value)
    {
        $this->setProperty('unsaturatedFatContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setUnsaturatedFatContent(?Mass $value)
    {
        $this->setProperty('unsaturatedFatContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getUnsaturatedFatContent()
    {
       return $this->getProperty('unsaturatedFatContent');
    }

    /**
    * The number of grams of sugar.
    * @param Mass|array $value
    * @return $this
    */
    public function sugarContent(?Mass $value)
    {
        $this->setProperty('sugarContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setSugarContent(?Mass $value)
    {
        $this->setProperty('sugarContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSugarContent()
    {
       return $this->getProperty('sugarContent');
    }

    /**
    * The number of milligrams of cholesterol.
    * @param Mass|array $value
    * @return $this
    */
    public function cholesterolContent(?Mass $value)
    {
        $this->setProperty('cholesterolContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setCholesterolContent(?Mass $value)
    {
        $this->setProperty('cholesterolContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCholesterolContent()
    {
       return $this->getProperty('cholesterolContent');
    }

    /**
    * The number of grams of carbohydrates.
    * @param Mass|array $value
    * @return $this
    */
    public function carbohydrateContent(?Mass $value)
    {
        $this->setProperty('carbohydrateContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setCarbohydrateContent(?Mass $value)
    {
        $this->setProperty('carbohydrateContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCarbohydrateContent()
    {
       return $this->getProperty('carbohydrateContent');
    }

    /**
    * The number of grams of protein.
    * @param Mass|array $value
    * @return $this
    */
    public function proteinContent(?Mass $value)
    {
        $this->setProperty('proteinContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setProteinContent(?Mass $value)
    {
        $this->setProperty('proteinContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
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
    public function sodiumContent(?Mass $value)
    {
        $this->setProperty('sodiumContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setSodiumContent(?Mass $value)
    {
        $this->setProperty('sodiumContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSodiumContent()
    {
       return $this->getProperty('sodiumContent');
    }

    /**
    * The number of grams of trans fat.
    * @param Mass|array $value
    * @return $this
    */
    public function transFatContent(?Mass $value)
    {
        $this->setProperty('transFatContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setTransFatContent(?Mass $value)
    {
        $this->setProperty('transFatContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTransFatContent()
    {
       return $this->getProperty('transFatContent');
    }

    /**
    * The number of grams of fiber.
    * @param Mass|array $value
    * @return $this
    */
    public function fiberContent(?Mass $value)
    {
        $this->setProperty('fiberContent', $value);
        return $this;
    }
   /**
    * @param Mass|array $value
    * @return $this
    */
    public function setFiberContent(?Mass $value)
    {
        $this->setProperty('fiberContent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFiberContent()
    {
       return $this->getProperty('fiberContent');
    }

    /**
    * The number of calories.
    * @param Energy|array $value
    * @return $this
    */
    public function calories(?Energy $value)
    {
        $this->setProperty('calories', $value);
        return $this;
    }
   /**
    * @param Energy|array $value
    * @return $this
    */
    public function setCalories(?Energy $value)
    {
        $this->setProperty('calories', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCalories()
    {
       return $this->getProperty('calories');
    }

    /**
    * The serving size, in terms of the number of volume or mass.
    * @param string|array $value
    * @return $this
    */
    public function servingSize(?string $value)
    {
        $this->setProperty('servingSize', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setServingSize(?string $value)
    {
        $this->setProperty('servingSize', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getServingSize()
    {
       return $this->getProperty('servingSize');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\StructuredValue\\NutritionInformation','Thing\\NutritionInformation');

