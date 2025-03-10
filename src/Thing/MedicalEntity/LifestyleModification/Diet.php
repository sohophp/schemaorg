<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;

use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;

/**
* A strategy of regulating the intake of food to achieve or maintain a specific
 * health-related goal.
* @see schema:Diet
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification
*/
class Diet extends LifestyleModification
{


    /**
        * Medical expert advice related to the plan.
        * @param array|string|mixed $value
    * @return $this
    */
    public function expertConsiderations($value)
    {
        $this->setProperty('expertConsiderations', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExpertConsiderations($value)
    {
        $this->setProperty('expertConsiderations', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpertConsiderations()
    {
       return $this->getProperty('expertConsiderations');
    }


    /**
        * Nutritional information specific to the dietary plan. May include dietary
 * recommendations on what foods to avoid, what foods to consume, and specific
 * alterations/deviations from the USDA or other regulatory body's approved
 * dietary guidelines.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dietFeatures($value)
    {
        $this->setProperty('dietFeatures', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDietFeatures($value)
    {
        $this->setProperty('dietFeatures', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDietFeatures()
    {
       return $this->getProperty('dietFeatures');
    }


    /**
        * Specific physiologic benefits associated to the plan.
        * @param array|string|mixed $value
    * @return $this
    */
    public function physiologicalBenefits($value)
    {
        $this->setProperty('physiologicalBenefits', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setPhysiologicalBenefits($value)
    {
        $this->setProperty('physiologicalBenefits', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPhysiologicalBenefits()
    {
       return $this->getProperty('physiologicalBenefits');
    }


    /**
        * People or organizations that endorse the plan.
        * @param array|string|mixed $value
    * @return $this
    */
    public function endorsers($value)
    {
        $this->setProperty('endorsers', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEndorsers($value)
    {
        $this->setProperty('endorsers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEndorsers()
    {
       return $this->getProperty('endorsers');
    }


    /**
        * Specific physiologic risks associated to the diet plan.
        * @param array|string|mixed $value
    * @return $this
    */
    public function risks($value)
    {
        $this->setProperty('risks', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRisks($value)
    {
        $this->setProperty('risks', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRisks()
    {
       return $this->getProperty('risks');
    }


}
