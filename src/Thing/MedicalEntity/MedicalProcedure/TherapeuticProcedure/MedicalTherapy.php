<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;

/**
* Any medical intervention designed to prevent, treat, and cure human diseases and medical conditions, including both curative and palliative therapies. Medical therapies are typically processes of care relying upon pharmacotherapy, behavioral therapy, supportive therapy (with fluid or nutrition for example), or detoxification (e.g. hemodialysis) aimed at improving or preventing a health condition.
* @see schema:MedicalTherapy
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure
*/
class MedicalTherapy extends TherapeuticProcedure
{
   /**
        * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
        */
    protected $seriousAdverseOutcome = null;

   /**
        * A contraindication for this therapy.
        */
    protected $contraindication = null;

   /**
        * A therapy that duplicates or overlaps this one.
        */
    protected $duplicateTherapy = null;


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
    public function setDuplicateTherapy($value)
    {
        $this->setProperty('duplicateTherapy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDuplicateTherapy()
    {
       return $this->getProperty('duplicateTherapy');
    }


}
