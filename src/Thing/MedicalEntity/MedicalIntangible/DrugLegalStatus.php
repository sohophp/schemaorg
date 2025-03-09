<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
* The legal availability status of a medical drug.
* @see schema:DrugLegalStatus
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DrugLegalStatus extends MedicalIntangible
{
   /**
        * The location in which the status applies.
        */
    protected $applicableLocation = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setApplicableLocation($value)
    {
        $this->setProperty('applicableLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getApplicableLocation()
    {
       return $this->getProperty('applicableLocation');
    }


}
