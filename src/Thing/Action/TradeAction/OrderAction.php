<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
/**
* An agent orders an object/product/service to be delivered/sent.
* @see http://schema.org/OrderAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class OrderAction extends TradeAction
{

     
     /**
     * A sub property of instrument. The method of delivery.
     * @param DeliveryMethod $value
     * @return $this
     */

     public function deliveryMethod(?DeliveryMethod $value):self
     {
        $this->setProperty("deliveryMethod",$value);
        return $this;
     }

     
}

