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
        * A sub property of location. The specific food establishment where the action
 * occurred.
        * @param array|string|mixed $value
    * @return $this
    */
    public function foodEstablishment($value)
    {
        $this->setProperty('foodEstablishment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A sub property of location. The specific food event where the action
 * occurred.
        * @param array|string|mixed $value
    * @return $this
    */
    public function foodEvent($value)
    {
        $this->setProperty('foodEvent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A sub property of instrument. The recipe/instructions used to perform the
 * action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recipe($value)
    {
        $this->setProperty('recipe', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
