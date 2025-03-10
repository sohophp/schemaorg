<?php
namespace Sohophp\SchemaOrg\Thing\Action\FindAction;

use Sohophp\SchemaOrg\Thing\Action\FindAction;

/**
* An agent tracks an object for updates.
 * 
 * Related actions:
 * 
 * * [[FollowAction]]: Unlike FollowAction, TrackAction refers to the interest
 * on the location of innanimates objects.
 * * [[SubscribeAction]]: Unlike SubscribeAction, TrackAction refers to  the
 * interest on the location of innanimate objects.
* @see schema:TrackAction
* @package Sohophp\SchemaOrg\Thing\Action\FindAction
*/
class TrackAction extends FindAction
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


}
