<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A listing that describes a job opening in a certain organization.
* @see schema:JobPosting
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class JobPosting extends Intangible
{
   /**
        * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
        */
    protected $estimatedSalary = null;

   /**
        * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary information in this job posting or for this employee.
        */
    protected $salaryCurrency = null;

   /**
        * The location(s) applicants can apply from. This is usually used for telecommuting jobs where the applicant does not need to be in a physical office. Note: This should not be used for citizenship or work visa requirements.
        */
    protected $applicantLocationRequirements = null;

   /**
        * Publication date of an online listing.
        */
    protected $datePosted = null;

   /**
        * Description of bonus and commission compensation aspects of the job.
        */
    protected $incentives = null;

   /**
        * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
        */
    protected $employmentType = null;

   /**
        * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
        */
    protected $validThrough = null;

   /**
        * Specific qualifications required for this role or Occupation.
        */
    protected $qualifications = null;

   /**
        * Description of benefits associated with the job.
        */
    protected $jobBenefits = null;

   /**
        * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
        */
    protected $jobLocationType = null;

   /**
        * Description of benefits associated with the job.
        */
    protected $benefits = null;

   /**
        * Indicates whether a [[JobPosting]] will accept experience (as indicated by [[OccupationalExperienceRequirements]]) in place of its formal educational qualifications (as indicated by [[educationRequirements]]). If true, indicates that satisfying one of these requirements is sufficient.
        */
    protected $experienceInPlaceOfEducation = null;

   /**
        * Organization or Person offering the job position.
        */
    protected $hiringOrganization = null;

   /**
        * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
        */
    protected $specialCommitments = null;

   /**
        * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
        */
    protected $skills = null;

   /**
        * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
        */
    protected $workHours = null;

   /**
        * Contact details for further information relevant to this job posting.
        */
    protected $applicationContact = null;

   /**
        * A description of the types of physical activity associated with the job. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
        */
    protected $physicalRequirement = null;

   /**
        * A description of any sensory requirements and levels necessary to function on the job, including hearing and vision. Defined terms such as those in O*net may be used, but note that there is no way to specify the level of ability as well as its nature when using a defined term.
        */
    protected $sensoryRequirement = null;

   /**
        * The legal requirements such as citizenship, visa and other documentation required for an applicant to this job.
        */
    protected $eligibilityToWorkRequirement = null;

   /**
        * The title of the job.
        */
    protected $title = null;

   /**
        * A (typically single) geographic location associated with the job position.
        */
    protected $jobLocation = null;

   /**
        * The industry associated with the job position.
        */
    protected $industry = null;

   /**
        * The number of positions open for this job posting. Use a positive integer. Do not use if the number of positions is unclear or not known.
        */
    protected $totalJobOpenings = null;

   /**
        * An indicator as to whether a position is available for an immediate start.
        */
    protected $jobImmediateStart = null;

   /**
        * Description of bonus and commission compensation aspects of the job.
        */
    protected $incentiveCompensation = null;

   /**
        * Indicates the department, unit and/or facility where the employee reports and/or in which the job is to be performed.
        */
    protected $employmentUnit = null;

   /**
        * Responsibilities associated with this role or Occupation.
        */
    protected $responsibilities = null;

   /**
        * A description of any security clearance requirements of the job.
        */
    protected $securityClearanceRequirement = null;

   /**
        * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables direct application for the job, via the posting website. A job posting is considered to have directApply of [[True]] if an application process for the specified job can be directly initiated via the url(s) given (noting that e.g. multiple internet domains might nevertheless be involved at an implementation level). A value of [[False]] is appropriate if there is no clear path to applying directly online for the specified job, navigating directly from the JobPosting url(s) supplied.
        */
    protected $directApply = null;

   /**
        * A description of the employer, career opportunities and work environment for this position.
        */
    protected $employerOverview = null;

   /**
        * Educational background needed for the position or Occupation.
        */
    protected $educationRequirements = null;

   /**
        * Description of skills and experience needed for the position or Occupation.
        */
    protected $experienceRequirements = null;

   /**
        * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
        */
    protected $occupationalCategory = null;

   /**
        * The date on which a successful applicant for this job would be expected to start work. Choose a specific date in the future or use the jobImmediateStart property to indicate the position is to be filled as soon as possible.
        */
    protected $jobStartDate = null;

   /**
        * The base salary of the job or of an employee in an EmployeeRole.
        */
    protected $baseSalary = null;

   /**
        * The Occupation for the JobPosting.
        */
    protected $relevantOccupation = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setExperienceInPlaceOfEducation($value)
    {
        $this->setProperty('experienceInPlaceOfEducation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExperienceInPlaceOfEducation()
    {
       return $this->getProperty('experienceInPlaceOfEducation');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setApplicationContact($value)
    {
        $this->setProperty('applicationContact', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicationContact()
    {
       return $this->getProperty('applicationContact');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPhysicalRequirement($value)
    {
        $this->setProperty('physicalRequirement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPhysicalRequirement()
    {
       return $this->getProperty('physicalRequirement');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSensoryRequirement($value)
    {
        $this->setProperty('sensoryRequirement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSensoryRequirement()
    {
       return $this->getProperty('sensoryRequirement');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEligibilityToWorkRequirement($value)
    {
        $this->setProperty('eligibilityToWorkRequirement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibilityToWorkRequirement()
    {
       return $this->getProperty('eligibilityToWorkRequirement');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTotalJobOpenings($value)
    {
        $this->setProperty('totalJobOpenings', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTotalJobOpenings()
    {
       return $this->getProperty('totalJobOpenings');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setEmploymentUnit($value)
    {
        $this->setProperty('employmentUnit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmploymentUnit()
    {
       return $this->getProperty('employmentUnit');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setSecurityClearanceRequirement($value)
    {
        $this->setProperty('securityClearanceRequirement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSecurityClearanceRequirement()
    {
       return $this->getProperty('securityClearanceRequirement');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDirectApply($value)
    {
        $this->setProperty('directApply', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirectApply()
    {
       return $this->getProperty('directApply');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEmployerOverview($value)
    {
        $this->setProperty('employerOverview', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEmployerOverview()
    {
       return $this->getProperty('employerOverview');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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


}
