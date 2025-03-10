<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
* A stage of a medical condition, such as 'Stage IIIa'.
* @see schema:MedicalConditionStage
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class MedicalConditionStage extends MedicalIntangible
{


    /**
        * The stage represented as a number, e.g. 3.
        * @param array|string|mixed $value
    * @return $this
    */
    public function stageAsNumber($value)
    {
        $this->setProperty('stageAsNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStageAsNumber($value)
    {
        $this->setProperty('stageAsNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStageAsNumber()
    {
       return $this->getProperty('stageAsNumber');
    }


    /**
        * The substage, e.g. 'a' for Stage IIIa.
        * @param array|string|mixed $value
    * @return $this
    */
    public function subStageSuffix($value)
    {
        $this->setProperty('subStageSuffix', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSubStageSuffix($value)
    {
        $this->setProperty('subStageSuffix', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSubStageSuffix()
    {
       return $this->getProperty('subStageSuffix');
    }


}
