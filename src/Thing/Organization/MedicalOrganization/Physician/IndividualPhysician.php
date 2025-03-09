<?php
namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization\Physician;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization\Physician;

/**
* An individual medical practitioner. For their official address use [[address]], for affiliations to hospitals use [[hospitalAffiliation]]. 
The [[practicesAt]] property can be used to indicate [[MedicalOrganization]] hospitals, clinics, pharmacies etc. where this physician practices.
* @see schema:IndividualPhysician
* @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization\Physician
*/
class IndividualPhysician extends Physician
{
   /**
        * A [[MedicalOrganization]] where the [[IndividualPhysician]] practices.
        */
    protected $practicesAt = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPracticesAt($value)
    {
        $this->setProperty('practicesAt', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPracticesAt()
    {
       return $this->getProperty('practicesAt');
    }


}
