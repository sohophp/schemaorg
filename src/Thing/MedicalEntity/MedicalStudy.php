<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

  use Sohophp\SchemaOrg\Thing\MedicalEntity;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\EventStatusType;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
  * A medical study is an umbrella type covering all kinds of research studies
 * relating to human medicine or health, including observational studies and
 * interventional trials and registries, randomized, controlled or not. When the
 * specific type of study is known, use one of the extensions of this type, such
 * as MedicalTrial or MedicalObservationalStudy. Also, note that this type
 * should be used to mark up data that describes the study itself; to tag an
 * article that publishes the results of a study, use MedicalScholarlyArticle.
 * Note: use the code property of MedicalEntity to store study IDs, e.g.
 * clinicaltrials.gov ID.
  * @see schema:MedicalStudy
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalStudy extends MedicalEntity
{


  /**
      * A person or organization that supports a thing through a pledge, promise, or
 * financial contribution. E.g. a sponsor of a Medical Study or a corporate
 * sponsor of an event.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function sponsor($value)
  {
  $this->setProperty('sponsor', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setSponsor($value)
  {
  $this->setProperty('sponsor', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addSponsor($value)
  {
  $current = $this->getProperty('sponsor');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sponsor', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getSponsor()
  {
  return $this->getProperty('sponsor');
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
      * A subject of the study, i.e. one of the medical conditions, therapies,
 * devices, drugs, etc. investigated by the study.
    * @param MedicalEntity|array $value
  * @return $this
  */
  public function studySubject($value)
  {
  $this->setProperty('studySubject', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|array $value
  * @return $this
  */
  public function setStudySubject($value)
  {
  $this->setProperty('studySubject', $value);
  return $this;
  }

  /**
  * @param MedicalEntity $value
  * @return $this
  */
  public function addStudySubject($value)
  {
  $current = $this->getProperty('studySubject');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('studySubject', $current);
  return $this;
  }

  /**
  * @return MedicalEntity|array
  */
  public function getStudySubject()
  {
  return $this->getProperty('studySubject');
  }


  /**
      * The location in which the study is taking/took place.
    * @param AdministrativeArea|array $value
  * @return $this
  */
  public function studyLocation($value)
  {
  $this->setProperty('studyLocation', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea|array $value
  * @return $this
  */
  public function setStudyLocation($value)
  {
  $this->setProperty('studyLocation', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea $value
  * @return $this
  */
  public function addStudyLocation($value)
  {
  $current = $this->getProperty('studyLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('studyLocation', $current);
  return $this;
  }

  /**
  * @return AdministrativeArea|array
  */
  public function getStudyLocation()
  {
  return $this->getProperty('studyLocation');
  }


  /**
      * Specifying the health condition(s) of a patient, medical study, or other
 * target audience.
    * @param MedicalCondition|array $value
  * @return $this
  */
  public function healthCondition($value)
  {
  $this->setProperty('healthCondition', $value);
  return $this;
  }

  /**
  * @param MedicalCondition|array $value
  * @return $this
  */
  public function setHealthCondition($value)
  {
  $this->setProperty('healthCondition', $value);
  return $this;
  }

  /**
  * @param MedicalCondition $value
  * @return $this
  */
  public function addHealthCondition($value)
  {
  $current = $this->getProperty('healthCondition');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('healthCondition', $current);
  return $this;
  }

  /**
  * @return MedicalCondition|array
  */
  public function getHealthCondition()
  {
  return $this->getProperty('healthCondition');
  }


}
