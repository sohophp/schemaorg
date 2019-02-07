<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Organization;
/**
* A listing that describes a job opening in a certain organization.
* @see http://schema.org/JobPosting
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class JobPosting extends Intangible
{

     
     /**
     * A (typically single) geographic location associated with the job position.
     * @param Place $value
     * @return $this
     */

     public function jobLocation(?Place $value):self
     {
        $this->setProperty("jobLocation",$value);
        return $this;
     }

     
     /**
     * Description of benefits associated with the job.
     * @param string $value
     * @return $this
     */

     public function benefits(?string $value):self
     {
        $this->setProperty("benefits",$value);
        return $this;
     }

     
     /**
     * Specific qualifications required for this role.
     * @param string $value
     * @return $this
     */

     public function qualifications(?string $value):self
     {
        $this->setProperty("qualifications",$value);
        return $this;
     }

     
     /**
     * Description of bonus and commission compensation aspects of the job.
     * @param string $value
     * @return $this
     */

     public function incentiveCompensation(?string $value):self
     {
        $this->setProperty("incentiveCompensation",$value);
        return $this;
     }

     
     /**
     * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
     * @param string $value
     * @return $this
     */

     public function workHours(?string $value):self
     {
        $this->setProperty("workHours",$value);
        return $this;
     }

     
     /**
     * The currency (coded using <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a> ) used for the main salary information in this job posting or for this employee.
     * @param string $value
     * @return $this
     */

     public function salaryCurrency(?string $value):self
     {
        $this->setProperty("salaryCurrency",$value);
        return $this;
     }

     
     /**
     * Description of benefits associated with the job.
     * @param string $value
     * @return $this
     */

     public function jobBenefits(?string $value):self
     {
        $this->setProperty("jobBenefits",$value);
        return $this;
     }

     
     /**
     * Publication date for the job posting.
     * @param  $value
     * @return $this
     */

     public function datePosted( $value):self
     {
        $this->setProperty("datePosted",$value);
        return $this;
     }

     
     /**
     * Skills required to fulfill this role.
     * @param string $value
     * @return $this
     */

     public function skills(?string $value):self
     {
        $this->setProperty("skills",$value);
        return $this;
     }

     
     /**
     * Description of bonus and commission compensation aspects of the job.
     * @param string $value
     * @return $this
     */

     public function incentives(?string $value):self
     {
        $this->setProperty("incentives",$value);
        return $this;
     }

     
     /**
     * Educational background needed for the position.
     * @param string $value
     * @return $this
     */

     public function educationRequirements(?string $value):self
     {
        $this->setProperty("educationRequirements",$value);
        return $this;
     }

     
     /**
     * Responsibilities associated with this role.
     * @param string $value
     * @return $this
     */

     public function responsibilities(?string $value):self
     {
        $this->setProperty("responsibilities",$value);
        return $this;
     }

     
     /**
     * The base salary of the job or of an employee in an EmployeeRole.
     * @param MonetaryAmount|PriceSpecification $value
     * @return $this
     */

     public function baseSalary( $value):self
     {
        $this->setProperty("baseSalary",$value);
        return $this;
     }

     
     /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     * @param  $value
     * @return $this
     */

     public function validThrough( $value):self
     {
        $this->setProperty("validThrough",$value);
        return $this;
     }

     
     /**
     * Organization offering the job position.
     * @param Organization $value
     * @return $this
     */

     public function hiringOrganization(?Organization $value):self
     {
        $this->setProperty("hiringOrganization",$value);
        return $this;
     }

     
     /**
     * Any special commitments associated with this job posting. Valid entries include VeteranCommit, MilitarySpouseCommit, etc.
     * @param string $value
     * @return $this
     */

     public function specialCommitments(?string $value):self
     {
        $this->setProperty("specialCommitments",$value);
        return $this;
     }

     
     /**
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy: http://www.onetcenter.org/taxonomy.html. Ideally includes textual label and formal code, with the property repeated for each applicable value.
     * @param string $value
     * @return $this
     */

     public function occupationalCategory(?string $value):self
     {
        $this->setProperty("occupationalCategory",$value);
        return $this;
     }

     
     /**
     * Description of skills and experience needed for the position.
     * @param string $value
     * @return $this
     */

     public function experienceRequirements(?string $value):self
     {
        $this->setProperty("experienceRequirements",$value);
        return $this;
     }

     
     /**
     * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
     * @param string $value
     * @return $this
     */

     public function employmentType(?string $value):self
     {
        $this->setProperty("employmentType",$value);
        return $this;
     }

     
     /**
     * The title of the job.
     * @param string $value
     * @return $this
     */

     public function title(?string $value):self
     {
        $this->setProperty("title",$value);
        return $this;
     }

     
     /**
     * The industry associated with the job position.
     * @param string $value
     * @return $this
     */

     public function industry(?string $value):self
     {
        $this->setProperty("industry",$value);
        return $this;
     }

     
}
