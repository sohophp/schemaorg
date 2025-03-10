<?php
namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicineSystem;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode\MedicalCode;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalStudy;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* The most generic type of entity related to health and the practice of
 * medicine.
* @see http://schema.org/MedicalEntity
* @package Sohophp\SchemaOrg\Thing
*/
class MedicalEntity extends Thing
{


    /**
        * The drug or supplement's legal status, including any controlled substance
 * schedules that apply.
        * @param DrugLegalStatus|string|MedicalEnumeration|array|mixed $value
    * @return $this
    */
    public function legalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
    * @param DrugLegalStatus|string|MedicalEnumeration|array|mixed $value
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
        * The system of medicine that includes this MedicalEntity, for example
 * 'evidence-based', 'homeopathic', 'chiropractic', etc.
        * @param MedicineSystem|array|string|mixed $value
    * @return $this
    */
    public function medicineSystem($value)
    {
        $this->setProperty('medicineSystem', $value);
        return $this;
    }

    /**
    * @param MedicineSystem|array|string|mixed $value
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
        * A medical guideline related to this entity.
        * @param MedicalGuideline|array|string|mixed $value
    * @return $this
    */
    public function guideline($value)
    {
        $this->setProperty('guideline', $value);
        return $this;
    }

    /**
    * @param MedicalGuideline|array|string|mixed $value
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
        * A medical code for the entity, taken from a controlled vocabulary or ontology
 * such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
        * @param MedicalCode|array|string|mixed $value
    * @return $this
    */
    public function code($value)
    {
        $this->setProperty('code', $value);
        return $this;
    }

    /**
    * @param MedicalCode|array|string|mixed $value
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
        * If applicable, a medical specialty in which this entity is relevant.
        * @param MedicalSpecialty|array|string|mixed $value
    * @return $this
    */
    public function relevantSpecialty($value)
    {
        $this->setProperty('relevantSpecialty', $value);
        return $this;
    }

    /**
    * @param MedicalSpecialty|array|string|mixed $value
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
        * A medical study or trial related to this entity.
        * @param MedicalStudy|array|string|mixed $value
    * @return $this
    */
    public function study($value)
    {
        $this->setProperty('study', $value);
        return $this;
    }

    /**
    * @param MedicalStudy|array|string|mixed $value
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
        * If applicable, the organization that officially recognizes this entity as
 * part of its endorsed system of medicine.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function recognizingAuthority($value)
    {
        $this->setProperty('recognizingAuthority', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
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
