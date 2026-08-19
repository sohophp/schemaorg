<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

  use Sohophp\SchemaOrg\Thing\MedicalEntity;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalProcedureType;

/**
  * A process of care used in either a diagnostic, therapeutic, preventive or
 * palliative capacity that relies on invasive (surgical), non-invasive, or
 * other techniques.
  * @see schema:MedicalProcedure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalProcedure extends MedicalEntity
{


  /**
      * Typical or recommended followup care after the procedure is performed.
    * @param string|array $value
  * @return $this
  */
  public function followup($value)
  {
  $this->setProperty('followup', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setFollowup($value)
  {
  $this->setProperty('followup', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addFollowup($value)
  {
  $current = $this->getProperty('followup');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('followup', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getFollowup()
  {
  return $this->getProperty('followup');
  }


  /**
      * The status of the study (enumerated).
    * @param EventStatusType|MedicalStudyStatus|string|array $value
  * @return $this
  */
  public function status($value)
  {
  $this->setProperty('status', $value);
  return $this;
  }

  /**
  * @param EventStatusType|MedicalStudyStatus|string|array $value
  * @return $this
  */
  public function setStatus($value)
  {
  $this->setProperty('status', $value);
  return $this;
  }

  /**
  * @param EventStatusType|MedicalStudyStatus|string $value
  * @return $this
  */
  public function addStatus($value)
  {
  $current = $this->getProperty('status');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('status', $current);
  return $this;
  }

  /**
  * @return EventStatusType|MedicalStudyStatus|string|array
  */
  public function getStatus()
  {
  return $this->getProperty('status');
  }


  /**
      * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
    * @param MedicalProcedureType|array $value
  * @return $this
  */
  public function procedureType($value)
  {
  $this->setProperty('procedureType', $value);
  return $this;
  }

  /**
  * @param MedicalProcedureType|array $value
  * @return $this
  */
  public function setProcedureType($value)
  {
  $this->setProperty('procedureType', $value);
  return $this;
  }

  /**
  * @param MedicalProcedureType $value
  * @return $this
  */
  public function addProcedureType($value)
  {
  $current = $this->getProperty('procedureType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('procedureType', $current);
  return $this;
  }

  /**
  * @return MedicalProcedureType|array
  */
  public function getProcedureType()
  {
  return $this->getProperty('procedureType');
  }


  /**
      * Typical preparation that a patient must undergo before having the procedure
 * performed.
    * @param MedicalEntity|string|array $value
  * @return $this
  */
  public function preparation($value)
  {
  $this->setProperty('preparation', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|string|array $value
  * @return $this
  */
  public function setPreparation($value)
  {
  $this->setProperty('preparation', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|string $value
  * @return $this
  */
  public function addPreparation($value)
  {
  $current = $this->getProperty('preparation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('preparation', $current);
  return $this;
  }

  /**
  * @return MedicalEntity|string|array
  */
  public function getPreparation()
  {
  return $this->getProperty('preparation');
  }


  /**
      * Location in the body of the anatomical structure.
    * @param string|array $value
  * @return $this
  */
  public function bodyLocation($value)
  {
  $this->setProperty('bodyLocation', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setBodyLocation($value)
  {
  $this->setProperty('bodyLocation', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addBodyLocation($value)
  {
  $current = $this->getProperty('bodyLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('bodyLocation', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getBodyLocation()
  {
  return $this->getProperty('bodyLocation');
  }


  /**
      * How the procedure is performed.
    * @param string|array $value
  * @return $this
  */
  public function howPerformed($value)
  {
  $this->setProperty('howPerformed', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setHowPerformed($value)
  {
  $this->setProperty('howPerformed', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addHowPerformed($value)
  {
  $current = $this->getProperty('howPerformed');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('howPerformed', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getHowPerformed()
  {
  return $this->getProperty('howPerformed');
  }


}
