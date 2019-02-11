<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\CreateAction;

use Sohophp\SchemaOrg\Thing\Action\CreateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\HowTo\Recipe;
use Sohophp\SchemaOrg\Thing\Event\FoodEvent;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\FoodEstablishment;

/**
* The act of producing/preparing food.
* @see http://schema.org/CookAction
* @package Sohophp\SchemaOrg\Thing\Action\CreateAction
*/
class CookAction extends CreateAction
{

    /**
    * A sub property of instrument. The recipe/instructions used to perform the action.
    * @param Recipe $value
    * @return $this
    */
    public function recipe(?Recipe $value)
    {
        $this->setProperty('recipe', $value);
        return $this;
    }

    /**
    * A sub property of location. The specific food event where the action occurred.
    * @param FoodEvent $value
    * @return $this
    */
    public function foodEvent(?FoodEvent $value)
    {
        $this->setProperty('foodEvent', $value);
        return $this;
    }

    /**
    * A sub property of location. The specific food establishment where the action occurred.
    * @param Place|FoodEstablishment $value
    * @return $this
    */
    public function foodEstablishment($value)
    {
        $this->setProperty('foodEstablishment', $value);
        return $this;
    }


}

