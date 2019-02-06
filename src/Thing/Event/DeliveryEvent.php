<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
/**
* An event involving the delivery of an item.
* @see http://schema.org/DeliveryEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class DeliveryEvent extends Event
{

     
     /**
     * Method used for delivery or shipping.
     * @param DeliveryMethod $value
     * @return $this
     */

     public function hasDeliveryMethod(?DeliveryMethod $value):self
     {
        $this->setProperty("hasDeliveryMethod",$value);
        return $this;
     }

     
     /**
     * After this date, the item will no longer be available for pickup.
     * @param  $value
     * @return $this
     */

     public function availableThrough( $value):self
     {
        $this->setProperty("availableThrough",$value);
        return $this;
     }

     
     /**
     * When the item is available for pickup from the store, locker, etc.
     * @param  $value
     * @return $this
     */

     public function availableFrom( $value):self
     {
        $this->setProperty("availableFrom",$value);
        return $this;
     }

     
     /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     * @param string $value
     * @return $this
     */

     public function accessCode(?string $value):self
     {
        $this->setProperty("accessCode",$value);
        return $this;
     }

     
}

