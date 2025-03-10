<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\CreativeWork\MenuSection;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\NutritionInformation;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\RestrictedDiet;

/**
* A food or drink item listed in a menu or menu section.
* @see http://schema.org/MenuItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class MenuItem extends Intangible
{


    /**
        * Additional menu item(s) such as a side dish of salad or side order of fries
 * that can be added to this menu item. Additionally it can be a menu section
 * containing allowed add-on menu items for this menu item.
        * @param MenuItem|MenuSection|array|string|mixed $value
    * @return $this
    */
    public function menuAddOn($value)
    {
        $this->setProperty('menuAddOn', $value);
        return $this;
    }

    /**
    * @param MenuItem|MenuSection|array|string|mixed $value
    * @return $this
    */
    public function setMenuAddOn($value)
    {
        $this->setProperty('menuAddOn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMenuAddOn()
    {
       return $this->getProperty('menuAddOn');
    }


    /**
        * Nutrition information about the recipe or menu item.
        * @param NutritionInformation|array|string|mixed $value
    * @return $this
    */
    public function nutrition($value)
    {
        $this->setProperty('nutrition', $value);
        return $this;
    }

    /**
    * @param NutritionInformation|array|string|mixed $value
    * @return $this
    */
    public function setNutrition($value)
    {
        $this->setProperty('nutrition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNutrition()
    {
       return $this->getProperty('nutrition');
    }


    /**
        * An offer to provide this item&#x2014;for example, an offer to sell a product,
 * rent the DVD of a movie, perform a service, or give away tickets to an event.
        * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function offers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @param Offer|array|string|mixed $value
    * @return $this
    */
    public function setOffers($value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }


    /**
        * Indicates a dietary restriction or guideline for which this recipe or menu
 * item is suitable, e.g. diabetic, halal etc.
        * @param RestrictedDiet|array|string|mixed $value
    * @return $this
    */
    public function suitableForDiet($value)
    {
        $this->setProperty('suitableForDiet', $value);
        return $this;
    }

    /**
    * @param RestrictedDiet|array|string|mixed $value
    * @return $this
    */
    public function setSuitableForDiet($value)
    {
        $this->setProperty('suitableForDiet', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSuitableForDiet()
    {
       return $this->getProperty('suitableForDiet');
    }


}
