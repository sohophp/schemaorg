<?php
namespace Sohophp\SchemaOrg\Thing\Action\CreateAction;

use Sohophp\SchemaOrg\Thing\Action\CreateAction;

/**
* The act of producing/preparing food.
* @see schema:CookAction
* @package Sohophp\SchemaOrg\Thing\Action\CreateAction
*/
class CookAction extends CreateAction
{
   /**
        * A sub property of location. The specific food establishment where the action occurred.
        */
    protected $foodEstablishment = null;

   /**
        * A sub property of location. The specific food event where the action occurred.
        */
    protected $foodEvent = null;

   /**
        * A sub property of instrument. The recipe/instructions used to perform the action.
        */
    protected $recipe = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setFoodEstablishment($value)
    {
        $this->setProperty('foodEstablishment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFoodEstablishment()
    {
       return $this->getProperty('foodEstablishment');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFoodEvent($value)
    {
        $this->setProperty('foodEvent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFoodEvent()
    {
       return $this->getProperty('foodEvent');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecipe($value)
    {
        $this->setProperty('recipe', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipe()
    {
       return $this->getProperty('recipe');
    }


}
