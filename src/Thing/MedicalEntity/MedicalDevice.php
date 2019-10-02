<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIndication;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalDevicePurpose;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalContraindication;

/**
* Any object used in a medical capacity, such as to diagnose or treat a patient.
* @see http://schema.org/MedicalDevice
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalDevice extends MedicalEntity
{

    /**
    * A description of the postoperative procedures, care, and/or followups for this device.
    * @param string $value
    * @return $this
    */
    public function postOp(?string $value)
    {
        $this->setProperty('postOp', $value);
        return $this;
    }

    /**
    * A description of the procedure involved in setting up, using, and/or installing the device.
    * @param string $value
    * @return $this
    */
    public function procedure(?string $value)
    {
        $this->setProperty('procedure', $value);
        return $this;
    }

    /**
    * A possible complication and/or side effect of this therapy. If it is known that an adverse outcome is serious (resulting in death, disability, or permanent damage; requiring hospitalization; or is otherwise life-threatening or requires immediate medical attention), tag it as a seriouseAdverseOutcome instead.
    * @param MedicalEntity $value
    * @return $this
    */
    public function adverseOutcome(?MedicalEntity $value)
    {
        $this->setProperty('adverseOutcome', $value);
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
    * A goal towards an action is taken. Can be concrete or abstract.
    * @param MedicalDevicePurpose|Thing $value
    * @return $this
    */
    public function purpose($value)
    {
        $this->setProperty('purpose', $value);
        return $this;
    }

    /**
    * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
    * @param MedicalEntity $value
    * @return $this
    */
    public function seriousAdverseOutcome(?MedicalEntity $value)
    {
        $this->setProperty('seriousAdverseOutcome', $value);
        return $this;
    }

    /**
    * A contraindication for this therapy.
    * @param MedicalContraindication|string $value
    * @return $this
    */
    public function contraindication($value)
    {
        $this->setProperty('contraindication', $value);
        return $this;
    }

    /**
    * A description of the workup, testing, and other preparations required before implanting this device.
    * @param string $value
    * @return $this
    */
    public function preOp(?string $value)
    {
        $this->setProperty('preOp', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalDevice','Thing\\MedicalDevice');

