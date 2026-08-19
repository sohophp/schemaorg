<?php
namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

  use Sohophp\SchemaOrg\Thing\Action\TradeAction;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
  * An agent orders an object/product/service to be delivered/sent.
  * @see schema:OrderAction
* @package Sohophp\SchemaOrg\Thing\Action\TradeAction
*/
class OrderAction extends TradeAction
{


  /**
      * A sub property of instrument. The method of delivery.
    * @param DeliveryMethod|array $value
  * @return $this
  */
  public function deliveryMethod($value)
  {
  $this->setProperty('deliveryMethod', $value);
  return $this;
  }

  /**
  * @param DeliveryMethod|array $value
  * @return $this
  */
  public function setDeliveryMethod($value)
  {
  $this->setProperty('deliveryMethod', $value);
  return $this;
  }

  /**
  * @param DeliveryMethod $value
  * @return $this
  */
  public function addDeliveryMethod($value)
  {
  $current = $this->getProperty('deliveryMethod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('deliveryMethod', $current);
  return $this;
  }

  /**
  * @return DeliveryMethod|array
  */
  public function getDeliveryMethod()
  {
  return $this->getProperty('deliveryMethod');
  }


}
