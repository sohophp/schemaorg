<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
* @see schema:OrderItem
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class OrderItem extends Intangible
{


    /**
        * The current status of the order item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderItemStatus($value)
    {
        $this->setProperty('orderItemStatus', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The delivery of the parcel related to this order or order item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderDelivery($value)
    {
        $this->setProperty('orderDelivery', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of the item ordered. If the property is not set, assume the
 * quantity is one.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderQuantity($value)
    {
        $this->setProperty('orderQuantity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The item ordered.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderedItem($value)
    {
        $this->setProperty('orderedItem', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The identifier of the order item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderItemNumber($value)
    {
        $this->setProperty('orderItemNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
