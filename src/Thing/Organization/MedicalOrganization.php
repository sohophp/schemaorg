<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty;

/**
* A medical organization (physical or not), such as hospital, institution or clinic.
* @see http://schema.org/MedicalOrganization
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class MedicalOrganization extends Organization
{

    /**
    * Name or unique ID of network. (Networks are often reused across different insurance plans).
    * @param string $value
    * @return $this
    */
    public function healthPlanNetworkId(?string $value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }

    /**
    * Whether the provider is accepting new patients.
    * @param bool $value
    * @return $this
    */
    public function isAcceptingNewPatients(?bool $value)
    {
        $this->setProperty('isAcceptingNewPatients', $value);
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\MedicalOrganization','Thing\\MedicalOrganization');

