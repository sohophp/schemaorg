<?php declare(strict_types=1);
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
*/
class Hospital extends MedicalOrganization
{

    /**
    * A medical service available from this provider.
    * @param MedicalTest|MedicalProcedure|MedicalTherapy $value
    * @return $this
    */
    public function availableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }

    /**
    * A medical specialty of the provider.
    * @param MedicalSpecialty $value
    * @return $this
    */
    public function medicalSpecialty(?MedicalSpecialty $value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\MedicalOrganization\\Hospital','Thing\\Hospital');

