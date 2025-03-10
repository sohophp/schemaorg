<?php
namespace Sohophp\SchemaOrg\Thing\Action\FindAction;

use Sohophp\SchemaOrg\Thing\Action\FindAction;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
* An agent tracks an object for updates.
 * 
 * Related actions:
 * 
 * * [[FollowAction]]: Unlike FollowAction, TrackAction refers to the interest
 * on the location of innanimates objects.
 * * [[SubscribeAction]]: Unlike SubscribeAction, TrackAction refers to  the
 * interest on the location of innanimate objects.
* @see http://schema.org/TrackAction
* @package Sohophp\SchemaOrg\Thing\Action\FindAction
*/
class TrackAction extends FindAction
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


}
