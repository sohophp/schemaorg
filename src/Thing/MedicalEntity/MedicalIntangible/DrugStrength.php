<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;

/**
* A specific strength in which a medical drug is available in a specific country.
* @see http://schema.org/DrugStrength
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible

*
*/
class DrugStrength extends MedicalIntangible
{

    /**
    * The location in which the strength is available.
    * @param AdministrativeArea|array $value
    * @return $this
    */
    public function availableIn(?AdministrativeArea $value)
    {
        $this->setProperty('availableIn', $value);
        return $this;
    }
   /**
    * @param AdministrativeArea|array $value
    * @return $this
    */
    public function setAvailableIn(?AdministrativeArea $value)
    {
        $this->setProperty('availableIn', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailableIn()
    {
       return $this->getProperty('availableIn');
    }

    /**
    * The units of an active ingredient's strength, e.g. mg.
    * @param string|array $value
    * @return $this
    */
    public function strengthUnit(?string $value)
    {
        $this->setProperty('strengthUnit', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setStrengthUnit(?string $value)
    {
        $this->setProperty('strengthUnit', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStrengthUnit()
    {
       return $this->getProperty('strengthUnit');
    }

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
    * The value of an active ingredient's strength, e.g. 325.
    * @param |array $value
    * @return $this
    */
    public function strengthValue($value)
    {
        $this->setProperty('strengthValue', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setStrengthValue($value)
    {
        $this->setProperty('strengthValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getStrengthValue()
    {
       return $this->getProperty('strengthValue');
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


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalIntangible\\DrugStrength','Thing\\DrugStrength');

