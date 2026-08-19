<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
  * Information about the engine of the vehicle. A vehicle can have multiple
 * engines represented by multiple engine specification entities.
  * @see schema:EngineSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class EngineSpecification extends StructuredValue
{


  /**
      * The torque (turning force) of the vehicle's engine.
 * 
 * Typical unit code(s): NU for newton metre (N m), F17 for pound-force per
 * foot, or F48 for pound-force per inch
 * 
 * * Note 1: You can link to information about how the given value has been
 * determined (e.g. reference RPM) using the [[valueReference]] property.
 * * Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function torque($value)
  {
  $this->setProperty('torque', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setTorque($value)
  {
  $this->setProperty('torque', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addTorque($value)
  {
  $current = $this->getProperty('torque');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('torque', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getTorque()
  {
  return $this->getProperty('torque');
  }


  /**
      * The volume swept by all of the pistons inside the cylinders of an internal
 * combustion engine in a single movement. 
 * 
 * Typical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic
 * inches
 * * Note 1: You can link to information about how the given value has been
 * determined using the [[valueReference]] property.
 * * Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function engineDisplacement($value)
  {
  $this->setProperty('engineDisplacement', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setEngineDisplacement($value)
  {
  $this->setProperty('engineDisplacement', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addEngineDisplacement($value)
  {
  $current = $this->getProperty('engineDisplacement');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('engineDisplacement', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getEngineDisplacement()
  {
  return $this->getProperty('engineDisplacement');
  }


  /**
      * The type of engine or engines powering the vehicle.
    * @param string|QualitativeValue|array $value
  * @return $this
  */
  public function engineType($value)
  {
  $this->setProperty('engineType', $value);
  return $this;
  }

  /**
  * @param string|QualitativeValue|array $value
  * @return $this
  */
  public function setEngineType($value)
  {
  $this->setProperty('engineType', $value);
  return $this;
  }

  /**
  * @param string|QualitativeValue $value
  * @return $this
  */
  public function addEngineType($value)
  {
  $current = $this->getProperty('engineType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('engineType', $current);
  return $this;
  }

  /**
  * @return string|QualitativeValue|array
  */
  public function getEngineType()
  {
  return $this->getProperty('engineType');
  }


  /**
      * The type of fuel suitable for the engine or engines of the vehicle. If the
 * vehicle has only one engine, this property can be attached directly to the
 * vehicle.
    * @param QualitativeValue|string|array $value
  * @return $this
  */
  public function fuelType($value)
  {
  $this->setProperty('fuelType', $value);
  return $this;
  }

  /**
  * @param QualitativeValue|string|array $value
  * @return $this
  */
  public function setFuelType($value)
  {
  $this->setProperty('fuelType', $value);
  return $this;
  }

  /**
  * @param QualitativeValue|string $value
  * @return $this
  */
  public function addFuelType($value)
  {
  $current = $this->getProperty('fuelType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('fuelType', $current);
  return $this;
  }

  /**
  * @return QualitativeValue|string|array
  */
  public function getFuelType()
  {
  return $this->getProperty('fuelType');
  }


  /**
      * The power of the vehicle's engine.
 *     Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for
 * metric horsepower (PS, with 1 PS = 735,49875 W)
 * 
 * * Note 1: There are many different ways of measuring an engine's power. For
 * an overview, see 
 * [http://en.wikipedia.org/wiki/Horsepower#Engine\_power\_test\_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).
 * * Note 2: You can link to information about how the given value has been
 * determined using the [[valueReference]] property.
 * * Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function enginePower($value)
  {
  $this->setProperty('enginePower', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setEnginePower($value)
  {
  $this->setProperty('enginePower', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addEnginePower($value)
  {
  $current = $this->getProperty('enginePower');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('enginePower', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getEnginePower()
  {
  return $this->getProperty('enginePower');
  }


}
