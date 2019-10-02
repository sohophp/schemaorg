<?php declare(strict_types=1);
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
    * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
    * @param AdministrativeArea $value
    * @return $this
    */
    public function applicantLocationRequirements(?AdministrativeArea $value)
    {
        $this->setProperty('applicantLocationRequirements', $value);
        return $this;
    }

    /**
    * An indicator as to whether a position is available for an immediate start.
    * @param bool $value
    * @return $this
    */
    public function jobImmediateStart(?bool $value)
    {
        $this->setProperty('jobImmediateStart', $value);
        return $this;
    }

    /**
    * A (typically single) geographic location associated with the job position.
    * @param Place $value
    * @return $this
    */
    public function jobLocation(?Place $value)
    {
        $this->setProperty('jobLocation', $value);
        return $this;
    }

    /**
    * Description of benefits associated with the job.
    * @param string $value
    * @return $this
    */
    public function benefits(?string $value)
    {
        $this->setProperty('benefits', $value);
        return $this;
    }

    /**
    * Specific qualifications required for this role or Occupation.
    * @param string|EducationalOccupationalCredential $value
    * @return $this
    */
    public function qualifications($value)
    {
        $this->setProperty('qualifications', $value);
        return $this;
    }

    /**
    * Description of bonus and commission compensation aspects of the job.
    * @param string $value
    * @return $this
    */
    public function incentiveCompensation(?string $value)
    {
        $this->setProperty('incentiveCompensation', $value);
        return $this;
    }

    /**
    * A description of the job location (e.g TELECOMMUTE for telecommute jobs).
    * @param string $value
    * @return $this
    */
    public function jobLocationType(?string $value)
    {
        $this->setProperty('jobLocationType', $value);
        return $this;
    }

    /**
    * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
    * @param string $value
    * @return $this
    */
    public function workHours(?string $value)
    {
        $this->setProperty('workHours', $value);
        return $this;
    }

    /**
    * The currency (coded using <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a> ) used for the main salary information in this job posting or for this employee.
    * @param string $value
    * @return $this
    */
    public function salaryCurrency(?string $value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
    * Description of benefits associated with the job.
    * @param string $value
    * @return $this
    */
    public function jobBenefits(?string $value)
    {
        $this->setProperty('jobBenefits', $value);
        return $this;
    }

    /**
    * Publication date for the job posting.
    * @param  $value
    * @return $this
    */
    public function datePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
    * Skills required to fulfill this role or in this Occupation.
    * @param string $value
    * @return $this
    */
    public function skills(?string $value)
    {
        $this->setProperty('skills', $value);
        return $this;
    }

    /**
    * Description of bonus and commission compensation aspects of the job.
    * @param string $value
    * @return $this
    */
    public function incentives(?string $value)
    {
        $this->setProperty('incentives', $value);
        return $this;
    }

    /**
    * Educational background needed for the position or Occupation.
    * @param EducationalOccupationalCredential|string $value
    * @return $this
    */
    public function educationRequirements($value)
    {
        $this->setProperty('educationRequirements', $value);
        return $this;
    }

    /**
    * Responsibilities associated with this role or Occupation.
    * @param string $value
    * @return $this
    */
    public function responsibilities(?string $value)
    {
        $this->setProperty('responsibilities', $value);
        return $this;
    }

    /**
    * The base salary of the job or of an employee in an EmployeeRole.
    * @param MonetaryAmount|PriceSpecification $value
    * @return $this
    */
    public function baseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }

    /**
    * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
    * @param  $value
    * @return $this
    */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
    * Organization offering the job position.
    * @param Organization $value
    * @return $this
    */
    public function hiringOrganization(?Organization $value)
    {
        $this->setProperty('hiringOrganization', $value);
        return $this;
    }

    /**
    * The Occupation for the JobPosting.
    * @param Occupation $value
    * @return $this
    */
    public function relevantOccupation(?Occupation $value)
    {
        $this->setProperty('relevantOccupation', $value);
        return $this;
    }

    /**
    * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
    * @param string $value
    * @return $this
    */
    public function specialCommitments(?string $value)
    {
        $this->setProperty('specialCommitments', $value);
        return $this;
    }

    /**
    * A category describing the job, preferably using a term from a taxonomy such as <a href="http://www.onetcenter.org/taxonomy.html">BLS O*NET-SOC</a>, <a href="https://www.ilo.org/public/english/bureau/stat/isco/isco08/">ISCO-08</a> or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.<br/><br/>

Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
    * @param string|CategoryCode $value
    * @return $this
    */
    public function occupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
    * Description of skills and experience needed for the position or Occupation.
    * @param string $value
    * @return $this
    */
    public function experienceRequirements(?string $value)
    {
        $this->setProperty('experienceRequirements', $value);
        return $this;
    }

    /**
    * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
    * @param string $value
    * @return $this
    */
    public function employmentType(?string $value)
    {
        $this->setProperty('employmentType', $value);
        return $this;
    }

    /**
    * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
    * @param string $value
    * @return $this
    */
    public function jobStartDate(?string $value)
    {
        $this->setProperty('jobStartDate', $value);
        return $this;
    }

    /**
    * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
    * @param MonetaryAmountDistribution|MonetaryAmount $value
    * @return $this
    */
    public function estimatedSalary($value)
    {
        $this->setProperty('estimatedSalary', $value);
        return $this;
    }

    /**
    * The title of the job.
    * @param string $value
    * @return $this
    */
    public function title(?string $value)
    {
        $this->setProperty('title', $value);
        return $this;
    }

    /**
    * The industry associated with the job position.
    * @param string $value
    * @return $this
    */
    public function industry(?string $value)
    {
        $this->setProperty('industry', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\JobPosting','Thing\\JobPosting');

