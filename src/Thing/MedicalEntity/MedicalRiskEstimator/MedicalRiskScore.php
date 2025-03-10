<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

/**
* A simple system that adds up the number of risk factors to yield a score that
 * is associated with prognosis, e.g. CHAD score, TIMI risk score.
* @see schema:MedicalRiskScore
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator
*/
class MedicalRiskScore extends MedicalRiskEstimator
{


    /**
        * The algorithm or rules to follow to compute the score.
        * @param array|string|mixed $value
    * @return $this
    */
    public function algorithm($value)
    {
        $this->setProperty('algorithm', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAlgorithm($value)
    {
        $this->setProperty('algorithm', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlgorithm()
    {
       return $this->getProperty('algorithm');
    }


}
