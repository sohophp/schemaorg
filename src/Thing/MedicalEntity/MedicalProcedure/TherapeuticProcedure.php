<?php
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
    * @param Drug|array|string $value
    * @return $this
    * @deprecated use setDrug
    */
    public function drug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }
   /**
    * @param Drug|array|string $value
    * @return $this
    */
    public function setDrug($value)
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
    * @param MedicalEntity|array|string $value
    * @return $this
    * @deprecated use setAdverseOutcome
    */
    public function adverseOutcome($value)
    {
        $this->setProperty('adverseOutcome', $value);
        return $this;
    }
   /**
    * @param MedicalEntity|array|string $value
    * @return $this
    */
    public function setAdverseOutcome($value)
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
    * @param DoseSchedule|array|string $value
    * @return $this
    * @deprecated use setDoseSchedule
    */
    public function doseSchedule($value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }
   /**
    * @param DoseSchedule|array|string $value
    * @return $this
    */
    public function setDoseSchedule($value)
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
    * @param MedicalIndication|array|string $value
    * @return $this
    * @deprecated use setIndication
    */
    public function indication($value)
    {
        $this->setProperty('indication', $value);
        return $this;
    }
   /**
    * @param MedicalIndication|array|string $value
    * @return $this
    */
    public function setIndication($value)
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
