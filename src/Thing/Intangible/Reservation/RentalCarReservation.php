<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Reservation;

  use Sohophp\SchemaOrg\Thing\Intangible\Reservation;
  use Sohophp\SchemaOrg\Thing\Place;

/**
  * A reservation for a rental car.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
  * @see schema:RentalCarReservation
* @package Sohophp\SchemaOrg\Thing\Intangible\Reservation
*/
class RentalCarReservation extends Reservation
{


  /**
      * When a rental car can be dropped off.
    * @param mixed $value
  * @return $this
  */
  public function dropoffTime($value)
  {
  $this->setProperty('dropoffTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setDropoffTime($value)
  {
  $this->setProperty('dropoffTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addDropoffTime($value)
  {
  $current = $this->getProperty('dropoffTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('dropoffTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getDropoffTime()
  {
  return $this->getProperty('dropoffTime');
  }


  /**
      * When a taxi will pick up a passenger or a rental car can be picked up.
    * @param mixed $value
  * @return $this
  */
  public function pickupTime($value)
  {
  $this->setProperty('pickupTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setPickupTime($value)
  {
  $this->setProperty('pickupTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addPickupTime($value)
  {
  $current = $this->getProperty('pickupTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('pickupTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getPickupTime()
  {
  return $this->getProperty('pickupTime');
  }


  /**
      * Where a rental car can be dropped off.
    * @param Place|array $value
  * @return $this
  */
  public function dropoffLocation($value)
  {
  $this->setProperty('dropoffLocation', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setDropoffLocation($value)
  {
  $this->setProperty('dropoffLocation', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addDropoffLocation($value)
  {
  $current = $this->getProperty('dropoffLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('dropoffLocation', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getDropoffLocation()
  {
  return $this->getProperty('dropoffLocation');
  }


  /**
      * Where a taxi will pick up a passenger or a rental car can be picked up.
    * @param Place|array $value
  * @return $this
  */
  public function pickupLocation($value)
  {
  $this->setProperty('pickupLocation', $value);
  return $this;
  }

  /**
  * @param Place|array $value
  * @return $this
  */
  public function setPickupLocation($value)
  {
  $this->setProperty('pickupLocation', $value);
  return $this;
  }

  /**
  * @param Place $value
  * @return $this
  */
  public function addPickupLocation($value)
  {
  $current = $this->getProperty('pickupLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('pickupLocation', $current);
  return $this;
  }

  /**
  * @return Place|array
  */
  public function getPickupLocation()
  {
  return $this->getProperty('pickupLocation');
  }


}
