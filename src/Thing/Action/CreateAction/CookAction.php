<?php
namespace Sohophp\SchemaOrg\Thing\Action\CreateAction;

use Sohophp\SchemaOrg\Thing\Action\CreateAction;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\CreativeWork\HowTo\Recipe;
use Sohophp\SchemaOrg\Thing\Event\FoodEvent;

/**
* The act of producing/preparing food.
* @see http://schema.org/CookAction
* @package Sohophp\SchemaOrg\Thing\Action\CreateAction

*
*/
class CookAction extends CreateAction
{

    /**
    * A sub property of location. The specific food establishment where the action occurred.
    * @param FoodEstablishment|Place|array|string $value
    * @return $this
    * @deprecated use setFoodEstablishment
    */
    public function foodEstablishment($value)
    {
        $this->setProperty('foodEstablishment', $value);
        return $this;
    }
   /**
    * @param FoodEstablishment|Place|array|string $value
    * @return $this
    */
    public function setFoodEstablishment($value)
    {
        $this->setProperty('foodEstablishment', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFoodEstablishment()
    {
       return $this->getProperty('foodEstablishment');
    }

    /**
    * A sub property of instrument. The recipe/instructions used to perform the action.
    * @param Recipe|array|string $value
    * @return $this
    * @deprecated use setRecipe
    */
    public function recipe($value)
    {
        $this->setProperty('recipe', $value);
        return $this;
    }
   /**
    * @param Recipe|array|string $value
    * @return $this
    */
    public function setRecipe($value)
    {
        $this->setProperty('recipe', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecipe()
    {
       return $this->getProperty('recipe');
    }

    /**
    * A sub property of location. The specific food event where the action occurred.
    * @param FoodEvent|array|string $value
    * @return $this
    * @deprecated use setFoodEvent
    */
    public function foodEvent($value)
    {
        $this->setProperty('foodEvent', $value);
        return $this;
    }
   /**
    * @param FoodEvent|array|string $value
    * @return $this
    */
    public function setFoodEvent($value)
    {
        $this->setProperty('foodEvent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFoodEvent()
    {
       return $this->getProperty('foodEvent');
    }


}
