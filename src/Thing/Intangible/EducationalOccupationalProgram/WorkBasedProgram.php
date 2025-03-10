<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\EducationalOccupationalProgram;

use Sohophp\SchemaOrg\Thing\Intangible\EducationalOccupationalProgram;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValueDistribution\MonetaryAmountDistribution;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
* A program with both an educational and employment component. Typically based
 * at a workplace and structured around work-based learning, with the aim of
 * instilling competencies related to an occupation. WorkBasedProgram is used to
 * distinguish programs such as apprenticeships from school, college or other
 * classroom based educational programs.
* @see http://schema.org/WorkBasedProgram
* @package Sohophp\SchemaOrg\Thing\Intangible\EducationalOccupationalProgram
*/
class WorkBasedProgram extends EducationalOccupationalProgram
{


    /**
        * The estimated salary earned while in the program.
        * @param MonetaryAmountDistribution|array|string|mixed $value
    * @return $this
    */
    public function trainingSalary($value)
    {
        $this->setProperty('trainingSalary', $value);
        return $this;
    }

    /**
    * @param MonetaryAmountDistribution|array|string|mixed $value
    * @return $this
    */
    public function setTrainingSalary($value)
    {
        $this->setProperty('trainingSalary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrainingSalary()
    {
       return $this->getProperty('trainingSalary');
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


}
