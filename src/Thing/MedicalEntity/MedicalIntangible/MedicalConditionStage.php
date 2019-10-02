<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
* A stage of a medical condition, such as 'Stage IIIa'.
* @see http://schema.org/MedicalConditionStage
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class MedicalConditionStage extends MedicalIntangible
{

    /**
    * The substage, e.g. 'a' for Stage IIIa.
    * @param string $value
    * @return $this
    */
    public function subStageSuffix(?string $value)
    {
        $this->setProperty('subStageSuffix', $value);
        return $this;
    }

    /**
    * The stage represented as a number, e.g. 3.
    * @param  $value
    * @return $this
    */
    public function stageAsNumber($value)
    {
        $this->setProperty('stageAsNumber', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalIntangible\\MedicalConditionStage','Thing\\MedicalConditionStage');

