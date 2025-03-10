<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any object used in a medical capacity, such as to diagnose or treat a
 * patient.
* @see schema:MedicalDevice
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalDevice extends MedicalEntity
{


    /**
        * A possible complication and/or side effect of this therapy. If it is known
 * that an adverse outcome is serious (resulting in death, disability, or
 * permanent damage; requiring hospitalization; or otherwise life-threatening or
 * requiring immediate medical attention), tag it as a seriousAdverseOutcome
 * instead.
        * @param array|string|mixed $value
    * @return $this
    */
    public function adverseOutcome($value)
    {
        $this->setProperty('adverseOutcome', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A description of the workup, testing, and other preparations required before
 * implanting this device.
        * @param array|string|mixed $value
    * @return $this
    */
    public function preOp($value)
    {
        $this->setProperty('preOp', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A possible serious complication and/or serious side effect of this therapy.
 * Serious adverse outcomes include those that are life-threatening; result in
 * death, disability, or permanent damage; require hospitalization or prolong
 * existing hospitalization; cause congenital anomalies or birth defects; or
 * jeopardize the patient and may require medical or surgical intervention to
 * prevent one of the outcomes in this definition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function seriousAdverseOutcome($value)
    {
        $this->setProperty('seriousAdverseOutcome', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A description of the procedure involved in setting up, using, and/or
 * installing the device.
        * @param array|string|mixed $value
    * @return $this
    */
    public function procedure($value)
    {
        $this->setProperty('procedure', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A contraindication for this therapy.
        * @param array|string|mixed $value
    * @return $this
    */
    public function contraindication($value)
    {
        $this->setProperty('contraindication', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A description of the postoperative procedures, care, and/or followups for
 * this device.
        * @param array|string|mixed $value
    * @return $this
    */
    public function postOp($value)
    {
        $this->setProperty('postOp', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
