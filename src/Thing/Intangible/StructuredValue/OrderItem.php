<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\OrderStatus;
  use Sohophp\SchemaOrg\Thing\Intangible\ParcelDelivery;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\Product;
  use Sohophp\SchemaOrg\Thing\Intangible\Service;

/**
  * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
  * @see schema:OrderItem
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class OrderItem extends StructuredValue
{


  /**
      * The current status of the order item.
    * @param OrderStatus|array $value
  * @return $this
  */
  public function orderItemStatus($value)
  {
  $this->setProperty('orderItemStatus', $value);
  return $this;
  }

  /**
  * @param OrderStatus|array $value
  * @return $this
  */
  public function setOrderItemStatus($value)
  {
  $this->setProperty('orderItemStatus', $value);
  return $this;
  }

  /**
  * @param OrderStatus $value
  * @return $this
  */
  public function addOrderItemStatus($value)
  {
  $current = $this->getProperty('orderItemStatus');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderItemStatus', $current);
  return $this;
  }

  /**
  * @return OrderStatus|array
  */
  public function getOrderItemStatus()
  {
  return $this->getProperty('orderItemStatus');
  }


  /**
      * The delivery of the parcel related to this order or order item.
    * @param ParcelDelivery|array $value
  * @return $this
  */
  public function orderDelivery($value)
  {
  $this->setProperty('orderDelivery', $value);
  return $this;
  }

  /**
  * @param ParcelDelivery|array $value
  * @return $this
  */
  public function setOrderDelivery($value)
  {
  $this->setProperty('orderDelivery', $value);
  return $this;
  }

  /**
  * @param ParcelDelivery $value
  * @return $this
  */
  public function addOrderDelivery($value)
  {
  $current = $this->getProperty('orderDelivery');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderDelivery', $current);
  return $this;
  }

  /**
  * @return ParcelDelivery|array
  */
  public function getOrderDelivery()
  {
  return $this->getProperty('orderDelivery');
  }


  /**
      * The identifier of the order item.
    * @param string|array $value
  * @return $this
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
  * @param string $value
  * @return $this
  */
  public function addOrderItemNumber($value)
  {
  $current = $this->getProperty('orderItemNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderItemNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getOrderItemNumber()
  {
  return $this->getProperty('orderItemNumber');
  }


  /**
      * The number of the item ordered. If the property is not set, assume the
 * quantity is one.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function orderQuantity($value)
  {
  $this->setProperty('orderQuantity', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setOrderQuantity($value)
  {
  $this->setProperty('orderQuantity', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addOrderQuantity($value)
  {
  $current = $this->getProperty('orderQuantity');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderQuantity', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getOrderQuantity()
  {
  return $this->getProperty('orderQuantity');
  }


  /**
      * The item ordered.
    * @param Product|Service|OrderItem|array $value
  * @return $this
  */
  public function orderedItem($value)
  {
  $this->setProperty('orderedItem', $value);
  return $this;
  }

  /**
  * @param Product|Service|OrderItem|array $value
  * @return $this
  */
  public function setOrderedItem($value)
  {
  $this->setProperty('orderedItem', $value);
  return $this;
  }

  /**
  * @param Product|Service|OrderItem $value
  * @return $this
  */
  public function addOrderedItem($value)
  {
  $current = $this->getProperty('orderedItem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderedItem', $current);
  return $this;
  }

  /**
  * @return Product|Service|OrderItem|array
  */
  public function getOrderedItem()
  {
  return $this->getProperty('orderedItem');
  }


}
