<?php declare(strict_types=1);
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
* The most generic type of entity related to health and the practice of medicine.
* @see http://schema.org/MedicalEntity
* @package Sohophp\SchemaOrg\Thing

*
*/
class MedicalEntity extends Thing
{

    /**
    * The drug or supplement's legal status, including any controlled substance schedules that apply.
    * @param DrugLegalStatus|string|MedicalEnumeration|array $value
    * @return $this
    */
    public function legalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }
   /**
    * @param DrugLegalStatus|string|MedicalEnumeration|array $value
    * @return $this
    */
    public function setLegalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLegalStatus()
    {
       return $this->getProperty('legalStatus');
    }

    /**
    * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
    * @param MedicineSystem|array $value
    * @return $this
    */
    public function medicineSystem(?MedicineSystem $value)
    {
        $this->setProperty('medicineSystem', $value);
        return $this;
    }
   /**
    * @param MedicineSystem|array $value
    * @return $this
    */
    public function setMedicineSystem(?MedicineSystem $value)
    {
        $this->setProperty('medicineSystem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMedicineSystem()
    {
       return $this->getProperty('medicineSystem');
    }

    /**
    * A medical guideline related to this entity.
    * @param MedicalGuideline|array $value
    * @return $this
    */
    public function guideline(?MedicalGuideline $value)
    {
        $this->setProperty('guideline', $value);
        return $this;
    }
   /**
    * @param MedicalGuideline|array $value
    * @return $this
    */
    public function setGuideline(?MedicalGuideline $value)
    {
        $this->setProperty('guideline', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGuideline()
    {
       return $this->getProperty('guideline');
    }

    /**
    * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
    * @param MedicalCode|array $value
    * @return $this
    */
    public function code(?MedicalCode $value)
    {
        $this->setProperty('code', $value);
        return $this;
    }
   /**
    * @param MedicalCode|array $value
    * @return $this
    */
    public function setCode(?MedicalCode $value)
    {
        $this->setProperty('code', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCode()
    {
       return $this->getProperty('code');
    }

    /**
    * If applicable, a medical specialty in which this entity is relevant.
    * @param MedicalSpecialty|array $value
    * @return $this
    */
    public function relevantSpecialty(?MedicalSpecialty $value)
    {
        $this->setProperty('relevantSpecialty', $value);
        return $this;
    }
   /**
    * @param MedicalSpecialty|array $value
    * @return $this
    */
    public function setRelevantSpecialty(?MedicalSpecialty $value)
    {
        $this->setProperty('relevantSpecialty', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRelevantSpecialty()
    {
       return $this->getProperty('relevantSpecialty');
    }

    /**
    * A medical study or trial related to this entity.
    * @param MedicalStudy|array $value
    * @return $this
    */
    public function study(?MedicalStudy $value)
    {
        $this->setProperty('study', $value);
        return $this;
    }
   /**
    * @param MedicalStudy|array $value
    * @return $this
    */
    public function setStudy(?MedicalStudy $value)
    {
        $this->setProperty('study', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStudy()
    {
       return $this->getProperty('study');
    }

    /**
    * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
    * @param Organization|array $value
    * @return $this
    */
    public function recognizingAuthority(?Organization $value)
    {
        $this->setProperty('recognizingAuthority', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setRecognizingAuthority(?Organization $value)
    {
        $this->setProperty('recognizingAuthority', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRecognizingAuthority()
    {
       return $this->getProperty('recognizingAuthority');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity','Thing\\MedicalEntity');

