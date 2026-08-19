<?php
namespace Sohophp\SchemaOrg\Thing\Place\Accommodation;

  use Sohophp\SchemaOrg\Thing\Place\Accommodation;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * An apartment (in American English) or flat (in British English) is a
 * self-contained housing unit (a type of residential real estate) that occupies
 * only part of a building (source: Wikipedia, the free encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/Apartment">http://en.wikipedia.org/wiki/Apartment</a>).
  * @see schema:Apartment
* @package Sohophp\SchemaOrg\Thing\Place\Accommodation
*/
class Apartment extends Accommodation
{


  /**
      * The number of rooms (excluding bathrooms and closets) of the accommodation or
 * lodging business.
 * Typical unit code(s): ROM for room or C62 for no unit. The type of room can
 * be put in the unitText property of the QuantitativeValue.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function numberOfRooms($value)
  {
  $this->setProperty('numberOfRooms', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setNumberOfRooms($value)
  {
  $this->setProperty('numberOfRooms', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addNumberOfRooms($value)
  {
  $current = $this->getProperty('numberOfRooms');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('numberOfRooms', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getNumberOfRooms()
  {
  return $this->getProperty('numberOfRooms');
  }


  /**
      * The allowed total occupancy for the accommodation in persons (including
 * infants etc). For individual accommodations, this is not necessarily the
 * legal maximum but defines the permitted usage as per the contractual
 * agreement (e.g. a double room used by a single person).
 * Typical unit code(s): C62 for person.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function occupancy($value)
  {
  $this->setProperty('occupancy', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setOccupancy($value)
  {
  $this->setProperty('occupancy', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addOccupancy($value)
  {
  $current = $this->getProperty('occupancy');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('occupancy', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getOccupancy()
  {
  return $this->getProperty('occupancy');
  }


}
