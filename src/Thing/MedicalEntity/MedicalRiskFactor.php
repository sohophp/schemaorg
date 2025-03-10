<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* A risk factor is anything that increases a person's likelihood of developing
 * or contracting a disease, medical condition, or complication.
* @see http://schema.org/MedicalRiskFactor
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalRiskFactor extends MedicalEntity
{


    /**
        * The condition, complication, etc. influenced by this factor.
        * @param MedicalEntity|array|string|mixed $value
    * @return $this
    */
    public function increasesRiskOf($value)
    {
        $this->setProperty('increasesRiskOf', $value);
        return $this;
    }

    /**
    * @param MedicalEntity|array|string|mixed $value
    * @return $this
    */
    public function setIncreasesRiskOf($value)
    {
        $this->setProperty('increasesRiskOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncreasesRiskOf()
    {
       return $this->getProperty('increasesRiskOf');
    }


}
