<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
  * A specific dosing schedule for a drug or supplement.
  * @see schema:DoseSchedule
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DoseSchedule extends MedicalIntangible
{


  /**
      * Characteristics of the population for which this is intended, or which
 * typically uses it, e.g. 'adults'.
    * @param string|array $value
  * @return $this
  */
  public function targetPopulation($value)
  {
  $this->setProperty('targetPopulation', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTargetPopulation($value)
  {
  $this->setProperty('targetPopulation', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTargetPopulation($value)
  {
  $current = $this->getProperty('targetPopulation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('targetPopulation', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTargetPopulation()
  {
  return $this->getProperty('targetPopulation');
  }


  /**
      * How often the dose is taken, e.g. 'daily'.
    * @param string|array $value
  * @return $this
  */
  public function frequency($value)
  {
  $this->setProperty('frequency', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setFrequency($value)
  {
  $this->setProperty('frequency', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addFrequency($value)
  {
  $current = $this->getProperty('frequency');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('frequency', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getFrequency()
  {
  return $this->getProperty('frequency');
  }


  /**
      * The unit of the dose, e.g. 'mg'.
    * @param string|array $value
  * @return $this
  */
  public function doseUnit($value)
  {
  $this->setProperty('doseUnit', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setDoseUnit($value)
  {
  $this->setProperty('doseUnit', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addDoseUnit($value)
  {
  $current = $this->getProperty('doseUnit');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('doseUnit', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getDoseUnit()
  {
  return $this->getProperty('doseUnit');
  }


  /**
      * The value of the dose, e.g. 500.
    * @param QualitativeValue|array $value
  * @return $this
  */
  public function doseValue($value)
  {
  $this->setProperty('doseValue', $value);
  return $this;
  }

  /**
  * @param QualitativeValue|array $value
  * @return $this
  */
  public function setDoseValue($value)
  {
  $this->setProperty('doseValue', $value);
  return $this;
  }

  /**
  * @param QualitativeValue $value
  * @return $this
  */
  public function addDoseValue($value)
  {
  $current = $this->getProperty('doseValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('doseValue', $current);
  return $this;
  }

  /**
  * @return QualitativeValue|array
  */
  public function getDoseValue()
  {
  return $this->getProperty('doseValue');
  }


}
