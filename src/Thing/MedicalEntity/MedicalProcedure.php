<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* A process of care used in either a diagnostic, therapeutic, preventive or palliative capacity that relies on invasive (surgical), non-invasive, or other techniques.
* @see schema:MedicalProcedure
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalProcedure extends MedicalEntity
{
   /**
        * Typical preparation that a patient must undergo before having the procedure performed.
        */
    protected $preparation = null;

   /**
        * How the procedure is performed.
        */
    protected $howPerformed = null;

   /**
        * Typical or recommended followup care after the procedure is performed.
        */
    protected $followup = null;

   /**
        * The status of the study (enumerated).
        */
    protected $status = null;

   /**
        * The type of procedure, for example Surgical, Noninvasive, or Percutaneous.
        */
    protected $procedureType = null;

   /**
        * Location in the body of the anatomical structure.
        */
    protected $bodyLocation = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPreparation($value)
    {
        $this->setProperty('preparation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPreparation()
    {
       return $this->getProperty('preparation');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHowPerformed($value)
    {
        $this->setProperty('howPerformed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHowPerformed()
    {
       return $this->getProperty('howPerformed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFollowup($value)
    {
        $this->setProperty('followup', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFollowup()
    {
       return $this->getProperty('followup');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStatus($value)
    {
        $this->setProperty('status', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStatus()
    {
       return $this->getProperty('status');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProcedureType($value)
    {
        $this->setProperty('procedureType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProcedureType()
    {
       return $this->getProperty('procedureType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBodyLocation($value)
    {
        $this->setProperty('bodyLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBodyLocation()
    {
       return $this->getProperty('bodyLocation');
    }


}
