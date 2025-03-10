<?php
namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty;

/**
* A facility, often associated with a hospital or medical school, that is
 * devoted to the specific diagnosis and/or healthcare. Previously limited to
 * outpatients but with evolution it may be open to inpatients as well.
* @see http://schema.org/MedicalClinic
* @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization
*/
class MedicalClinic extends MedicalOrganization
{


    /**
        * A medical service available from this provider.
        * @param MedicalTest|MedicalProcedure|MedicalTherapy|array|string|mixed $value
    * @return $this
    */
    public function availableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }

    /**
    * @param MedicalTest|MedicalProcedure|MedicalTherapy|array|string|mixed $value
    * @return $this
    */
    public function setAvailableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableService()
    {
       return $this->getProperty('availableService');
    }


    /**
        * A medical specialty of the provider.
        * @param MedicalSpecialty|array|string|mixed $value
    * @return $this
    */
    public function medicalSpecialty($value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }

    /**
    * @param MedicalSpecialty|array|string|mixed $value
    * @return $this
    */
    public function setMedicalSpecialty($value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMedicalSpecialty()
    {
       return $this->getProperty('medicalSpecialty');
    }


}
