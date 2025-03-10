<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any rule set or interactive tool for estimating the risk of developing a
 * complication or condition.
* @see schema:MedicalRiskEstimator
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalRiskEstimator extends MedicalEntity
{


    /**
        * A modifiable or non-modifiable risk factor included in the calculation, e.g.
 * age, coexisting condition.
        * @param array|string|mixed $value
    * @return $this
    */
    public function includedRiskFactor($value)
    {
        $this->setProperty('includedRiskFactor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIncludedRiskFactor($value)
    {
        $this->setProperty('includedRiskFactor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludedRiskFactor()
    {
       return $this->getProperty('includedRiskFactor');
    }


    /**
        * The condition, complication, or symptom whose risk is being estimated.
        * @param array|string|mixed $value
    * @return $this
    */
    public function estimatesRiskOf($value)
    {
        $this->setProperty('estimatesRiskOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEstimatesRiskOf($value)
    {
        $this->setProperty('estimatesRiskOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEstimatesRiskOf()
    {
       return $this->getProperty('estimatesRiskOf');
    }


}
