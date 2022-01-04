<?php
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setSaturatedFatContent
    */
    public function saturatedFatContent($value)
    {
        $this->setProperty('saturatedFatContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setSaturatedFatContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setFatContent
    */
    public function fatContent($value)
    {
        $this->setProperty('fatContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setFatContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setUnsaturatedFatContent
    */
    public function unsaturatedFatContent($value)
    {
        $this->setProperty('unsaturatedFatContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setUnsaturatedFatContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setSugarContent
    */
    public function sugarContent($value)
    {
        $this->setProperty('sugarContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setSugarContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setCholesterolContent
    */
    public function cholesterolContent($value)
    {
        $this->setProperty('cholesterolContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setCholesterolContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setCarbohydrateContent
    */
    public function carbohydrateContent($value)
    {
        $this->setProperty('carbohydrateContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setCarbohydrateContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setProteinContent
    */
    public function proteinContent($value)
    {
        $this->setProperty('proteinContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setProteinContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setSodiumContent
    */
    public function sodiumContent($value)
    {
        $this->setProperty('sodiumContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setSodiumContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setTransFatContent
    */
    public function transFatContent($value)
    {
        $this->setProperty('transFatContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setTransFatContent($value)
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
    * @param Mass|array|string $value
    * @return $this
    * @deprecated use setFiberContent
    */
    public function fiberContent($value)
    {
        $this->setProperty('fiberContent', $value);
        return $this;
    }
   /**
    * @param Mass|array|string $value
    * @return $this
    */
    public function setFiberContent($value)
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
    * @param Energy|array|string $value
    * @return $this
    * @deprecated use setCalories
    */
    public function calories($value)
    {
        $this->setProperty('calories', $value);
        return $this;
    }
   /**
    * @param Energy|array|string $value
    * @return $this
    */
    public function setCalories($value)
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
    * @deprecated use setServingSize
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
    * @return $this|string|array
    */
    public function getServingSize()
    {
       return $this->getProperty('servingSize');
    }


}
