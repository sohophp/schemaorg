<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus;
use Sohophp\SchemaOrg\Thing\Intangible\ParcelDelivery;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Product;

/**
* An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
* @see http://schema.org/OrderItem
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class OrderItem extends Intangible
{

    /**
    * The current status of the order item.
    * @param OrderStatus|array|string $value
    * @return $this
    * @deprecated use setOrderItemStatus
    */
    public function orderItemStatus($value)
    {
        $this->setProperty('orderItemStatus', $value);
        return $this;
    }
   /**
    * @param OrderStatus|array|string $value
    * @return $this
    */
    public function setOrderItemStatus($value)
    {
        $this->setProperty('orderItemStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderItemStatus()
    {
       return $this->getProperty('orderItemStatus');
    }

    /**
    * The number of the item ordered. If the property is not set, assume the quantity is one.
    * @param array|string $value
    * @return $this
    * @deprecated use setOrderQuantity
    */
    public function orderQuantity($value)
    {
        $this->setProperty('orderQuantity', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderQuantity($value)
    {
        $this->setProperty('orderQuantity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderQuantity()
    {
       return $this->getProperty('orderQuantity');
    }

    /**
    * The delivery of the parcel related to this order or order item.
    * @param ParcelDelivery|array|string $value
    * @return $this
    * @deprecated use setOrderDelivery
    */
    public function orderDelivery($value)
    {
        $this->setProperty('orderDelivery', $value);
        return $this;
    }
   /**
    * @param ParcelDelivery|array|string $value
    * @return $this
    */
    public function setOrderDelivery($value)
    {
        $this->setProperty('orderDelivery', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderDelivery()
    {
       return $this->getProperty('orderDelivery');
    }

    /**
    * The item ordered.
    * @param Service|OrderItem|Product|array|string $value
    * @return $this
    * @deprecated use setOrderedItem
    */
    public function orderedItem($value)
    {
        $this->setProperty('orderedItem', $value);
        return $this;
    }
   /**
    * @param Service|OrderItem|Product|array|string $value
    * @return $this
    */
    public function setOrderedItem($value)
    {
        $this->setProperty('orderedItem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderedItem()
    {
       return $this->getProperty('orderedItem');
    }

    /**
    * The identifier of the order item.
    * @param string|array $value
    * @return $this
    * @deprecated use setOrderItemNumber
    */
    public function orderItemNumber($value)
    {
        $this->setProperty('orderItemNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setOrderItemNumber($value)
    {
        $this->setProperty('orderItemNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderItemNumber()
    {
       return $this->getProperty('orderItemNumber');
    }


}
