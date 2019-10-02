<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

/**
* A simple system that adds up the number of risk factors to yield a score that is associated with prognosis, e.g. CHAD score, TIMI risk score.
* @see http://schema.org/MedicalRiskScore
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator
*/
class MedicalRiskScore extends MedicalRiskEstimator
{

    /**
    * The algorithm or rules to follow to compute the score.
    * @param string $value
    * @return $this
    */
    public function algorithm(?string $value)
    {
        $this->setProperty('algorithm', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalRiskEstimator\\MedicalRiskScore','Thing\\MedicalRiskScore');
