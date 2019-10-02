<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* A risk factor is anything that increases a person's likelihood of developing or contracting a disease, medical condition, or complication.
* @see http://schema.org/MedicalRiskFactor
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalRiskFactor extends MedicalEntity
{

    /**
    * The condition, complication, etc. influenced by this factor.
    * @param MedicalEntity $value
    * @return $this
    */
    public function increasesRiskOf(?MedicalEntity $value)
    {
        $this->setProperty('increasesRiskOf', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalRiskFactor','Thing\\MedicalRiskFactor');

