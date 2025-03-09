<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A profession, may involve prolonged training and/or a formal qualification.
* @see schema:Occupation
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Occupation extends Intangible
{
   /**
        * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
        */
    protected $estimatedSalary = null;

   /**
        * Specific qualifications required for this role or Occupation.
        */
    protected $qualifications = null;

   /**
        * A statement of knowledge, skill, ability, task or any other assertion expressing a competency that is either claimed by a person, an organization or desired or required to fulfill a role or to work in an occupation.
        */
    protected $skills = null;

   /**
        *  The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
        */
    protected $occupationLocation = null;

   /**
        * Responsibilities associated with this role or Occupation.
        */
    protected $responsibilities = null;

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


}
