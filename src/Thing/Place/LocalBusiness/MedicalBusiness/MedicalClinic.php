<?php
namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness;

use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness;

/**
* A facility, often associated with a hospital or medical school, that is
 * devoted to the specific diagnosis and/or healthcare. Previously limited to
 * outpatients but with evolution it may be open to inpatients as well.
* @see schema:MedicalClinic
* @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness
*/
class MedicalClinic extends MedicalBusiness
{


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
