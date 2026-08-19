<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\CreativeWork\Credential;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution;
use Sohophp\SchemaOrg\Thing\CreativeWork\Credential\EducationalOccupationalCredential;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Occupation;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\OccupationalExperienceRequirements;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;

/**
 * A listing that describes a job opening in a certain organization.
 * @see https://schema.org/JobPosting
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class JobPosting extends Intangible
{
    /**
     * Specific qualifications required for this role or Occupation.
     * @see https://schema.org/qualifications
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
     * Publication date of an online listing.
     * @see https://schema.org/datePosted
     * @param mixed $value
     * @return $this
     */
    public function datePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDatePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDatePosted($value)
    {
        $current = $this->getProperty('datePosted');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('datePosted', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatePosted()
    {
        return $this->getProperty('datePosted');
    }
    /**
     * The expected duration of an employment offer as advertised by the employer. Relevant for job postings that have a clearly defined period in mind such as seasonal work, substitutes for maternal leave or any other temporary employment.
     * @see https://schema.org/jobDuration
     * @param QuantitativeValue|Duration|array $value
     * @return $this
     */
    public function jobDuration($value)
    {
        $this->setProperty('jobDuration', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Duration|array $value
     * @return $this
     */
    public function setJobDuration($value)
    {
        $this->setProperty('jobDuration', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|Duration $value
     * @return $this
     */
    public function addJobDuration($value)
    {
        $current = $this->getProperty('jobDuration');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('jobDuration', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|Duration|array
     */
    public function getJobDuration()
    {
        return $this->getProperty('jobDuration');
    }
    /**
     * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
     * @see https://schema.org/applicantLocationRequirements
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function applicantLocationRequirements($value)
    {
        $this->setProperty('applicantLocationRequirements', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function setApplicantLocationRequirements($value)
    {
        $this->setProperty('applicantLocationRequirements', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea $value
     * @return $this
     */
    public function addApplicantLocationRequirements($value)
    {
        $current = $this->getProperty('applicantLocationRequirements');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('applicantLocationRequirements', $current);
        return $this;
    }

    /**
     * @return AdministrativeArea|array
     */
    public function getApplicantLocationRequirements()
    {
        return $this->getProperty('applicantLocationRequirements');
    }
    /**
     * Description of bonus and commission compensation aspects of the job.
     * @see https://schema.org/incentiveCompensation
     * @param string|array $value
     * @return $this
     */
    public function incentiveCompensation($value)
    {
        $this->setProperty('incentiveCompensation', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setIncentiveCompensation($value)
    {
        $this->setProperty('incentiveCompensation', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addIncentiveCompensation($value)
    {
        $current = $this->getProperty('incentiveCompensation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('incentiveCompensation', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIncentiveCompensation()
    {
        return $this->getProperty('incentiveCompensation');
    }
    /**
     * Description of benefits associated with the job.
     * @see https://schema.org/jobBenefits
     * @param string|array $value
     * @return $this
     */
    public function jobBenefits($value)
    {
        $this->setProperty('jobBenefits', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setJobBenefits($value)
    {
        $this->setProperty('jobBenefits', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addJobBenefits($value)
    {
        $current = $this->getProperty('jobBenefits');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('jobBenefits', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getJobBenefits()
    {
        return $this->getProperty('jobBenefits');
    }
    /**
     * A description of any security clearance requirements of the job.
     * @see https://schema.org/securityClearanceRequirement
     * @param string|array $value
     * @return $this
     */
    public function securityClearanceRequirement($value)
    {
        $this->setProperty('securityClearanceRequirement', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSecurityClearanceRequirement($value)
    {
        $this->setProperty('securityClearanceRequirement', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSecurityClearanceRequirement($value)
    {
        $current = $this->getProperty('securityClearanceRequirement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('securityClearanceRequirement', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSecurityClearanceRequirement()
    {
        return $this->getProperty('securityClearanceRequirement');
    }
    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     * @see https://schema.org/baseSalary
     * @param PriceSpecification|MonetaryAmount|array $value
     * @return $this
     */
    public function baseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|MonetaryAmount|array $value
     * @return $this
     */
    public function setBaseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }

    /**
     * @param PriceSpecification|MonetaryAmount $value
     * @return $this
     */
    public function addBaseSalary($value)
    {
        $current = $this->getProperty('baseSalary');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('baseSalary', $current);
        return $this;
    }

    /**
     * @return PriceSpecification|MonetaryAmount|array
     */
    public function getBaseSalary()
    {
        return $this->getProperty('baseSalary');
    }
    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     * @see https://schema.org/validThrough
     * @param mixed $value
     * @return $this
     */
    public function validThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidThrough($value)
    {
        $this->setProperty('validThrough', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidThrough($value)
    {
        $current = $this->getProperty('validThrough');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validThrough', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidThrough()
    {
        return $this->getProperty('validThrough');
    }
    /**
     * Responsibilities associated with this role or Occupation.
     * @see https://schema.org/responsibilities
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
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     * @see https://schema.org/specialCommitments
     * @param string|array $value
     * @return $this
     */
    public function specialCommitments($value)
    {
        $this->setProperty('specialCommitments', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSpecialCommitments($value)
    {
        $this->setProperty('specialCommitments', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSpecialCommitments($value)
    {
        $current = $this->getProperty('specialCommitments');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('specialCommitments', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSpecialCommitments()
    {
        return $this->getProperty('specialCommitments');
    }
    /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the JobPosting url(s) supplied.
     * @see https://schema.org/directApply
     * @param bool|array $value
     * @return $this
     */
    public function directApply($value)
    {
        $this->setProperty('directApply', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setDirectApply($value)
    {
        $this->setProperty('directApply', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addDirectApply($value)
    {
        $current = $this->getProperty('directApply');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('directApply', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getDirectApply()
    {
        return $this->getProperty('directApply');
    }
    /**
     * A (typically single) geographic location associated with the job position.
     * @see https://schema.org/jobLocation
     * @param Place|array $value
     * @return $this
     */
    public function jobLocation($value)
    {
        $this->setProperty('jobLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setJobLocation($value)
    {
        $this->setProperty('jobLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addJobLocation($value)
    {
        $current = $this->getProperty('jobLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('jobLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getJobLocation()
    {
        return $this->getProperty('jobLocation');
    }
    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     * @see https://schema.org/employmentType
     * @param string|array $value
     * @return $this
     */
    public function employmentType($value)
    {
        $this->setProperty('employmentType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEmploymentType($value)
    {
        $this->setProperty('employmentType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEmploymentType($value)
    {
        $current = $this->getProperty('employmentType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('employmentType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEmploymentType()
    {
        return $this->getProperty('employmentType');
    }
    /**
     * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
     * @see https://schema.org/jobStartDate
     * @param string|array $value
     * @return $this
     */
    public function jobStartDate($value)
    {
        $this->setProperty('jobStartDate', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setJobStartDate($value)
    {
        $this->setProperty('jobStartDate', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addJobStartDate($value)
    {
        $current = $this->getProperty('jobStartDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('jobStartDate', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getJobStartDate()
    {
        return $this->getProperty('jobStartDate');
    }
    /**
     * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
     * @see https://schema.org/estimatedSalary
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
     * @see https://schema.org/educationRequirements
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
     * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
     * @see https://schema.org/experienceInPlaceOfEducation
     * @param bool|array $value
     * @return $this
     */
    public function experienceInPlaceOfEducation($value)
    {
        $this->setProperty('experienceInPlaceOfEducation', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setExperienceInPlaceOfEducation($value)
    {
        $this->setProperty('experienceInPlaceOfEducation', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addExperienceInPlaceOfEducation($value)
    {
        $current = $this->getProperty('experienceInPlaceOfEducation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('experienceInPlaceOfEducation', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getExperienceInPlaceOfEducation()
    {
        return $this->getProperty('experienceInPlaceOfEducation');
    }
    /**
     * Organization or Person offering the job position.
     * @see https://schema.org/hiringOrganization
     * @param Organization|Person|array $value
     * @return $this
     */
    public function hiringOrganization($value)
    {
        $this->setProperty('hiringOrganization', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setHiringOrganization($value)
    {
        $this->setProperty('hiringOrganization', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addHiringOrganization($value)
    {
        $current = $this->getProperty('hiringOrganization');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hiringOrganization', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getHiringOrganization()
    {
        return $this->getProperty('hiringOrganization');
    }
    /**
     * The Occupation for the JobPosting.
     * @see https://schema.org/relevantOccupation
     * @param Occupation|array $value
     * @return $this
     */
    public function relevantOccupation($value)
    {
        $this->setProperty('relevantOccupation', $value);
        return $this;
    }

    /**
     * @param Occupation|array $value
     * @return $this
     */
    public function setRelevantOccupation($value)
    {
        $this->setProperty('relevantOccupation', $value);
        return $this;
    }

    /**
     * @param Occupation $value
     * @return $this
     */
    public function addRelevantOccupation($value)
    {
        $current = $this->getProperty('relevantOccupation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('relevantOccupation', $current);
        return $this;
    }

    /**
     * @return Occupation|array
     */
    public function getRelevantOccupation()
    {
        return $this->getProperty('relevantOccupation');
    }
    /**
     * Description of benefits associated with the job.
     * @see https://schema.org/benefits
     * @param string|array $value
     * @return $this
     */
    public function benefits($value)
    {
        $this->setProperty('benefits', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBenefits($value)
    {
        $this->setProperty('benefits', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBenefits($value)
    {
        $current = $this->getProperty('benefits');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('benefits', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBenefits()
    {
        return $this->getProperty('benefits');
    }
    /**
     * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     * @see https://schema.org/physicalRequirement
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function physicalRequirement($value)
    {
        $this->setProperty('physicalRequirement', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setPhysicalRequirement($value)
    {
        $this->setProperty('physicalRequirement', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addPhysicalRequirement($value)
    {
        $current = $this->getProperty('physicalRequirement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('physicalRequirement', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getPhysicalRequirement()
    {
        return $this->getProperty('physicalRequirement');
    }
    /**
     * A description of the employer, career opportunities and work environment for this position.
     * @see https://schema.org/employerOverview
     * @param string|array $value
     * @return $this
     */
    public function employerOverview($value)
    {
        $this->setProperty('employerOverview', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEmployerOverview($value)
    {
        $this->setProperty('employerOverview', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEmployerOverview($value)
    {
        $current = $this->getProperty('employerOverview');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('employerOverview', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEmployerOverview()
    {
        return $this->getProperty('employerOverview');
    }
    /**
     * The title of the job.
     * @see https://schema.org/title
     * @param string|array $value
     * @return $this
     */
    public function title($value)
    {
        $this->setProperty('title', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTitle($value)
    {
        $this->setProperty('title', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTitle($value)
    {
        $current = $this->getProperty('title');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('title', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTitle()
    {
        return $this->getProperty('title');
    }
    /**
     * An indicator as to whether a position is available for an immediate start.
     * @see https://schema.org/jobImmediateStart
     * @param bool|array $value
     * @return $this
     */
    public function jobImmediateStart($value)
    {
        $this->setProperty('jobImmediateStart', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setJobImmediateStart($value)
    {
        $this->setProperty('jobImmediateStart', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addJobImmediateStart($value)
    {
        $current = $this->getProperty('jobImmediateStart');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('jobImmediateStart', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getJobImmediateStart()
    {
        return $this->getProperty('jobImmediateStart');
    }
    /**
     * The industry associated with the job position.
     * @see https://schema.org/industry
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function industry($value)
    {
        $this->setProperty('industry', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setIndustry($value)
    {
        $this->setProperty('industry', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addIndustry($value)
    {
        $current = $this->getProperty('industry');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('industry', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getIndustry()
    {
        return $this->getProperty('industry');
    }
    /**
     * Description of skills and experience needed for the position or Occupation.
     * @see https://schema.org/experienceRequirements
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
     * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided. Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
     * @see https://schema.org/occupationalCategory
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
     * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
     * @see https://schema.org/skills
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
     * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
     * @see https://schema.org/sensoryRequirement
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function sensoryRequirement($value)
    {
        $this->setProperty('sensoryRequirement', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setSensoryRequirement($value)
    {
        $this->setProperty('sensoryRequirement', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addSensoryRequirement($value)
    {
        $current = $this->getProperty('sensoryRequirement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sensoryRequirement', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getSensoryRequirement()
    {
        return $this->getProperty('sensoryRequirement');
    }
    /**
     * Contact details for further information relevant to this job posting.
     * @see https://schema.org/applicationContact
     * @param ContactPoint|array $value
     * @return $this
     */
    public function applicationContact($value)
    {
        $this->setProperty('applicationContact', $value);
        return $this;
    }

    /**
     * @param ContactPoint|array $value
     * @return $this
     */
    public function setApplicationContact($value)
    {
        $this->setProperty('applicationContact', $value);
        return $this;
    }

    /**
     * @param ContactPoint $value
     * @return $this
     */
    public function addApplicationContact($value)
    {
        $current = $this->getProperty('applicationContact');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('applicationContact', $current);
        return $this;
    }

    /**
     * @return ContactPoint|array
     */
    public function getApplicationContact()
    {
        return $this->getProperty('applicationContact');
    }
    /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     * @see https://schema.org/workHours
     * @param string|array $value
     * @return $this
     */
    public function workHours($value)
    {
        $this->setProperty('workHours', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setWorkHours($value)
    {
        $this->setProperty('workHours', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addWorkHours($value)
    {
        $current = $this->getProperty('workHours');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('workHours', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getWorkHours()
    {
        return $this->getProperty('workHours');
    }
    /**
     * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
     * @see https://schema.org/jobLocationType
     * @param string|array $value
     * @return $this
     */
    public function jobLocationType($value)
    {
        $this->setProperty('jobLocationType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setJobLocationType($value)
    {
        $this->setProperty('jobLocationType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addJobLocationType($value)
    {
        $current = $this->getProperty('jobLocationType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('jobLocationType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getJobLocationType()
    {
        return $this->getProperty('jobLocationType');
    }
    /**
     * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
     * @see https://schema.org/salaryCurrency
     * @param string|array $value
     * @return $this
     */
    public function salaryCurrency($value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSalaryCurrency($value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSalaryCurrency($value)
    {
        $current = $this->getProperty('salaryCurrency');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('salaryCurrency', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSalaryCurrency()
    {
        return $this->getProperty('salaryCurrency');
    }
    /**
     * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
     * @see https://schema.org/eligibilityToWorkRequirement
     * @param string|array $value
     * @return $this
     */
    public function eligibilityToWorkRequirement($value)
    {
        $this->setProperty('eligibilityToWorkRequirement', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEligibilityToWorkRequirement($value)
    {
        $this->setProperty('eligibilityToWorkRequirement', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEligibilityToWorkRequirement($value)
    {
        $current = $this->getProperty('eligibilityToWorkRequirement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibilityToWorkRequirement', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEligibilityToWorkRequirement()
    {
        return $this->getProperty('eligibilityToWorkRequirement');
    }
    /**
     * Description of bonus and commission compensation aspects of the job.
     * @see https://schema.org/incentives
     * @param string|array $value
     * @return $this
     */
    public function incentives($value)
    {
        $this->setProperty('incentives', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setIncentives($value)
    {
        $this->setProperty('incentives', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addIncentives($value)
    {
        $current = $this->getProperty('incentives');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('incentives', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getIncentives()
    {
        return $this->getProperty('incentives');
    }
    /**
     * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
     * @see https://schema.org/employmentUnit
     * @param Organization|array $value
     * @return $this
     */
    public function employmentUnit($value)
    {
        $this->setProperty('employmentUnit', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setEmploymentUnit($value)
    {
        $this->setProperty('employmentUnit', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addEmploymentUnit($value)
    {
        $current = $this->getProperty('employmentUnit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('employmentUnit', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getEmploymentUnit()
    {
        return $this->getProperty('employmentUnit');
    }
    /**
     * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
     * @see https://schema.org/totalJobOpenings
     * @param int|array $value
     * @return $this
     */
    public function totalJobOpenings($value)
    {
        $this->setProperty('totalJobOpenings', $value);
        return $this;
    }

    /**
     * @param int|array $value
     * @return $this
     */
    public function setTotalJobOpenings($value)
    {
        $this->setProperty('totalJobOpenings', $value);
        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addTotalJobOpenings($value)
    {
        $current = $this->getProperty('totalJobOpenings');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('totalJobOpenings', $current);
        return $this;
    }

    /**
     * @return int|array
     */
    public function getTotalJobOpenings()
    {
        return $this->getProperty('totalJobOpenings');
    }
}
