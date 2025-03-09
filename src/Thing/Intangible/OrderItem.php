<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
* @see schema:OrderItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class OrderItem extends Intangible
{
   /**
        * The current status of the order item.
        */
    protected $orderItemStatus = null;

   /**
        * The delivery of the parcel related to this order or order item.
        */
    protected $orderDelivery = null;

   /**
        * The number of the item ordered. If the property is not set, assume the quantity is one.
        */
    protected $orderQuantity = null;

   /**
        * The item ordered.
        */
    protected $orderedItem = null;

   /**
        * The identifier of the order item.
        */
    protected $orderItemNumber = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderItemStatus($value)
    {
        $this->setProperty('orderItemStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderItemStatus()
    {
       return $this->getProperty('orderItemStatus');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderDelivery($value)
    {
        $this->setProperty('orderDelivery', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderDelivery()
    {
       return $this->getProperty('orderDelivery');
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
    * @return string|array|mixed
    */
    public function getOrderQuantity()
    {
       return $this->getProperty('orderQuantity');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderedItem($value)
    {
        $this->setProperty('orderedItem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderedItem()
    {
       return $this->getProperty('orderedItem');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderItemNumber($value)
    {
        $this->setProperty('orderItemNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderItemNumber()
    {
       return $this->getProperty('orderItemNumber');
    }


}
