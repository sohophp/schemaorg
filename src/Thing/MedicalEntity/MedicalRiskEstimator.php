<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* Any rule set or interactive tool for estimating the risk of developing a complication or condition.
* @see schema:MedicalRiskEstimator
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalRiskEstimator extends MedicalEntity
{
   /**
        * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
        */
    protected $includedRiskFactor = null;

   /**
        * The condition, complication, or symptom whose risk is being estimated.
        */
    protected $estimatesRiskOf = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
