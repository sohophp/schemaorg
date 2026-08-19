<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

  use Sohophp\SchemaOrg\Thing\MedicalEntity;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalEvidenceLevel;

/**
  * Any recommendation made by a standard society (e.g. ACC/AHA) or consensus
 * statement that denotes how to diagnose and treat a particular condition.
 * Note: this type should be used to tag the actual guideline recommendation; if
 * the guideline recommendation occurs in a larger scholarly article, use
 * MedicalScholarlyArticle to tag the overall article, not this type. Note also:
 * the organization making the recommendation should be captured in the
 * recognizingAuthority base property of MedicalEntity.
  * @see schema:MedicalGuideline
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalGuideline extends MedicalEntity
{


  /**
      * The medical conditions, treatments, etc. that are the subject of the
 * guideline.
    * @param MedicalEntity|array $value
  * @return $this
  */
  public function guidelineSubject($value)
  {
  $this->setProperty('guidelineSubject', $value);
  return $this;
  }

  /**
  * @param MedicalEntity|array $value
  * @return $this
  */
  public function setGuidelineSubject($value)
  {
  $this->setProperty('guidelineSubject', $value);
  return $this;
  }

  /**
  * @param MedicalEntity $value
  * @return $this
  */
  public function addGuidelineSubject($value)
  {
  $current = $this->getProperty('guidelineSubject');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('guidelineSubject', $current);
  return $this;
  }

  /**
  * @return MedicalEntity|array
  */
  public function getGuidelineSubject()
  {
  return $this->getProperty('guidelineSubject');
  }


  /**
      * Source of the data used to formulate the guidance, e.g. RCT, consensus
 * opinion, etc.
    * @param string|array $value
  * @return $this
  */
  public function evidenceOrigin($value)
  {
  $this->setProperty('evidenceOrigin', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setEvidenceOrigin($value)
  {
  $this->setProperty('evidenceOrigin', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addEvidenceOrigin($value)
  {
  $current = $this->getProperty('evidenceOrigin');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('evidenceOrigin', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getEvidenceOrigin()
  {
  return $this->getProperty('evidenceOrigin');
  }


  /**
      * Strength of evidence of the data used to formulate the guideline
 * (enumerated).
    * @param MedicalEvidenceLevel|array $value
  * @return $this
  */
  public function evidenceLevel($value)
  {
  $this->setProperty('evidenceLevel', $value);
  return $this;
  }

  /**
  * @param MedicalEvidenceLevel|array $value
  * @return $this
  */
  public function setEvidenceLevel($value)
  {
  $this->setProperty('evidenceLevel', $value);
  return $this;
  }

  /**
  * @param MedicalEvidenceLevel $value
  * @return $this
  */
  public function addEvidenceLevel($value)
  {
  $current = $this->getProperty('evidenceLevel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('evidenceLevel', $current);
  return $this;
  }

  /**
  * @return MedicalEvidenceLevel|array
  */
  public function getEvidenceLevel()
  {
  return $this->getProperty('evidenceLevel');
  }


  /**
      * Date on which this guideline's recommendation was made.
    * @param mixed $value
  * @return $this
  */
  public function guidelineDate($value)
  {
  $this->setProperty('guidelineDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setGuidelineDate($value)
  {
  $this->setProperty('guidelineDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addGuidelineDate($value)
  {
  $current = $this->getProperty('guidelineDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('guidelineDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getGuidelineDate()
  {
  return $this->getProperty('guidelineDate');
  }


}
