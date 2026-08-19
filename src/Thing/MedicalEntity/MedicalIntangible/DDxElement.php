<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom;

/**
  * An alternative, closely-related condition typically considered later in the
 * differential diagnosis process along with the signs that are used to
 * distinguish it.
  * @see schema:DDxElement
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DDxElement extends MedicalIntangible
{


  /**
      * One or more alternative conditions considered in the differential diagnosis
 * process as output of a diagnosis process.
    * @param MedicalCondition|array $value
  * @return $this
  */
  public function diagnosis($value)
  {
  $this->setProperty('diagnosis', $value);
  return $this;
  }

  /**
  * @param MedicalCondition|array $value
  * @return $this
  */
  public function setDiagnosis($value)
  {
  $this->setProperty('diagnosis', $value);
  return $this;
  }

  /**
  * @param MedicalCondition $value
  * @return $this
  */
  public function addDiagnosis($value)
  {
  $current = $this->getProperty('diagnosis');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('diagnosis', $current);
  return $this;
  }

  /**
  * @return MedicalCondition|array
  */
  public function getDiagnosis()
  {
  return $this->getProperty('diagnosis');
  }


  /**
      * One of a set of signs and symptoms that can be used to distinguish this
 * diagnosis from others in the differential diagnosis.
    * @param MedicalSignOrSymptom|array $value
  * @return $this
  */
  public function distinguishingSign($value)
  {
  $this->setProperty('distinguishingSign', $value);
  return $this;
  }

  /**
  * @param MedicalSignOrSymptom|array $value
  * @return $this
  */
  public function setDistinguishingSign($value)
  {
  $this->setProperty('distinguishingSign', $value);
  return $this;
  }

  /**
  * @param MedicalSignOrSymptom $value
  * @return $this
  */
  public function addDistinguishingSign($value)
  {
  $current = $this->getProperty('distinguishingSign');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('distinguishingSign', $current);
  return $this;
  }

  /**
  * @return MedicalSignOrSymptom|array
  */
  public function getDistinguishingSign()
  {
  return $this->getProperty('distinguishingSign');
  }


}
