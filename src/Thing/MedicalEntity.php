<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
* The most generic type of entity related to health and the practice of medicine.
* @see schema:MedicalEntity
* @package Sohophp\SchemaOrg\Thing
*/
class MedicalEntity extends Thing
{
   /**
        * A medical guideline related to this entity.
        */
    protected $guideline = null;

   /**
        * A [[Grant]] that directly or indirectly provide funding or sponsorship for this item. See also [[ownershipFundingInfo]].
        */
    protected $funding = null;

   /**
        * The drug or supplement's legal status, including any controlled substance schedules that apply.
        */
    protected $legalStatus = null;

   /**
        * If applicable, a medical specialty in which this entity is relevant.
        */
    protected $relevantSpecialty = null;

   /**
        * A medical study or trial related to this entity.
        */
    protected $study = null;

   /**
        * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
        */
    protected $code = null;

   /**
        * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
        */
    protected $medicineSystem = null;

   /**
        * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
        */
    protected $recognizingAuthority = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setGuideline($value)
    {
        $this->setProperty('guideline', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGuideline()
    {
       return $this->getProperty('guideline');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setFunding($value)
    {
        $this->setProperty('funding', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFunding()
    {
       return $this->getProperty('funding');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLegalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLegalStatus()
    {
       return $this->getProperty('legalStatus');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRelevantSpecialty($value)
    {
        $this->setProperty('relevantSpecialty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRelevantSpecialty()
    {
       return $this->getProperty('relevantSpecialty');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setStudy($value)
    {
        $this->setProperty('study', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStudy()
    {
       return $this->getProperty('study');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCode($value)
    {
        $this->setProperty('code', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCode()
    {
       return $this->getProperty('code');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMedicineSystem($value)
    {
        $this->setProperty('medicineSystem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMedicineSystem()
    {
       return $this->getProperty('medicineSystem');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setRecognizingAuthority($value)
    {
        $this->setProperty('recognizingAuthority', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecognizingAuthority()
    {
       return $this->getProperty('recognizingAuthority');
    }


}
