<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* The act of physically/electronically taking delivery of an object thathas
 * been transferred from an origin to a destination. Reciprocal of SendAction.
 * 
 * Related actions:
 * 
 * * [[SendAction]]: The reciprocal of ReceiveAction.
 * * [[TakeAction]]: Unlike TakeAction, ReceiveAction does not imply that the
 * ownership has been transfered (e.g. I can receive a package, but it does not
 * mean the package is now mine).
* @see http://schema.org/ReceiveAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class ReceiveAction extends TransferAction
{


    /**
        * A sub property of instrument. The method of delivery.
        * @param DeliveryMethod|array|string|mixed $value
    * @return $this
    */
    public function deliveryMethod($value)
    {
        $this->setProperty('deliveryMethod', $value);
        return $this;
    }

    /**
    * @param DeliveryMethod|array|string|mixed $value
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
        * A sub property of participant. The participant who is at the sending end of
 * the action.
        * @param Audience|Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function sender($value)
    {
        $this->setProperty('sender', $value);
        return $this;
    }

    /**
    * @param Audience|Person|Organization|array|string|mixed $value
    * @return $this
    */
    public function setSender($value)
    {
        $this->setProperty('sender', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSender()
    {
       return $this->getProperty('sender');
    }


}
