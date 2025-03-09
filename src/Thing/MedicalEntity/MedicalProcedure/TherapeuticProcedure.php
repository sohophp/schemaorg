<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;

/**
* A medical procedure intended primarily for therapeutic purposes, aimed at improving a health condition.
* @see schema:TherapeuticProcedure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure
*/
class TherapeuticProcedure extends MedicalProcedure
{
   /**
        * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
        */
    protected $adverseOutcome = null;

   /**
        * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
        */
    protected $doseSchedule = null;

   /**
        * Specifying a drug or medicine used in a medication procedure.
        */
    protected $drug = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setAdverseOutcome($value)
    {
        $this->setProperty('adverseOutcome', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdverseOutcome()
    {
       return $this->getProperty('adverseOutcome');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDoseSchedule($value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDoseSchedule()
    {
       return $this->getProperty('doseSchedule');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDrug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDrug()
    {
       return $this->getProperty('drug');
    }


}
