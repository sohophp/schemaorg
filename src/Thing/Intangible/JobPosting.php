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
        * An estimated salary for a job posting or occupation, based on a variety of
 * variables including, but not limited to industry, job title, and location.
 * Estimated salaries  are often computed by outside organizations rather than
 * the hiring organization, who may not have committed to the estimated value.
        * @param array|string|mixed $value
    * @return $this
    */
    public function estimatedSalary($value)
    {
        $this->setProperty('estimatedSalary', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The currency (coded using [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217))
 * used for the main salary information in this job posting or for this
 * employee.
        * @param array|string|mixed $value
    * @return $this
    */
    public function salaryCurrency($value)
    {
        $this->setProperty('salaryCurrency', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The location(s) applicants can apply from. This is usually used for
 * telecommuting jobs where the applicant does not need to be in a physical
 * office. Note: This should not be used for citizenship or work visa
 * requirements.
        * @param array|string|mixed $value
    * @return $this
    */
    public function applicantLocationRequirements($value)
    {
        $this->setProperty('applicantLocationRequirements', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Publication date of an online listing.
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
        * Description of bonus and commission compensation aspects of the job.
        * @param array|string|mixed $value
    * @return $this
    */
    public function incentives($value)
    {
        $this->setProperty('incentives', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal,
 * internship).
        * @param array|string|mixed $value
    * @return $this
    */
    public function employmentType($value)
    {
        $this->setProperty('employmentType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Specific qualifications required for this role or Occupation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function qualifications($value)
    {
        $this->setProperty('qualifications', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Description of benefits associated with the job.
        * @param array|string|mixed $value
    * @return $this
    */
    public function jobBenefits($value)
    {
        $this->setProperty('jobBenefits', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A description of the job location (e.g. TELECOMMUTE for telecommute jobs).
        * @param array|string|mixed $value
    * @return $this
    */
    public function jobLocationType($value)
    {
        $this->setProperty('jobLocationType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Description of benefits associated with the job.
        * @param array|string|mixed $value
    * @return $this
    */
    public function benefits($value)
    {
        $this->setProperty('benefits', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates whether a [[JobPosting]] will accept experience (as indicated by
 * [[OccupationalExperienceRequirements]]) in place of its formal educational
 * qualifications (as indicated by [[educationRequirements]]). If true,
 * indicates that satisfying one of these requirements is sufficient.
        * @param array|string|mixed $value
    * @return $this
    */
    public function experienceInPlaceOfEducation($value)
    {
        $this->setProperty('experienceInPlaceOfEducation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Organization or Person offering the job position.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hiringOrganization($value)
    {
        $this->setProperty('hiringOrganization', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any special commitments associated with this job posting. Valid entries
 * include VeteranCommit, MilitarySpouseCommit, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function specialCommitments($value)
    {
        $this->setProperty('specialCommitments', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A statement of knowledge, skill, ability, task or any other assertion
 * expressing a competency that is either claimed by a person, an organization
 * or desired or required to fulfill a role or to work in an occupation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function skills($value)
    {
        $this->setProperty('skills', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The typical working hours for this job (e.g. 1st shift, night shift,
 * 8am-5pm).
        * @param array|string|mixed $value
    * @return $this
    */
    public function workHours($value)
    {
        $this->setProperty('workHours', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Contact details for further information relevant to this job posting.
        * @param array|string|mixed $value
    * @return $this
    */
    public function applicationContact($value)
    {
        $this->setProperty('applicationContact', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A description of the types of physical activity associated with the job.
 * Defined terms such as those in O*net may be used, but note that there is no
 * way to specify the level of ability as well as its nature when using a
 * defined term.
        * @param array|string|mixed $value
    * @return $this
    */
    public function physicalRequirement($value)
    {
        $this->setProperty('physicalRequirement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A description of any sensory requirements and levels necessary to function on
 * the job, including hearing and vision. Defined terms such as those in O*net
 * may be used, but note that there is no way to specify the level of ability as
 * well as its nature when using a defined term.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sensoryRequirement($value)
    {
        $this->setProperty('sensoryRequirement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The legal requirements such as citizenship, visa and other documentation
 * required for an applicant to this job.
        * @param array|string|mixed $value
    * @return $this
    */
    public function eligibilityToWorkRequirement($value)
    {
        $this->setProperty('eligibilityToWorkRequirement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The title of the job.
        * @param array|string|mixed $value
    * @return $this
    */
    public function title($value)
    {
        $this->setProperty('title', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A (typically single) geographic location associated with the job position.
        * @param array|string|mixed $value
    * @return $this
    */
    public function jobLocation($value)
    {
        $this->setProperty('jobLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The industry associated with the job position.
        * @param array|string|mixed $value
    * @return $this
    */
    public function industry($value)
    {
        $this->setProperty('industry', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of positions open for this job posting. Use a positive integer. Do
 * not use if the number of positions is unclear or not known.
        * @param array|string|mixed $value
    * @return $this
    */
    public function totalJobOpenings($value)
    {
        $this->setProperty('totalJobOpenings', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An indicator as to whether a position is available for an immediate start.
        * @param array|string|mixed $value
    * @return $this
    */
    public function jobImmediateStart($value)
    {
        $this->setProperty('jobImmediateStart', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Description of bonus and commission compensation aspects of the job.
        * @param array|string|mixed $value
    * @return $this
    */
    public function incentiveCompensation($value)
    {
        $this->setProperty('incentiveCompensation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates the department, unit and/or facility where the employee reports
 * and/or in which the job is to be performed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function employmentUnit($value)
    {
        $this->setProperty('employmentUnit', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Responsibilities associated with this role or Occupation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function responsibilities($value)
    {
        $this->setProperty('responsibilities', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A description of any security clearance requirements of the job.
        * @param array|string|mixed $value
    * @return $this
    */
    public function securityClearanceRequirement($value)
    {
        $this->setProperty('securityClearanceRequirement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates whether an [[url]] that is associated with a [[JobPosting]] enables
 * direct application for the job, via the posting website. A job posting is
 * considered to have directApply of [[True]] if an application process for the
 * specified job can be directly initiated via the url(s) given (noting that
 * e.g. multiple internet domains might nevertheless be involved at an
 * implementation level). A value of [[False]] is appropriate if there is no
 * clear path to applying directly online for the specified job, navigating
 * directly from the JobPosting url(s) supplied.
        * @param array|string|mixed $value
    * @return $this
    */
    public function directApply($value)
    {
        $this->setProperty('directApply', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A description of the employer, career opportunities and work environment for
 * this position.
        * @param array|string|mixed $value
    * @return $this
    */
    public function employerOverview($value)
    {
        $this->setProperty('employerOverview', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Educational background needed for the position or Occupation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationRequirements($value)
    {
        $this->setProperty('educationRequirements', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Description of skills and experience needed for the position or Occupation.
        * @param array|string|mixed $value
    * @return $this
    */
    public function experienceRequirements($value)
    {
        $this->setProperty('experienceRequirements', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A category describing the job, preferably using a term from a taxonomy such
 * as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html),
 * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
 * similar, with the property repeated for each applicable value. Ideally the
 * taxonomy should be identified, and both the textual label and formal code for
 * the category should be provided.
 * 
 * Note: for historical reasons, any textual label and formal code provided as a
 * literal may be assumed to be from O*NET-SOC.
        * @param array|string|mixed $value
    * @return $this
    */
    public function occupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The date on which a successful applicant for this job would be expected to
 * start work. Choose a specific date in the future or use the jobImmediateStart
 * property to indicate the position is to be filled as soon as possible.
        * @param array|string|mixed $value
    * @return $this
    */
    public function jobStartDate($value)
    {
        $this->setProperty('jobStartDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The base salary of the job or of an employee in an EmployeeRole.
        * @param array|string|mixed $value
    * @return $this
    */
    public function baseSalary($value)
    {
        $this->setProperty('baseSalary', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The Occupation for the JobPosting.
        * @param array|string|mixed $value
    * @return $this
    */
    public function relevantOccupation($value)
    {
        $this->setProperty('relevantOccupation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
