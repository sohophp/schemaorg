<?php declare(strict_types=1);
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
    * Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
    * @param MenuItem|MenuSection $value
    * @return $this
    */
    public function menuAddOn($value)
    {
        $this->setProperty('menuAddOn', $value);
        return $this;
    }

    /**
    * Nutrition information about the recipe or menu item.
    * @param NutritionInformation $value
    * @return $this
    */
    public function nutrition(?NutritionInformation $value)
    {
        $this->setProperty('nutrition', $value);
        return $this;
    }

    /**
    * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
    * @param Offer $value
    * @return $this
    */
    public function offers(?Offer $value)
    {
        $this->setProperty('offers', $value);
        return $this;
    }

    /**
    * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
    * @param RestrictedDiet $value
    * @return $this
    */
    public function suitableForDiet(?RestrictedDiet $value)
    {
        $this->setProperty('suitableForDiet', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\MenuItem','Thing\\MenuItem');

