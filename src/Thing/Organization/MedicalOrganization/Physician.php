<?php
namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

/**
* An individual physician or a physician's office considered as a [[MedicalOrganization]].
* @see schema:Physician
* @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization
*/
class Physician extends MedicalOrganization
{
   /**
        * A hospital with which the physician or office is affiliated.
        */
    protected $hospitalAffiliation = null;

   /**
        * A medical specialty of the provider.
        */
    protected $medicalSpecialty = null;

   /**
        * A medical service available from this provider.
        */
    protected $availableService = null;

   /**
        * A <a href="https://en.wikipedia.org/wiki/National_Provider_Identifier">National Provider Identifier</a> (NPI) 
    is a unique 10-digit identification number issued to health care providers in the United States by the Centers for Medicare and Medicaid Services.
        */
    protected $usNPI = null;

   /**
        * A category describing the job, preferably using a term from a taxonomy such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html), [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or similar, with the property repeated for each applicable value. Ideally the taxonomy should be identified, and both the textual label and formal code for the category should be provided.\n
Note: for historical reasons, any textual label and formal code provided as a literal may be assumed to be from O*NET-SOC.
        */
    protected $occupationalCategory = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
