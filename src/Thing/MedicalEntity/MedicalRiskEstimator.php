<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor;

/**
* Any rule set or interactive tool for estimating the risk of developing a complication or condition.
* @see http://schema.org/MedicalRiskEstimator
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalRiskEstimator extends MedicalEntity
{

    /**
    * The condition, complication, or symptom whose risk is being estimated.
    * @param MedicalEntity $value
    * @return $this
    */
    public function estimatesRiskOf(?MedicalEntity $value)
    {
        $this->setProperty('estimatesRiskOf', $value);
        return $this;
    }

    /**
    * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
    * @param MedicalRiskFactor $value
    * @return $this
    */
    public function includedRiskFactor(?MedicalRiskFactor $value)
    {
        $this->setProperty('includedRiskFactor', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalRiskEstimator','Thing\\MedicalRiskEstimator');

