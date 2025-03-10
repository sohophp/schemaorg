<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty\MedicalSpecialty;

/**
* A medical organization (physical or not), such as hospital, institution or
 * clinic.
* @see http://schema.org/MedicalOrganization
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class MedicalOrganization extends Organization
{


    /**
        * Name or unique ID of network. (Networks are often reused across different
 * insurance plans).
        * @param string|array|mixed $value
    * @return $this
    */
    public function healthPlanNetworkId($value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setHealthPlanNetworkId($value)
    {
        $this->setProperty('healthPlanNetworkId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthPlanNetworkId()
    {
       return $this->getProperty('healthPlanNetworkId');
    }


    /**
        * Whether the provider is accepting new patients.
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function isAcceptingNewPatients($value)
    {
        $this->setProperty('isAcceptingNewPatients', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setIsAcceptingNewPatients($value)
    {
        $this->setProperty('isAcceptingNewPatients', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsAcceptingNewPatients()
    {
       return $this->getProperty('isAcceptingNewPatients');
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
