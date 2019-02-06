<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\ParcelDelivery;
/**
* An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
* @see http://schema.org/OrderItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class OrderItem extends Intangible
{

     
     /**
     * The current status of the order item.
     * @param OrderStatus $value
     * @return $this
     */

     public function orderItemStatus(?OrderStatus $value):self
     {
        $this->setProperty("orderItemStatus",$value);
        return $this;
     }

     
     /**
     * The number of the item ordered. If the property is not set, assume the quantity is one.
     * @param  $value
     * @return $this
     */

     public function orderQuantity( $value):self
     {
        $this->setProperty("orderQuantity",$value);
        return $this;
     }

     
     /**
     * The item ordered.
     * @param OrderItem|Product $value
     * @return $this
     */

     public function orderedItem( $value):self
     {
        $this->setProperty("orderedItem",$value);
        return $this;
     }

     
     /**
     * The delivery of the parcel related to this order or order item.
     * @param ParcelDelivery $value
     * @return $this
     */

     public function orderDelivery(?ParcelDelivery $value):self
     {
        $this->setProperty("orderDelivery",$value);
        return $this;
     }

     
     /**
     * The identifier of the order item.
     * @param string $value
     * @return $this
     */

     public function orderItemNumber(?string $value):self
     {
        $this->setProperty("orderItemNumber",$value);
        return $this;
     }

     
}

