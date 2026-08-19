<?php
namespace Sohophp\SchemaOrg\Thing;

  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicineSystem;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty;
  use Sohophp\SchemaOrg\Thing\Intangible\Grant;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\MedicalCode;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

/**
  * The most generic type of entity related to health and the practice of
 * medicine.
  * @see schema:MedicalEntity
* @package Sohophp\SchemaOrg\Thing
*/
class MedicalEntity extends Thing
{


  /**
      * The system of medicine that includes this MedicalEntity, for example
 * 'evidence-based', 'homeopathic', 'chiropractic', etc.
    * @param MedicineSystem|array $value
  * @return $this
  */
  public function medicineSystem($value)
  {
  $this->setProperty('medicineSystem', $value);
  return $this;
  }

  /**
  * @param MedicineSystem|array $value
  * @return $this
  */
  public function setMedicineSystem($value)
  {
  $this->setProperty('medicineSystem', $value);
  return $this;
  }

  /**
  * @param MedicineSystem $value
  * @return $this
  */
  public function addMedicineSystem($value)
  {
  $current = $this->getProperty('medicineSystem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('medicineSystem', $current);
  return $this;
  }

  /**
  * @return MedicineSystem|array
  */
  public function getMedicineSystem()
  {
  return $this->getProperty('medicineSystem');
  }


  /**
      * If applicable, a medical specialty in which this entity is relevant.
    * @param MedicalSpecialty|array $value
  * @return $this
  */
  public function relevantSpecialty($value)
  {
  $this->setProperty('relevantSpecialty', $value);
  return $this;
  }

  /**
  * @param MedicalSpecialty|array $value
  * @return $this
  */
  public function setRelevantSpecialty($value)
  {
  $this->setProperty('relevantSpecialty', $value);
  return $this;
  }

  /**
  * @param MedicalSpecialty $value
  * @return $this
  */
  public function addRelevantSpecialty($value)
  {
  $current = $this->getProperty('relevantSpecialty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('relevantSpecialty', $current);
  return $this;
  }

  /**
  * @return MedicalSpecialty|array
  */
  public function getRelevantSpecialty()
  {
  return $this->getProperty('relevantSpecialty');
  }


  /**
      * A [[Grant]] that directly or indirectly provide funding or sponsorship for
 * this item. See also [[ownershipFundingInfo]].
    * @param Grant|array $value
  * @return $this
  */
  public function funding($value)
  {
  $this->setProperty('funding', $value);
  return $this;
  }

  /**
  * @param Grant|array $value
  * @return $this
  */
  public function setFunding($value)
  {
  $this->setProperty('funding', $value);
  return $this;
  }

  /**
  * @param Grant $value
  * @return $this
  */
  public function addFunding($value)
  {
  $current = $this->getProperty('funding');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('funding', $current);
  return $this;
  }

  /**
  * @return Grant|array
  */
  public function getFunding()
  {
  return $this->getProperty('funding');
  }


  /**
      * If applicable, the organization that officially recognizes this entity as
 * part of its endorsed system of medicine.
    * @param Organization|array $value
  * @return $this
  */
  public function recognizingAuthority($value)
  {
  $this->setProperty('recognizingAuthority', $value);
  return $this;
  }

  /**
  * @param Organization|array $value
  * @return $this
  */
  public function setRecognizingAuthority($value)
  {
  $this->setProperty('recognizingAuthority', $value);
  return $this;
  }

  /**
  * @param Organization $value
  * @return $this
  */
  public function addRecognizingAuthority($value)
  {
  $current = $this->getProperty('recognizingAuthority');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recognizingAuthority', $current);
  return $this;
  }

  /**
  * @return Organization|array
  */
  public function getRecognizingAuthority()
  {
  return $this->getProperty('recognizingAuthority');
  }


  /**
      * The drug or supplement's legal status, including any controlled substance
 * schedules that apply.
    * @param DrugLegalStatus|MedicalEnumeration|string|array $value
  * @return $this
  */
  public function legalStatus($value)
  {
  $this->setProperty('legalStatus', $value);
  return $this;
  }

  /**
  * @param DrugLegalStatus|MedicalEnumeration|string|array $value
  * @return $this
  */
  public function setLegalStatus($value)
  {
  $this->setProperty('legalStatus', $value);
  return $this;
  }

  /**
  * @param DrugLegalStatus|MedicalEnumeration|string $value
  * @return $this
  */
  public function addLegalStatus($value)
  {
  $current = $this->getProperty('legalStatus');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('legalStatus', $current);
  return $this;
  }

  /**
  * @return DrugLegalStatus|MedicalEnumeration|string|array
  */
  public function getLegalStatus()
  {
  return $this->getProperty('legalStatus');
  }


  /**
      * A medical study or trial related to this entity.
    * @param MedicalStudy|array $value
  * @return $this
  */
  public function study($value)
  {
  $this->setProperty('study', $value);
  return $this;
  }

  /**
  * @param MedicalStudy|array $value
  * @return $this
  */
  public function setStudy($value)
  {
  $this->setProperty('study', $value);
  return $this;
  }

  /**
  * @param MedicalStudy $value
  * @return $this
  */
  public function addStudy($value)
  {
  $current = $this->getProperty('study');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('study', $current);
  return $this;
  }

  /**
  * @return MedicalStudy|array
  */
  public function getStudy()
  {
  return $this->getProperty('study');
  }


  /**
      * A medical code for the entity, taken from a controlled vocabulary or ontology
 * such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
    * @param MedicalCode|array $value
  * @return $this
  */
  public function code($value)
  {
  $this->setProperty('code', $value);
  return $this;
  }

  /**
  * @param MedicalCode|array $value
  * @return $this
  */
  public function setCode($value)
  {
  $this->setProperty('code', $value);
  return $this;
  }

  /**
  * @param MedicalCode $value
  * @return $this
  */
  public function addCode($value)
  {
  $current = $this->getProperty('code');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('code', $current);
  return $this;
  }

  /**
  * @return MedicalCode|array
  */
  public function getCode()
  {
  return $this->getProperty('code');
  }


  /**
      * A medical guideline related to this entity.
    * @param MedicalGuideline|array $value
  * @return $this
  */
  public function guideline($value)
  {
  $this->setProperty('guideline', $value);
  return $this;
  }

  /**
  * @param MedicalGuideline|array $value
  * @return $this
  */
  public function setGuideline($value)
  {
  $this->setProperty('guideline', $value);
  return $this;
  }

  /**
  * @param MedicalGuideline $value
  * @return $this
  */
  public function addGuideline($value)
  {
  $current = $this->getProperty('guideline');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('guideline', $current);
  return $this;
  }

  /**
  * @return MedicalGuideline|array
  */
  public function getGuideline()
  {
  return $this->getProperty('guideline');
  }


}
