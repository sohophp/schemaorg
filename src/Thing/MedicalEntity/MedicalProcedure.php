<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\EventStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalStudyStatus;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIndication;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalProcedureType;

/**
* A process of care used in either a diagnostic, therapeutic, preventive or palliative capacity that relies on invasive (surgical), non-invasive, or other techniques.
* @see http://schema.org/MedicalProcedure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalProcedure extends MedicalEntity
{

    /**
    * Typical preparation that a patient must undergo before having the procedure performed.
    * @param MedicalEntity|string $value
    * @return $this
    */
    public function preparation($value)
    {
        $this->setProperty('preparation', $value);
        return $this;
    }

    /**
    * Typical or recommended followup care after the procedure is performed.
    * @param string $value
    * @return $this
    */
    public function followup(?string $value)
    {
        $this->setProperty('followup', $value);
        return $this;
    }

    /**
    * The status of the study (enumerated).
    * @param EventStatusType|string|MedicalStudyStatus $value
    * @return $this
    */
    public function status($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
    * How the procedure is performed.
    * @param string $value
    * @return $this
    */
    public function howPerformed(?string $value)
    {
        $this->setProperty('howPerformed', $value);
        return $this;
    }

    /**
    * Expected or actual outcomes of the study.
    * @param MedicalEntity|string $value
    * @return $this
    */
    public function outcome($value)
    {
        $this->setProperty('outcome', $value);
        return $this;
    }

    /**
    * Location in the body of the anatomical structure.
    * @param string $value
    * @return $this
    */
    public function bodyLocation(?string $value)
    {
        $this->setProperty('bodyLocation', $value);
        return $this;
    }

    /**
    * A factor that indicates use of this therapy for treatment and/or prevention of a condition, symptom, etc. For therapies such as drugs, indications can include both officially-approved indications as well as off-label uses. These can be distinguished by using the ApprovedIndication subtype of MedicalIndication.
    * @param MedicalIndication $value
    * @return $this
    */
    public function indication(?MedicalIndication $value)
    {
        $this->setProperty('indication', $value);
        return $this;
    }

    /**
    * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
    * @param MedicalProcedureType $value
    * @return $this
    */
    public function procedureType(?MedicalProcedureType $value)
    {
        $this->setProperty('procedureType', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalProcedure','Thing\\MedicalProcedure');

