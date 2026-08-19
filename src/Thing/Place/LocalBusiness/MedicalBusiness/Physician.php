<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness;

  use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness;
  use Sohophp\SchemaOrg\Thing\Place\CivicStructure\Hospital;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
  * An individual physician or a physician's office considered as a
 * [[MedicalOrganization]].
  * @see schema:Physician
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness
*/
class Physician extends MedicalBusiness
{


  /**
      * A hospital with which the physician or office is affiliated.
    * @param Hospital|array $value
  * @return $this
  */
  public function hospitalAffiliation($value)
  {
  $this->setProperty('hospitalAffiliation', $value);
  return $this;
  }

  /**
  * @param Hospital|array $value
  * @return $this
  */
  public function setHospitalAffiliation($value)
  {
  $this->setProperty('hospitalAffiliation', $value);
  return $this;
  }

  /**
  * @param Hospital $value
  * @return $this
  */
  public function addHospitalAffiliation($value)
  {
  $current = $this->getProperty('hospitalAffiliation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hospitalAffiliation', $current);
  return $this;
  }

  /**
  * @return Hospital|array
  */
  public function getHospitalAffiliation()
  {
  return $this->getProperty('hospitalAffiliation');
  }


  /**
      * A medical service available from this provider.
    * @param MedicalProcedure|MedicalTest|MedicalTherapy|array $value
  * @return $this
  */
  public function availableService($value)
  {
  $this->setProperty('availableService', $value);
  return $this;
  }

  /**
  * @param MedicalProcedure|MedicalTest|MedicalTherapy|array $value
  * @return $this
  */
  public function setAvailableService($value)
  {
  $this->setProperty('availableService', $value);
  return $this;
  }

  /**
  * @param MedicalProcedure|MedicalTest|MedicalTherapy $value
  * @return $this
  */
  public function addAvailableService($value)
  {
  $current = $this->getProperty('availableService');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('availableService', $current);
  return $this;
  }

  /**
  * @return MedicalProcedure|MedicalTest|MedicalTherapy|array
  */
  public function getAvailableService()
  {
  return $this->getProperty('availableService');
  }


  /**
      * A medical specialty of the provider.
    * @param MedicalSpecialty|array $value
  * @return $this
  */
  public function medicalSpecialty($value)
  {
  $this->setProperty('medicalSpecialty', $value);
  return $this;
  }

  /**
  * @param MedicalSpecialty|array $value
  * @return $this
  */
  public function setMedicalSpecialty($value)
  {
  $this->setProperty('medicalSpecialty', $value);
  return $this;
  }

  /**
  * @param MedicalSpecialty $value
  * @return $this
  */
  public function addMedicalSpecialty($value)
  {
  $current = $this->getProperty('medicalSpecialty');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('medicalSpecialty', $current);
  return $this;
  }

  /**
  * @return MedicalSpecialty|array
  */
  public function getMedicalSpecialty()
  {
  return $this->getProperty('medicalSpecialty');
  }


  /**
      * A category describing the job, preferably using a term from a taxonomy such
 * as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html),
 * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
 * similar, with the property repeated for each applicable value. Ideally the
 * taxonomy should be identified, and both the textual label and formal code for
 * the category should be provided.
 * 
 * Note: for historical reasons, any textual label and formal code provided as a
 * literal may be assumed to be from O*NET-SOC.
    * @param CategoryCode|string|array $value
  * @return $this
  */
  public function occupationalCategory($value)
  {
  $this->setProperty('occupationalCategory', $value);
  return $this;
  }

  /**
  * @param CategoryCode|string|array $value
  * @return $this
  */
  public function setOccupationalCategory($value)
  {
  $this->setProperty('occupationalCategory', $value);
  return $this;
  }

  /**
  * @param CategoryCode|string $value
  * @return $this
  */
  public function addOccupationalCategory($value)
  {
  $current = $this->getProperty('occupationalCategory');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('occupationalCategory', $current);
  return $this;
  }

  /**
  * @return CategoryCode|string|array
  */
  public function getOccupationalCategory()
  {
  return $this->getProperty('occupationalCategory');
  }


  /**
      * A [National Provider
 * Identifier](https://en.wikipedia.org/wiki/National_Provider_Identifier) (NPI)
 * 
 *     is a unique 10-digit identification number issued to health care
 * providers in the United States by the Centers for Medicare and Medicaid
 * Services.
    * @param string|array $value
  * @return $this
  */
  public function usNPI($value)
  {
  $this->setProperty('usNPI', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setUsNPI($value)
  {
  $this->setProperty('usNPI', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addUsNPI($value)
  {
  $current = $this->getProperty('usNPI');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('usNPI', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getUsNPI()
  {
  return $this->getProperty('usNPI');
  }


}
