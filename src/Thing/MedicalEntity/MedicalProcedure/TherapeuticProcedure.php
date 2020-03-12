<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance\Drug;
use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIndication;

/**
* A medical procedure intended primarily for therapeutic purposes, aimed at improving a health condition.
* @see http://schema.org/TherapeuticProcedure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure

*
*/
class TherapeuticProcedure extends MedicalProcedure
{

    /**
    * Specifying a drug or medicine used in a medication procedure
    * @param Drug|array $value
    * @return $this
    */
    public function drug(?Drug $value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }
   /**
    * @param Drug|array $value
    * @return $this
    */
    public function setDrug(?Drug $value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDrug()
    {
       return $this->getProperty('drug');
    }

    /**
    * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
    * @param MedicalEntity|array $value
    * @return $this
    */
    public function adverseOutcome(?MedicalEntity $value)
    {
        $this->setProperty('adverseOutcome', $value);
        return $this;
    }
   /**
    * @param MedicalEntity|array $value
    * @return $this
    */
    public function setAdverseOutcome(?MedicalEntity $value)
    {
        $this->setProperty('adverseOutcome', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAdverseOutcome()
    {
       return $this->getProperty('adverseOutcome');
    }

    /**
    * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
    * @param DoseSchedule|array $value
    * @return $this
    */
    public function doseSchedule(?DoseSchedule $value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }
   /**
    * @param DoseSchedule|array $value
    * @return $this
    */
    public function setDoseSchedule(?DoseSchedule $value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDoseSchedule()
    {
       return $this->getProperty('doseSchedule');
    }

    /**
    * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
    * @param MedicalIndication|array $value
    * @return $this
    */
    public function indication(?MedicalIndication $value)
    {
        $this->setProperty('indication', $value);
        return $this;
    }
   /**
    * @param MedicalIndication|array $value
    * @return $this
    */
    public function setIndication(?MedicalIndication $value)
    {
        $this->setProperty('indication', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIndication()
    {
       return $this->getProperty('indication');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalProcedure\\TherapeuticProcedure','Thing\\TherapeuticProcedure');

