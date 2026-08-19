<?php
namespace Sohophp\SchemaOrg\Thing;

  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
  * A StupidType for testing.
  * @see schema:StupidType
* @package Sohophp\SchemaOrg\Thing
*/
class StupidType extends Thing
{


  /**
      * This is a StupidProperty! - for testing only.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function stupidProperty($value)
  {
  $this->setProperty('stupidProperty', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setStupidProperty($value)
  {
  $this->setProperty('stupidProperty', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addStupidProperty($value)
  {
  $current = $this->getProperty('stupidProperty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('stupidProperty', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getStupidProperty()
  {
  return $this->getProperty('stupidProperty');
  }


}
