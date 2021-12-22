<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskFactor;

/**
* Any rule set or interactive tool for estimating the risk of developing a complication or condition.
* @see http://schema.org/MedicalRiskEstimator
* @package Sohophp\SchemaOrg\Thing\MedicalEntity

*
*/
class MedicalRiskEstimator extends MedicalEntity
{

    /**
    * The condition, complication, or symptom whose risk is being estimated.
    * @param MedicalEntity|array $value
    * @return $this
    */
    public function estimatesRiskOf(?MedicalEntity $value)
    {
        $this->setProperty('estimatesRiskOf', $value);
        return $this;
    }
   /**
    * @param MedicalEntity|array $value
    * @return $this
    */
    public function setEstimatesRiskOf(?MedicalEntity $value)
    {
        $this->setProperty('estimatesRiskOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEstimatesRiskOf()
    {
       return $this->getProperty('estimatesRiskOf');
    }

    /**
    * A modifiable or non-modifiable risk factor included in the calculation, e.g. age, coexisting condition.
    * @param MedicalRiskFactor|array $value
    * @return $this
    */
    public function includedRiskFactor(?MedicalRiskFactor $value)
    {
        $this->setProperty('includedRiskFactor', $value);
        return $this;
    }
   /**
    * @param MedicalRiskFactor|array $value
    * @return $this
    */
    public function setIncludedRiskFactor(?MedicalRiskFactor $value)
    {
        $this->setProperty('includedRiskFactor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIncludedRiskFactor()
    {
       return $this->getProperty('includedRiskFactor');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalRiskEstimator','Thing\\MedicalRiskEstimator');

