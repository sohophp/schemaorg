<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
* The legal availability status of a medical drug.
* @see http://schema.org/DrugLegalStatus
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DrugLegalStatus extends MedicalIntangible
{


    /**
        * The location in which the status applies.
        * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function applicableLocation($value)
    {
        $this->setProperty('applicableLocation', $value);
        return $this;
    }

    /**
    * @param AdministrativeArea|array|string|mixed $value
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
