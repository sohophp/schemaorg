<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
/**
* The act of ingesting information/resources/food.
* @see http://schema.org/ConsumeAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class ConsumeAction extends Action
{

     
     /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     * @param Offer $value
     * @return $this
     */

     public function expectsAcceptanceOf(?Offer $value):self
     {
        $this->setProperty("expectsAcceptanceOf",$value);
        return $this;
     }

     
}

