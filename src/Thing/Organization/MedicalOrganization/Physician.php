<?php
namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

/**
* An individual physician or a physician's office considered as a
 * [[MedicalOrganization]].
* @see schema:Physician
* @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization
*/
class Physician extends MedicalOrganization
{


    /**
        * A hospital with which the physician or office is affiliated.
        * @param array|string|mixed $value
    * @return $this
    */
    public function hospitalAffiliation($value)
    {
        $this->setProperty('hospitalAffiliation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHospitalAffiliation($value)
    {
        $this->setProperty('hospitalAffiliation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHospitalAffiliation()
    {
       return $this->getProperty('hospitalAffiliation');
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


    /**
        * A [National Provider
 * Identifier](https://en.wikipedia.org/wiki/National_Provider_Identifier) (NPI)
 * 
 *     is a unique 10-digit identification number issued to health care
 * providers in the United States by the Centers for Medicare and Medicaid
 * Services.
        * @param array|string|mixed $value
    * @return $this
    */
    public function usNPI($value)
    {
        $this->setProperty('usNPI', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setUsNPI($value)
    {
        $this->setProperty('usNPI', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUsNPI()
    {
       return $this->getProperty('usNPI');
    }


    /**
        * A category describing the job, preferably using a term from a taxonomy such
 * as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html),
 * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
 * similar, with the property repeated for each applicable value. Ideally the
 * taxonomy should be identified, and both the textual label and formal code for
 * the category should be provided.
 * 
 * Note: for historical reasons, any textual label and formal code provided as a
 * literal may be assumed to be from O*NET-SOC.
        * @param array|string|mixed $value
    * @return $this
    */
    public function occupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOccupationalCategory($value)
    {
        $this->setProperty('occupationalCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOccupationalCategory()
    {
       return $this->getProperty('occupationalCategory');
    }


}
