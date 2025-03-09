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
        */
    protected $stageAsNumber = null;

   /**
        * The substage, e.g. 'a' for Stage IIIa.
        */
    protected $subStageSuffix = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
