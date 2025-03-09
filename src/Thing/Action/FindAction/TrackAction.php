<?php
namespace Sohophp\SchemaOrg\Thing\Action\FindAction;

use Sohophp\SchemaOrg\Thing\Action\FindAction;

/**
* An agent tracks an object for updates.\n\nRelated actions:\n\n* [[FollowAction]]: Unlike FollowAction, TrackAction refers to the interest on the location of innanimates objects.\n* [[SubscribeAction]]: Unlike SubscribeAction, TrackAction refers to  the interest on the location of innanimate objects.
* @see schema:TrackAction
* @package Sohophp\SchemaOrg\Thing\Action\FindAction
*/
class TrackAction extends FindAction
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
