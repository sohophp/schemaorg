<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty;

/**
* A medical organization (physical or not), such as hospital, institution or clinic.
* @see http://schema.org/MedicalOrganization
* @package Sohophp\SchemaOrg\Thing\Organization

*
*/
class MedicalOrganization extends Organization
{

    /**
    * Name or unique ID of network. (Networks are often reused across different insurance plans).
    * @param string|array $value
    * @return $this
    */
    public function healthPlanNetworkId(?string $value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setHealthPlanNetworkId(?string $value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHealthPlanNetworkId()
    {
       return $this->getProperty('healthPlanNetworkId');
    }

    /**
    * Whether the provider is accepting new patients.
    * @param bool|array $value
    * @return $this
    */
    public function isAcceptingNewPatients(?bool $value)
    {
        $this->setProperty('isAcceptingNewPatients', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setIsAcceptingNewPatients(?bool $value)
    {
        $this->setProperty('isAcceptingNewPatients', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsAcceptingNewPatients()
    {
       return $this->getProperty('isAcceptingNewPatients');
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\MedicalOrganization','Thing\\MedicalOrganization');

