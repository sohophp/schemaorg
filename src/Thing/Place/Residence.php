<?php
namespace Sohophp\SchemaOrg\Thing\Place;

  use Sohophp\SchemaOrg\Thing\Place;
  use Sohophp\SchemaOrg\Thing\Intangible\FloorPlan;

/**
  * The place where a person lives.
  * @see schema:Residence
* @package Sohophp\SchemaOrg\Thing\Place
*/
class Residence extends Place
{


  /**
      * A floorplan of some [[Accommodation]].
    * @param FloorPlan|array $value
  * @return $this
  */
  public function accommodationFloorPlan($value)
  {
  $this->setProperty('accommodationFloorPlan', $value);
  return $this;
  }

  /**
  * @param FloorPlan|array $value
  * @return $this
  */
  public function setAccommodationFloorPlan($value)
  {
  $this->setProperty('accommodationFloorPlan', $value);
  return $this;
  }

  /**
  * @param FloorPlan $value
  * @return $this
  */
  public function addAccommodationFloorPlan($value)
  {
  $current = $this->getProperty('accommodationFloorPlan');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('accommodationFloorPlan', $current);
  return $this;
  }

  /**
  * @return FloorPlan|array
  */
  public function getAccommodationFloorPlan()
  {
  return $this->getProperty('accommodationFloorPlan');
  }


  /**
      * The floor level for an [[Accommodation]] in a multi-storey building. Since
 * counting
 *   systems [vary
 * internationally](https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations),
 * the local system should be used where possible.
    * @param string|array $value
  * @return $this
  */
  public function floorLevel($value)
  {
  $this->setProperty('floorLevel', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setFloorLevel($value)
  {
  $this->setProperty('floorLevel', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addFloorLevel($value)
  {
  $current = $this->getProperty('floorLevel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('floorLevel', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getFloorLevel()
  {
  return $this->getProperty('floorLevel');
  }


}
