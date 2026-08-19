<?php
namespace Sohophp\SchemaOrg\Thing\Event;

  use Sohophp\SchemaOrg\Thing\Event;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;

/**
  * An event involving the delivery of an item.
  * @see schema:DeliveryEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class DeliveryEvent extends Event
{


  /**
      * Password, PIN, or access code needed for delivery (e.g. from a locker).
    * @param string|array $value
  * @return $this
  */
  public function accessCode($value)
  {
  $this->setProperty('accessCode', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAccessCode($value)
  {
  $this->setProperty('accessCode', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAccessCode($value)
  {
  $current = $this->getProperty('accessCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('accessCode', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAccessCode()
  {
  return $this->getProperty('accessCode');
  }


  /**
      * Method used for delivery or shipping.
    * @param DeliveryMethod|array $value
  * @return $this
  */
  public function hasDeliveryMethod($value)
  {
  $this->setProperty('hasDeliveryMethod', $value);
  return $this;
  }

  /**
  * @param DeliveryMethod|array $value
  * @return $this
  */
  public function setHasDeliveryMethod($value)
  {
  $this->setProperty('hasDeliveryMethod', $value);
  return $this;
  }

  /**
  * @param DeliveryMethod $value
  * @return $this
  */
  public function addHasDeliveryMethod($value)
  {
  $current = $this->getProperty('hasDeliveryMethod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasDeliveryMethod', $current);
  return $this;
  }

  /**
  * @return DeliveryMethod|array
  */
  public function getHasDeliveryMethod()
  {
  return $this->getProperty('hasDeliveryMethod');
  }


  /**
      * When the item is available for pickup from the store, locker, etc.
    * @param mixed $value
  * @return $this
  */
  public function availableFrom($value)
  {
  $this->setProperty('availableFrom', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setAvailableFrom($value)
  {
  $this->setProperty('availableFrom', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addAvailableFrom($value)
  {
  $current = $this->getProperty('availableFrom');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('availableFrom', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getAvailableFrom()
  {
  return $this->getProperty('availableFrom');
  }


  /**
      * After this date, the item will no longer be available for pickup.
    * @param mixed $value
  * @return $this
  */
  public function availableThrough($value)
  {
  $this->setProperty('availableThrough', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setAvailableThrough($value)
  {
  $this->setProperty('availableThrough', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addAvailableThrough($value)
  {
  $current = $this->getProperty('availableThrough');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('availableThrough', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getAvailableThrough()
  {
  return $this->getProperty('availableThrough');
  }


}
