<?php
namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty;

/**
* A hospital.
* @see http://schema.org/Hospital
* @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization

*
*/
class Hospital extends MedicalOrganization
{

    /**
    * A medical service available from this provider.
    * @param MedicalTest|MedicalProcedure|MedicalTherapy|array $value
    * @return $this
    */
    public function availableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }
   /**
    * @param MedicalTest|MedicalProcedure|MedicalTherapy|array $value
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
    * A medical specialty of the provider.
    * @param MedicalSpecialty|array $value
    * @return $this
    */
    public function medicalSpecialty(?MedicalSpecialty $value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }
   /**
    * @param MedicalSpecialty|array $value
    * @return $this
    */
    public function setMedicalSpecialty(?MedicalSpecialty $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\MedicalOrganization\\Hospital','Thing\\Hospital');

