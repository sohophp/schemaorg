<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
  * Used to describe a seat, such as a reserved seat in an event reservation.
  * @see schema:Seat
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Seat extends Intangible
{


  /**
      * The location of the reserved seat (e.g., 27).
    * @param string|array $value
  * @return $this
  */
  public function seatNumber($value)
  {
  $this->setProperty('seatNumber', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSeatNumber($value)
  {
  $this->setProperty('seatNumber', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSeatNumber($value)
  {
  $current = $this->getProperty('seatNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seatNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSeatNumber()
  {
  return $this->getProperty('seatNumber');
  }


  /**
      * The section location of the reserved seat (e.g. Orchestra).
    * @param string|array $value
  * @return $this
  */
  public function seatSection($value)
  {
  $this->setProperty('seatSection', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSeatSection($value)
  {
  $this->setProperty('seatSection', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSeatSection($value)
  {
  $current = $this->getProperty('seatSection');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seatSection', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSeatSection()
  {
  return $this->getProperty('seatSection');
  }


  /**
      * The row location of the reserved seat (e.g., B).
    * @param string|array $value
  * @return $this
  */
  public function seatRow($value)
  {
  $this->setProperty('seatRow', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSeatRow($value)
  {
  $this->setProperty('seatRow', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSeatRow($value)
  {
  $current = $this->getProperty('seatRow');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seatRow', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSeatRow()
  {
  return $this->getProperty('seatRow');
  }


  /**
      * The type/class of the seat.
    * @param string|QualitativeValue|array $value
  * @return $this
  */
  public function seatingType($value)
  {
  $this->setProperty('seatingType', $value);
  return $this;
  }

  /**
  * @param string|QualitativeValue|array $value
  * @return $this
  */
  public function setSeatingType($value)
  {
  $this->setProperty('seatingType', $value);
  return $this;
  }

  /**
  * @param string|QualitativeValue $value
  * @return $this
  */
  public function addSeatingType($value)
  {
  $current = $this->getProperty('seatingType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seatingType', $current);
  return $this;
  }

  /**
  * @return string|QualitativeValue|array
  */
  public function getSeatingType()
  {
  return $this->getProperty('seatingType');
  }


}
