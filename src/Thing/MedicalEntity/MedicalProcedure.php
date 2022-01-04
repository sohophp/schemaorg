<?php
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

*
*/
class MedicalProcedure extends MedicalEntity
{

    /**
    * Typical preparation that a patient must undergo before having the procedure performed.
    * @param MedicalEntity|string|array $value
    * @return $this
    * @deprecated use setPreparation
    */
    public function preparation($value)
    {
        $this->setProperty('preparation', $value);
        return $this;
    }
   /**
    * @param MedicalEntity|string|array $value
    * @return $this
    */
    public function setPreparation($value)
    {
        $this->setProperty('preparation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPreparation()
    {
       return $this->getProperty('preparation');
    }

    /**
    * Typical or recommended followup care after the procedure is performed.
    * @param string|array $value
    * @return $this
    * @deprecated use setFollowup
    */
    public function followup($value)
    {
        $this->setProperty('followup', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFollowup($value)
    {
        $this->setProperty('followup', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFollowup()
    {
       return $this->getProperty('followup');
    }

    /**
    * The status of the study (enumerated).
    * @param EventStatusType|string|MedicalStudyStatus|array $value
    * @return $this
    * @deprecated use setStatus
    */
    public function status($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }
   /**
    * @param EventStatusType|string|MedicalStudyStatus|array $value
    * @return $this
    */
    public function setStatus($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStatus()
    {
       return $this->getProperty('status');
    }

    /**
    * How the procedure is performed.
    * @param string|array $value
    * @return $this
    * @deprecated use setHowPerformed
    */
    public function howPerformed($value)
    {
        $this->setProperty('howPerformed', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHowPerformed($value)
    {
        $this->setProperty('howPerformed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHowPerformed()
    {
       return $this->getProperty('howPerformed');
    }

    /**
    * Expected or actual outcomes of the study.
    * @param MedicalEntity|string|array $value
    * @return $this
    * @deprecated use setOutcome
    */
    public function outcome($value)
    {
        $this->setProperty('outcome', $value);
        return $this;
    }
   /**
    * @param MedicalEntity|string|array $value
    * @return $this
    */
    public function setOutcome($value)
    {
        $this->setProperty('outcome', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOutcome()
    {
       return $this->getProperty('outcome');
    }

    /**
    * Location in the body of the anatomical structure.
    * @param string|array $value
    * @return $this
    * @deprecated use setBodyLocation
    */
    public function bodyLocation($value)
    {
        $this->setProperty('bodyLocation', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setBodyLocation($value)
    {
        $this->setProperty('bodyLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBodyLocation()
    {
       return $this->getProperty('bodyLocation');
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

    /**
    * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
    * @param MedicalProcedureType|array|string $value
    * @return $this
    * @deprecated use setProcedureType
    */
    public function procedureType($value)
    {
        $this->setProperty('procedureType', $value);
        return $this;
    }
   /**
    * @param MedicalProcedureType|array|string $value
    * @return $this
    */
    public function setProcedureType($value)
    {
        $this->setProperty('procedureType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProcedureType()
    {
       return $this->getProperty('procedureType');
    }


}
