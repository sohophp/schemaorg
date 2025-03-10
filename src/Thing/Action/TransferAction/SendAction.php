<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;

/**
* The act of physically/electronically dispatching an object for transfer from
 * an origin to a destination. Related actions:
 * 
 * * [[ReceiveAction]]: The reciprocal of SendAction.
 * * [[GiveAction]]: Unlike GiveAction, SendAction does not imply the transfer
 * of ownership (e.g. I can send you my laptop, but I'm not necessarily giving
 * it to you).
* @see schema:SendAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class SendAction extends TransferAction
{


    /**
        * A sub property of instrument. The method of delivery.
        * @param array|string|mixed $value
    * @return $this
    */
    public function deliveryMethod($value)
    {
        $this->setProperty('deliveryMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * A sub property of participant. The participant who is at the receiving end of
 * the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRecipient($value)
    {
        $this->setProperty('recipient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecipient()
    {
       return $this->getProperty('recipient');
    }


}
