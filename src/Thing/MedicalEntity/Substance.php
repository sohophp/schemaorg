<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;

/**
* Any matter of defined composition that has discrete existence, whose origin may be biological, mineral or chemical.
* @see http://schema.org/Substance
* @package Sohophp\SchemaOrg\Thing\MedicalEntity

*
*/
class Substance extends MedicalEntity
{

    /**
    * An active ingredient, typically chemical compounds and/or biologic substances.
    * @param string|array $value
    * @return $this
    */
    public function activeIngredient(?string $value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setActiveIngredient(?string $value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActiveIngredient()
    {
       return $this->getProperty('activeIngredient');
    }

    /**
    * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @param MaximumDoseSchedule|array $value
    * @return $this
    */
    public function maximumIntake(?MaximumDoseSchedule $value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }
   /**
    * @param MaximumDoseSchedule|array $value
    * @return $this
    */
    public function setMaximumIntake(?MaximumDoseSchedule $value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMaximumIntake()
    {
       return $this->getProperty('maximumIntake');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\Substance','Thing\\Substance');

