<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Credential;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\CreativeWork\Credential\EducationalOccupationalCredential;
  use Sohophp\SchemaOrg\Thing\Intangible\OccupationalExperienceRequirements;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
  use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
  * A profession, may involve prolonged training and/or a formal qualification.
  * @see schema:Occupation
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Occupation extends Intangible
{


  /**
      * Specific qualifications required for this role or Occupation.
    * @param Credential|string|array $value
  * @return $this
  */
  public function qualifications($value)
  {
  $this->setProperty('qualifications', $value);
  return $this;
  }

  /**
  * @param Credential|string|array $value
  * @return $this
  */
  public function setQualifications($value)
  {
  $this->setProperty('qualifications', $value);
  return $this;
  }

  /**
  * @param Credential|string $value
  * @return $this
  */
  public function addQualifications($value)
  {
  $current = $this->getProperty('qualifications');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('qualifications', $current);
  return $this;
  }

  /**
  * @return Credential|string|array
  */
  public function getQualifications()
  {
  return $this->getProperty('qualifications');
  }


  /**
      * Responsibilities associated with this role or Occupation.
    * @param string|array $value
  * @return $this
  */
  public function responsibilities($value)
  {
  $this->setProperty('responsibilities', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setResponsibilities($value)
  {
  $this->setProperty('responsibilities', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addResponsibilities($value)
  {
  $current = $this->getProperty('responsibilities');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('responsibilities', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getResponsibilities()
  {
  return $this->getProperty('responsibilities');
  }


  /**
      * An estimated salary for a job posting or occupation, based on a variety of
 * variables including, but not limited to industry, job title, and location.
 * Estimated salaries  are often computed by outside organizations rather than
 * the hiring organization, who may not have committed to the estimated value.
    * @param MonetaryAmountDistribution|MonetaryAmount|array $value
  * @return $this
  */
  public function estimatedSalary($value)
  {
  $this->setProperty('estimatedSalary', $value);
  return $this;
  }

  /**
  * @param MonetaryAmountDistribution|MonetaryAmount|array $value
  * @return $this
  */
  public function setEstimatedSalary($value)
  {
  $this->setProperty('estimatedSalary', $value);
  return $this;
  }

  /**
  * @param MonetaryAmountDistribution|MonetaryAmount $value
  * @return $this
  */
  public function addEstimatedSalary($value)
  {
  $current = $this->getProperty('estimatedSalary');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('estimatedSalary', $current);
  return $this;
  }

  /**
  * @return MonetaryAmountDistribution|MonetaryAmount|array
  */
  public function getEstimatedSalary()
  {
  return $this->getProperty('estimatedSalary');
  }


  /**
      * Educational background needed for the position or Occupation.
    * @param EducationalOccupationalCredential|string|array $value
  * @return $this
  */
  public function educationRequirements($value)
  {
  $this->setProperty('educationRequirements', $value);
  return $this;
  }

  /**
  * @param EducationalOccupationalCredential|string|array $value
  * @return $this
  */
  public function setEducationRequirements($value)
  {
  $this->setProperty('educationRequirements', $value);
  return $this;
  }

  /**
  * @param EducationalOccupationalCredential|string $value
  * @return $this
  */
  public function addEducationRequirements($value)
  {
  $current = $this->getProperty('educationRequirements');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('educationRequirements', $current);
  return $this;
  }

  /**
  * @return EducationalOccupationalCredential|string|array
  */
  public function getEducationRequirements()
  {
  return $this->getProperty('educationRequirements');
  }


  /**
      * Description of skills and experience needed for the position or Occupation.
    * @param string|OccupationalExperienceRequirements|array $value
  * @return $this
  */
  public function experienceRequirements($value)
  {
  $this->setProperty('experienceRequirements', $value);
  return $this;
  }

  /**
  * @param string|OccupationalExperienceRequirements|array $value
  * @return $this
  */
  public function setExperienceRequirements($value)
  {
  $this->setProperty('experienceRequirements', $value);
  return $this;
  }

  /**
  * @param string|OccupationalExperienceRequirements $value
  * @return $this
  */
  public function addExperienceRequirements($value)
  {
  $current = $this->getProperty('experienceRequirements');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('experienceRequirements', $current);
  return $this;
  }

  /**
  * @return string|OccupationalExperienceRequirements|array
  */
  public function getExperienceRequirements()
  {
  return $this->getProperty('experienceRequirements');
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
      * A statement of knowledge, skill, ability, task or any other assertion
 * expressing a competency that is either claimed by a person, an organization
 * or desired or required to fulfill a role or to work in an occupation.
    * @param string|DefinedTerm|array $value
  * @return $this
  */
  public function skills($value)
  {
  $this->setProperty('skills', $value);
  return $this;
  }

  /**
  * @param string|DefinedTerm|array $value
  * @return $this
  */
  public function setSkills($value)
  {
  $this->setProperty('skills', $value);
  return $this;
  }

  /**
  * @param string|DefinedTerm $value
  * @return $this
  */
  public function addSkills($value)
  {
  $current = $this->getProperty('skills');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('skills', $current);
  return $this;
  }

  /**
  * @return string|DefinedTerm|array
  */
  public function getSkills()
  {
  return $this->getProperty('skills');
  }


  /**
      *  The region/country for which this occupational description is appropriate.
 * Note that educational requirements and qualifications can vary between
 * jurisdictions.
    * @param AdministrativeArea|array $value
  * @return $this
  */
  public function occupationLocation($value)
  {
  $this->setProperty('occupationLocation', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea|array $value
  * @return $this
  */
  public function setOccupationLocation($value)
  {
  $this->setProperty('occupationLocation', $value);
  return $this;
  }

  /**
  * @param AdministrativeArea $value
  * @return $this
  */
  public function addOccupationLocation($value)
  {
  $current = $this->getProperty('occupationLocation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('occupationLocation', $current);
  return $this;
  }

  /**
  * @return AdministrativeArea|array
  */
  public function getOccupationLocation()
  {
  return $this->getProperty('occupationLocation');
  }


}
