<?php declare(strict_types=1);
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
    * The region/country for which this occupational description is appropriate. Note that educational requirements and qualifications can vary between jurisdictions.
    * @param AdministrativeArea $value
    * @return $this
    */
    public function occupationLocation(?AdministrativeArea $value)
    {
        $this->setProperty('occupationLocation', $value);
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
    * An estimated salary for a job posting or occupation, based on a variety of variables including, but not limited to industry, job title, and location. Estimated salaries  are often computed by outside organizations rather than the hiring organization, who may not have committed to the estimated value.
    * @param MonetaryAmountDistribution|MonetaryAmount $value
    * @return $this
    */
    public function estimatedSalary($value)
    {
        $this->setProperty('estimatedSalary', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Occupation','Thing\\Occupation');

