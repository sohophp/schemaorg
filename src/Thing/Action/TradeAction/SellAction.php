<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Person;
/**
* The act of taking money from a buyer in exchange for goods or services rendered. An agent sells an object, product, or service to a buyer for a price. Reciprocal of BuyAction.
* @see http://schema.org/SellAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class SellAction extends TradeAction
{

     
     /**
     * A sub property of participant. The participant/person/organization that bought the object.
     * @param Person $value
     * @return $this
     */

     public function buyer(?Person $value):self
     {
        $this->setProperty("buyer",$value);
        return $this;
     }

     
}

