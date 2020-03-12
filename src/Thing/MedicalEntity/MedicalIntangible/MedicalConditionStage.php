<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
* A stage of a medical condition, such as 'Stage IIIa'.
* @see http://schema.org/MedicalConditionStage
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible

*
*/
class MedicalConditionStage extends MedicalIntangible
{

    /**
    * The substage, e.g. 'a' for Stage IIIa.
    * @param string|array $value
    * @return $this
    */
    public function subStageSuffix(?string $value)
    {
        $this->setProperty('subStageSuffix', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setSubStageSuffix(?string $value)
    {
        $this->setProperty('subStageSuffix', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSubStageSuffix()
    {
       return $this->getProperty('subStageSuffix');
    }

    /**
    * The stage represented as a number, e.g. 3.
    * @param |array $value
    * @return $this
    */
    public function stageAsNumber($value)
    {
        $this->setProperty('stageAsNumber', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setStageAsNumber($value)
    {
        $this->setProperty('stageAsNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStageAsNumber()
    {
       return $this->getProperty('stageAsNumber');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalIntangible\\MedicalConditionStage','Thing\\MedicalConditionStage');

