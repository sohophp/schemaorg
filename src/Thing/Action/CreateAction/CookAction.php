<?php declare(strict_types=1);
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
    * @param FoodEstablishment|Place|array $value
    * @return $this
    */
    public function foodEstablishment($value)
    {
        $this->setProperty('foodEstablishment', $value);
        return $this;
    }
   /**
    * @param FoodEstablishment|Place|array $value
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
    * @param Recipe|array $value
    * @return $this
    */
    public function recipe(?Recipe $value)
    {
        $this->setProperty('recipe', $value);
        return $this;
    }
   /**
    * @param Recipe|array $value
    * @return $this
    */
    public function setRecipe(?Recipe $value)
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
    * @param FoodEvent|array $value
    * @return $this
    */
    public function foodEvent(?FoodEvent $value)
    {
        $this->setProperty('foodEvent', $value);
        return $this;
    }
   /**
    * @param FoodEvent|array $value
    * @return $this
    */
    public function setFoodEvent(?FoodEvent $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\CreateAction\\CookAction','Thing\\CookAction');

