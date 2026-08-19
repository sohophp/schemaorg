<?php
namespace Sohophp\SchemaOrg\Thing\Place\Accommodation;

  use Sohophp\SchemaOrg\Thing\Place\Accommodation;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * A house is a building or structure that has the ability to be occupied for
 * habitation by humans or other creatures (source: Wikipedia, the free
 * encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/House">http://en.wikipedia.org/wiki/House</a>).
  * @see schema:House
* @package Sohophp\SchemaOrg\Thing\Place\Accommodation
*/
class House extends Accommodation
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


}
