<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
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
     * Nutrition information about the recipe or menu item.
     * @param NutritionInformation $value
     * @return $this
     */

     public function nutrition(?NutritionInformation $value):self
     {
        $this->setProperty("nutrition",$value);
        return $this;
     }

     
     /**
     * An offer to provide this item&#x2014;for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event.
     * @param Offer $value
     * @return $this
     */

     public function offers(?Offer $value):self
     {
        $this->setProperty("offers",$value);
        return $this;
     }

     
     /**
     * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
     * @param RestrictedDiet $value
     * @return $this
     */

     public function suitableForDiet(?RestrictedDiet $value):self
     {
        $this->setProperty("suitableForDiet",$value);
        return $this;
     }

     
}

