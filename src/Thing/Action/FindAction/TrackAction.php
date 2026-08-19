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
  * @see schema:TrackAction
* @package Sohophp\SchemaOrg\Thing\Action\FindAction
*/
class TrackAction extends FindAction
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
