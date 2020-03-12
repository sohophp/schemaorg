<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;
use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalContraindication;

/**
* Any medical intervention designed to prevent, treat, and cure human diseases and medical conditions, including both curative and palliative therapies. Medical therapies are typically processes of care relying upon pharmacotherapy, behavioral therapy, supportive therapy (with fluid or nutrition for example), or detoxification (e.g. hemodialysis) aimed at improving or preventing a health condition.
* @see http://schema.org/MedicalTherapy
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure

*
*/
class MedicalTherapy extends TherapeuticProcedure
{

    /**
    * A therapy that duplicates or overlaps this one.
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function duplicateTherapy(?MedicalTherapy $value)
    {
        $this->setProperty('duplicateTherapy', $value);
        return $this;
    }
   /**
    * @param MedicalTherapy|array $value
    * @return $this
    */
    public function setDuplicateTherapy(?MedicalTherapy $value)
    {
        $this->setProperty('duplicateTherapy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDuplicateTherapy()
    {
       return $this->getProperty('duplicateTherapy');
    }

    /**
    * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
    * @param MedicalEntity|array $value
    * @return $this
    */
    public function seriousAdverseOutcome(?MedicalEntity $value)
    {
        $this->setProperty('seriousAdverseOutcome', $value);
        return $this;
    }
   /**
    * @param MedicalEntity|array $value
    * @return $this
    */
    public function setSeriousAdverseOutcome(?MedicalEntity $value)
    {
        $this->setProperty('seriousAdverseOutcome', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeriousAdverseOutcome()
    {
       return $this->getProperty('seriousAdverseOutcome');
    }

    /**
    * A contraindication for this therapy.
    * @param MedicalContraindication|string|array $value
    * @return $this
    */
    public function contraindication($value)
    {
        $this->setProperty('contraindication', $value);
        return $this;
    }
   /**
    * @param MedicalContraindication|string|array $value
    * @return $this
    */
    public function setContraindication($value)
    {
        $this->setProperty('contraindication', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContraindication()
    {
       return $this->getProperty('contraindication');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalProcedure\\TherapeuticProcedure\\MedicalTherapy','Thing\\MedicalTherapy');

