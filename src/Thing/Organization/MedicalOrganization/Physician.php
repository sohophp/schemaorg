<?php
namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization\Hospital;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty;

/**
* A doctor's office.
* @see http://schema.org/Physician
* @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization

*
*/
class Physician extends MedicalOrganization
{

    /**
    * A medical service available from this provider.
    * @param MedicalTest|MedicalProcedure|MedicalTherapy|array|string $value
    * @return $this
    * @deprecated use setAvailableService
    */
    public function availableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }
   /**
    * @param MedicalTest|MedicalProcedure|MedicalTherapy|array|string $value
    * @return $this
    */
    public function setAvailableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableService()
    {
       return $this->getProperty('availableService');
    }

    /**
    * A hospital with which the physician or office is affiliated.
    * @param Hospital|array|string $value
    * @return $this
    * @deprecated use setHospitalAffiliation
    */
    public function hospitalAffiliation($value)
    {
        $this->setProperty('hospitalAffiliation', $value);
        return $this;
    }
   /**
    * @param Hospital|array|string $value
    * @return $this
    */
    public function setHospitalAffiliation($value)
    {
        $this->setProperty('hospitalAffiliation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHospitalAffiliation()
    {
       return $this->getProperty('hospitalAffiliation');
    }

    /**
    * A medical specialty of the provider.
    * @param MedicalSpecialty|array|string $value
    * @return $this
    * @deprecated use setMedicalSpecialty
    */
    public function medicalSpecialty($value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }
   /**
    * @param MedicalSpecialty|array|string $value
    * @return $this
    */
    public function setMedicalSpecialty($value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMedicalSpecialty()
    {
       return $this->getProperty('medicalSpecialty');
    }


}
