<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;

use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* A strategy of regulating the intake of food to achieve or maintain a specific health-related goal.
* @see http://schema.org/Diet
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification

*
*/
class Diet extends LifestyleModification
{

    /**
    * Specific physiologic risks associated to the diet plan.
    * @param string|array $value
    * @return $this
    */
    public function risks(?string $value)
    {
        $this->setProperty('risks', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setRisks(?string $value)
    {
        $this->setProperty('risks', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRisks()
    {
       return $this->getProperty('risks');
    }

    /**
    * Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
    * @param string|array $value
    * @return $this
    */
    public function overview(?string $value)
    {
        $this->setProperty('overview', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setOverview(?string $value)
    {
        $this->setProperty('overview', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOverview()
    {
       return $this->getProperty('overview');
    }

    /**
    * Specific physiologic benefits associated to the plan.
    * @param string|array $value
    * @return $this
    */
    public function physiologicalBenefits(?string $value)
    {
        $this->setProperty('physiologicalBenefits', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPhysiologicalBenefits(?string $value)
    {
        $this->setProperty('physiologicalBenefits', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPhysiologicalBenefits()
    {
       return $this->getProperty('physiologicalBenefits');
    }

    /**
    * Medical expert advice related to the plan.
    * @param string|array $value
    * @return $this
    */
    public function expertConsiderations(?string $value)
    {
        $this->setProperty('expertConsiderations', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setExpertConsiderations(?string $value)
    {
        $this->setProperty('expertConsiderations', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExpertConsiderations()
    {
       return $this->getProperty('expertConsiderations');
    }

    /**
    * People or organizations that endorse the plan.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function endorsers($value)
    {
        $this->setProperty('endorsers', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setEndorsers($value)
    {
        $this->setProperty('endorsers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEndorsers()
    {
       return $this->getProperty('endorsers');
    }

    /**
    * Nutritional information specific to the dietary plan. May include dietary recommendations on what foods to avoid, what foods to consume, and specific alterations/deviations from the USDA or other regulatory body's approved dietary guidelines.
    * @param string|array $value
    * @return $this
    */
    public function dietFeatures(?string $value)
    {
        $this->setProperty('dietFeatures', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDietFeatures(?string $value)
    {
        $this->setProperty('dietFeatures', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDietFeatures()
    {
       return $this->getProperty('dietFeatures');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\LifestyleModification\\Diet','Thing\\Diet');

