<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\CreativeWork\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A profession, may involve prolonged training and/or a formal qualification.
* @see http://schema.org/Occupation
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Occupation extends Intangible
{


    /**
        * The region/country for which this occupational description is appropriate.
 * Note that educational requirements and qualifications can vary between
 * jurisdictions.
        * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function occupationLocation($value)
    {
        $this->setProperty('occupationLocation', $value);
        return $this;
    }

    /**
    * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function setOccupationLocation($value)
    {
        $this->setProperty('occupationLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOccupationLocation()
    {
       return $this->getProperty('occupationLocation');
    }


    /**
        * Specific qualifications required for this role or Occupation.
        * @param string|EducationalOccupationalCredential|array|mixed $value
    * @return $this
    */
    public function qualifications($value)
    {
        $this->setProperty('qualifications', $value);
        return $this;
    }

    /**
    * @param string|EducationalOccupationalCredential|array|mixed $value
    * @return $this
    */
    public function setQualifications($value)
    {
        $this->setProperty('qualifications', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getQualifications()
    {
       return $this->getProperty('qualifications');
    }


    /**
        * Skills required to fulfill this role or in this Occupation.
        * @param string|array|mixed $value
    * @return $this
    */
    public function skills($value)
    {
        $this->setProperty('skills', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSkills($value)
    {
        $this->setProperty('skills', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSkills()
    {
       return $this->getProperty('skills');
    }


    /**
        * Educational background needed for the position or Occupation.
        * @param EducationalOccupationalCredential|string|array|mixed $value
    * @return $this
    */
    public function educationRequirements($value)
    {
        $this->setProperty('educationRequirements', $value);
        return $this;
    }

    /**
    * @param EducationalOccupationalCredential|string|array|mixed $value
    * @return $this
    */
    public function setEducationRequirements($value)
    {
        $this->setProperty('educationRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationRequirements()
    {
       return $this->getProperty('educationRequirements');
    }


    /**
        * Responsibilities associated with this role or Occupation.
        * @param string|array|mixed $value
    * @return $this
    */
    public function responsibilities($value)
    {
        $this->setProperty('responsibilities', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setResponsibilities($value)
    {
        $this->setProperty('responsibilities', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getResponsibilities()
    {
       return $this->getProperty('responsibilities');
    }


    /**
        * A category describing the job, preferably using a term from a taxonomy such
 * as <a href="http://www.onetcenter.org/taxonomy.html">BLS O*NET-SOC</a>,
 * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
 * similar, with the property repeated for each applicable value. Ideally the
 * taxonomy should be identified, and both the textual label and formal code for
 * the category should be provided.
 * 
 * Note: for historical reasons, any textual label and formal code provided as a
 * literal may be assumed to be from O*NET-SOC.
        * @param string|CategoryCode|array|mixed $value
    * @return $this
    */
    public function occupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
    * @param string|CategoryCode|array|mixed $value
    * @return $this
    */
    public function setOccupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOccupationalCategory()
    {
       return $this->getProperty('occupationalCategory');
    }


    /**
        * Description of skills and experience needed for the position or Occupation.
        * @param string|array|mixed $value
    * @return $this
    */
    public function experienceRequirements($value)
    {
        $this->setProperty('experienceRequirements', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setExperienceRequirements($value)
    {
        $this->setProperty('experienceRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExperienceRequirements()
    {
       return $this->getProperty('experienceRequirements');
    }


    /**
        * An estimated salary for a job posting or occupation, based on a variety of
 * variables including, but not limited to industry, job title, and location.
 * Estimated salaries  are often computed by outside organizations rather than
 * the hiring organization, who may not have committed to the estimated value.
        * @param MonetaryAmountDistribution|MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function estimatedSalary($value)
    {
        $this->setProperty('estimatedSalary', $value);
        return $this;
    }

    /**
    * @param MonetaryAmountDistribution|MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function setEstimatedSalary($value)
    {
        $this->setProperty('estimatedSalary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEstimatedSalary()
    {
       return $this->getProperty('estimatedSalary');
    }


}
