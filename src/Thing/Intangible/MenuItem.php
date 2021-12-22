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

*
*/
class MenuItem extends Intangible
{

    /**
    * Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
    * @param MenuItem|MenuSection|array $value
    * @return $this
    */
    public function menuAddOn($value)
    {
        $this->setProperty('menuAddOn', $value);
        return $this;
    }
   /**
    * @param MenuItem|MenuSection|array $value
    * @return $this
    */
    public function setMenuAddOn($value)
    {
        $this->setProperty('menuAddOn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMenuAddOn()
    {
       return $this->getProperty('menuAddOn');
    }

    /**
    * Nutrition information about the recipe or menu item.
    * @param NutritionInformation|array $value
    * @return $this
    */
    public function nutrition(?NutritionInformation $value)
    {
        $this->setProperty('nutrition', $value);
        return $this;
    }
   /**
    * @param NutritionInformation|array $value
    * @return $this
    */
    public function setNutrition(?NutritionInformation $value)
    {
        $this->setProperty('nutrition', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNutrition()
    {
       return $this->getProperty('nutrition');
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer|array $value
    * @return $this
    */
    public function offers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
   /**
    * @param Offer|array $value
    * @return $this
    */
    public function setOffers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOffers()
    {
       return $this->getProperty('offers');
    }

    /**
    * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
    * @param RestrictedDiet|array $value
    * @return $this
    */
    public function suitableForDiet(?RestrictedDiet $value)
    {
        $this->setProperty('suitableForDiet', $value);
        return $this;
    }
   /**
    * @param RestrictedDiet|array $value
    * @return $this
    */
    public function setSuitableForDiet(?RestrictedDiet $value)
    {
        $this->setProperty('suitableForDiet', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSuitableForDiet()
    {
       return $this->getProperty('suitableForDiet');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\MenuItem','Thing\\MenuItem');

