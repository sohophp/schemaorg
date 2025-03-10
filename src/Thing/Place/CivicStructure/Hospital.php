<?php
namespace Sohophp\SchemaOrg\Thing\Place\CivicStructure;

use Sohophp\SchemaOrg\Thing\Place\CivicStructure;

/**
* A hospital.
* @see schema:Hospital
* @package Sohophp\SchemaOrg\Thing\Place\CivicStructure
*/
class Hospital extends CivicStructure
{


    /**
        * Indicates data describing a hospital, e.g. a CDC [[CDCPMDRecord]] or as some
 * kind of [[Dataset]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function healthcareReportingData($value)
    {
        $this->setProperty('healthcareReportingData', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHealthcareReportingData($value)
    {
        $this->setProperty('healthcareReportingData', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHealthcareReportingData()
    {
       return $this->getProperty('healthcareReportingData');
    }


    /**
        * A medical specialty of the provider.
        * @param array|string|mixed $value
    * @return $this
    */
    public function medicalSpecialty($value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * A medical service available from this provider.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
