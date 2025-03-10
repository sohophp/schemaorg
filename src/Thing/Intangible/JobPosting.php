<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\CreativeWork\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Occupation;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution;

/**
* A listing that describes a job opening in a certain organization.
* @see http://schema.org/JobPosting
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class JobPosting extends Intangible
{


    /**
        * The location(s) applicants can apply from. This is usually used for
 * telecommuting jobs where the applicant does not need to be in a physical
 * office. Note: This should not be used for citizenship or work visa
 * requirements.
        * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function applicantLocationRequirements($value)
    {
        $this->setProperty('applicantLocationRequirements', $value);
        return $this;
    }

    /**
    * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function setApplicantLocationRequirements($value)
    {
        $this->setProperty('applicantLocationRequirements', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicantLocationRequirements()
    {
       return $this->getProperty('applicantLocationRequirements');
    }


    /**
        * An indicator as to whether a position is available for an immediate start.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function jobImmediateStart($value)
    {
        $this->setProperty('jobImmediateStart', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setJobImmediateStart($value)
    {
        $this->setProperty('jobImmediateStart', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getJobImmediateStart()
    {
       return $this->getProperty('jobImmediateStart');
    }


    /**
        * A (typically single) geographic location associated with the job position.
        * @param Place|array|string|mixed $value
    * @return $this
    */
    public function jobLocation($value)
    {
        $this->setProperty('jobLocation', $value);
        return $this;
    }

    /**
    * @param Place|array|string|mixed $value
    * @return $this
    */
    public function setJobLocation($value)
    {
        $this->setProperty('jobLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getJobLocation()
    {
       return $this->getProperty('jobLocation');
    }


    /**
        * Description of benefits associated with the job.
        * @param string|array|mixed $value
    * @return $this
    */
    public function benefits($value)
    {
        $this->setProperty('benefits', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setBenefits($value)
    {
        $this->setProperty('benefits', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBenefits()
    {
       return $this->getProperty('benefits');
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
        * Description of bonus and commission compensation aspects of the job.
        * @param string|array|mixed $value
    * @return $this
    */
    public function incentiveCompensation($value)
    {
        $this->setProperty('incentiveCompensation', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setIncentiveCompensation($value)
    {
        $this->setProperty('incentiveCompensation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncentiveCompensation()
    {
       return $this->getProperty('incentiveCompensation');
    }


    /**
        * A description of the job location (e.g TELECOMMUTE for telecommute jobs).
        * @param string|array|mixed $value
    * @return $this
    */
    public function jobLocationType($value)
    {
        $this->setProperty('jobLocationType', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setJobLocationType($value)
    {
        $this->setProperty('jobLocationType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getJobLocationType()
    {
       return $this->getProperty('jobLocationType');
    }


    /**
        * The typical working hours for this job (e.g. 1st shift, night shift,
 * 8am-5pm).
        * @param string|array|mixed $value
    * @return $this
    */
    public function workHours($value)
    {
        $this->setProperty('workHours', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setWorkHours($value)
    {
        $this->setProperty('workHours', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorkHours()
    {
       return $this->getProperty('workHours');
    }


    /**
        * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217) )
 * used for the main salary information in this job posting or for this
 * employee.
        * @param string|array|mixed $value
    * @return $this
    */
    public function salaryCurrency($value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSalaryCurrency($value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSalaryCurrency()
    {
       return $this->getProperty('salaryCurrency');
    }


    /**
        * Description of benefits associated with the job.
        * @param string|array|mixed $value
    * @return $this
    */
    public function jobBenefits($value)
    {
        $this->setProperty('jobBenefits', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setJobBenefits($value)
    {
        $this->setProperty('jobBenefits', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getJobBenefits()
    {
       return $this->getProperty('jobBenefits');
    }


    /**
        * Publication date for the job posting.
        * @param array|string|mixed $value
    * @return $this
    */
    public function datePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDatePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDatePosted()
    {
       return $this->getProperty('datePosted');
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
        * Description of bonus and commission compensation aspects of the job.
        * @param string|array|mixed $value
    * @return $this
    */
    public function incentives($value)
    {
        $this->setProperty('incentives', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setIncentives($value)
    {
        $this->setProperty('incentives', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncentives()
    {
       return $this->getProperty('incentives');
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
        * The base salary of the job or of an employee in an EmployeeRole.
        * @param MonetaryAmount|PriceSpecification|array|string|mixed $value
    * @return $this
    */
    public function baseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|PriceSpecification|array|string|mixed $value
    * @return $this
    */
    public function setBaseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBaseSalary()
    {
       return $this->getProperty('baseSalary');
    }


    /**
        * The date after when the item is not valid. For example the end of an offer,
 * salary period, or a period of opening hours.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidThrough()
    {
       return $this->getProperty('validThrough');
    }


    /**
        * Organization offering the job position.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function hiringOrganization($value)
    {
        $this->setProperty('hiringOrganization', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function setHiringOrganization($value)
    {
        $this->setProperty('hiringOrganization', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHiringOrganization()
    {
       return $this->getProperty('hiringOrganization');
    }


    /**
        * The Occupation for the JobPosting.
        * @param Occupation|array|string|mixed $value
    * @return $this
    */
    public function relevantOccupation($value)
    {
        $this->setProperty('relevantOccupation', $value);
        return $this;
    }

    /**
    * @param Occupation|array|string|mixed $value
    * @return $this
    */
    public function setRelevantOccupation($value)
    {
        $this->setProperty('relevantOccupation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRelevantOccupation()
    {
       return $this->getProperty('relevantOccupation');
    }


    /**
        * Any special commitments associated with this job posting. Valid entries
 * include VeteranCommit, MilitarySpouseCommit, etc.
        * @param string|array|mixed $value
    * @return $this
    */
    public function specialCommitments($value)
    {
        $this->setProperty('specialCommitments', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSpecialCommitments($value)
    {
        $this->setProperty('specialCommitments', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSpecialCommitments()
    {
       return $this->getProperty('specialCommitments');
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
        * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal,
 * internship).
        * @param string|array|mixed $value
    * @return $this
    */
    public function employmentType($value)
    {
        $this->setProperty('employmentType', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setEmploymentType($value)
    {
        $this->setProperty('employmentType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmploymentType()
    {
       return $this->getProperty('employmentType');
    }


    /**
        * The date on which a successful applicant for this job would be expected to
 * start work. Choose a specific date in the future or use the jobImmediateStart
 * property to indicate the position is to be filled as soon as possible.
        * @param string|array|mixed $value
    * @return $this
    */
    public function jobStartDate($value)
    {
        $this->setProperty('jobStartDate', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setJobStartDate($value)
    {
        $this->setProperty('jobStartDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getJobStartDate()
    {
       return $this->getProperty('jobStartDate');
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


    /**
        * The title of the job.
        * @param string|array|mixed $value
    * @return $this
    */
    public function title($value)
    {
        $this->setProperty('title', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setTitle($value)
    {
        $this->setProperty('title', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTitle()
    {
       return $this->getProperty('title');
    }


    /**
        * The industry associated with the job position.
        * @param string|array|mixed $value
    * @return $this
    */
    public function industry($value)
    {
        $this->setProperty('industry', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setIndustry($value)
    {
        $this->setProperty('industry', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIndustry()
    {
       return $this->getProperty('industry');
    }


}
