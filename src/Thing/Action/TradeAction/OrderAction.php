<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;

/**
* An agent orders an object/product/service to be delivered/sent.
* @see schema:OrderAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class OrderAction extends TradeAction
{
   /**
        * A sub property of instrument. The method of delivery.
        */
    protected $deliveryMethod = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setDeliveryMethod($value)
    {
        $this->setProperty('deliveryMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeliveryMethod()
    {
       return $this->getProperty('deliveryMethod');
    }


}
