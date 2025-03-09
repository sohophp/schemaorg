<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any object used in a medical capacity, such as to diagnose or treat a patient.
* @see schema:MedicalDevice
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalDevice extends MedicalEntity
{
   /**
        * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or otherwise life-threatening or requiring immediate medical attention), tag it as a seriousAdverseOutcome instead.
        */
    protected $adverseOutcome = null;

   /**
        * A description of the workup, testing, and other preparations required before implanting this device.
        */
    protected $preOp = null;

   /**
        * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
        */
    protected $seriousAdverseOutcome = null;

   /**
        * A description of the procedure involved in setting up, using, and/or installing the device.
        */
    protected $procedure = null;

   /**
        * A contraindication for this therapy.
        */
    protected $contraindication = null;

   /**
        * A description of the postoperative procedures, care, and/or followups for this device.
        */
    protected $postOp = null;


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
    public function setPreOp($value)
    {
        $this->setProperty('preOp', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPreOp()
    {
       return $this->getProperty('preOp');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSeriousAdverseOutcome($value)
    {
        $this->setProperty('seriousAdverseOutcome', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeriousAdverseOutcome()
    {
       return $this->getProperty('seriousAdverseOutcome');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setProcedure($value)
    {
        $this->setProperty('procedure', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProcedure()
    {
       return $this->getProperty('procedure');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setContraindication($value)
    {
        $this->setProperty('contraindication', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContraindication()
    {
       return $this->getProperty('contraindication');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPostOp($value)
    {
        $this->setProperty('postOp', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPostOp()
    {
       return $this->getProperty('postOp');
    }


}
