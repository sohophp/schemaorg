<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
* An agent orders an object/product/service to be delivered/sent.
* @see http://schema.org/OrderAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction

*
*/
class OrderAction extends TradeAction
{

    /**
    * A sub property of instrument. The method of delivery.
    * @param DeliveryMethod|array|string $value
    * @return $this
    * @deprecated use setDeliveryMethod
    */
    public function deliveryMethod($value)
    {
        $this->setProperty('deliveryMethod', $value);
        return $this;
    }
   /**
    * @param DeliveryMethod|array|string $value
    * @return $this
    */
    public function setDeliveryMethod($value)
    {
        $this->setProperty('deliveryMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDeliveryMethod()
    {
       return $this->getProperty('deliveryMethod');
    }


}
