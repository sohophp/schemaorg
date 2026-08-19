<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\PhysicalExam;

/**
  * Any physical manifestation of a person's medical condition discoverable by
 * objective diagnostic tests or physical examination.
  * @see schema:MedicalSign
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom
*/
class MedicalSign extends MedicalSignOrSymptom
{


  /**
      * A diagnostic test that can identify this sign.
    * @param MedicalTest|array $value
  * @return $this
  */
  public function identifyingTest($value)
  {
  $this->setProperty('identifyingTest', $value);
  return $this;
  }

  /**
  * @param MedicalTest|array $value
  * @return $this
  */
  public function setIdentifyingTest($value)
  {
  $this->setProperty('identifyingTest', $value);
  return $this;
  }

  /**
  * @param MedicalTest $value
  * @return $this
  */
  public function addIdentifyingTest($value)
  {
  $current = $this->getProperty('identifyingTest');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('identifyingTest', $current);
  return $this;
  }

  /**
  * @return MedicalTest|array
  */
  public function getIdentifyingTest()
  {
  return $this->getProperty('identifyingTest');
  }


  /**
      * A physical examination that can identify this sign.
    * @param PhysicalExam|array $value
  * @return $this
  */
  public function identifyingExam($value)
  {
  $this->setProperty('identifyingExam', $value);
  return $this;
  }

  /**
  * @param PhysicalExam|array $value
  * @return $this
  */
  public function setIdentifyingExam($value)
  {
  $this->setProperty('identifyingExam', $value);
  return $this;
  }

  /**
  * @param PhysicalExam $value
  * @return $this
  */
  public function addIdentifyingExam($value)
  {
  $current = $this->getProperty('identifyingExam');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('identifyingExam', $current);
  return $this;
  }

  /**
  * @return PhysicalExam|array
  */
  public function getIdentifyingExam()
  {
  return $this->getProperty('identifyingExam');
  }


}
