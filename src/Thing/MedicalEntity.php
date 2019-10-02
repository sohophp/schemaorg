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
*/
class MedicalEntity extends Thing
{

    /**
    * The drug or supplement's legal status, including any controlled substance schedules that apply.
    * @param DrugLegalStatus|string|MedicalEnumeration $value
    * @return $this
    */
    public function legalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
    * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
    * @param MedicineSystem $value
    * @return $this
    */
    public function medicineSystem(?MedicineSystem $value)
    {
        $this->setProperty('medicineSystem', $value);
        return $this;
    }

    /**
    * A medical guideline related to this entity.
    * @param MedicalGuideline $value
    * @return $this
    */
    public function guideline(?MedicalGuideline $value)
    {
        $this->setProperty('guideline', $value);
        return $this;
    }

    /**
    * A medical code for the entity, taken from a controlled vocabulary or ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
    * @param MedicalCode $value
    * @return $this
    */
    public function code(?MedicalCode $value)
    {
        $this->setProperty('code', $value);
        return $this;
    }

    /**
    * If applicable, a medical specialty in which this entity is relevant.
    * @param MedicalSpecialty $value
    * @return $this
    */
    public function relevantSpecialty(?MedicalSpecialty $value)
    {
        $this->setProperty('relevantSpecialty', $value);
        return $this;
    }

    /**
    * A medical study or trial related to this entity.
    * @param MedicalStudy $value
    * @return $this
    */
    public function study(?MedicalStudy $value)
    {
        $this->setProperty('study', $value);
        return $this;
    }

    /**
    * If applicable, the organization that officially recognizes this entity as part of its endorsed system of medicine.
    * @param Organization $value
    * @return $this
    */
    public function recognizingAuthority(?Organization $value)
    {
        $this->setProperty('recognizingAuthority', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity','Thing\\MedicalEntity');

