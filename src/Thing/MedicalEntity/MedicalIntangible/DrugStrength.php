<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;

/**
* A specific strength in which a medical drug is available in a specific country.
* @see http://schema.org/DrugStrength
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DrugStrength extends MedicalIntangible
{

    /**
    * The location in which the strength is available.
    * @param AdministrativeArea $value
    * @return $this
    */
    public function availableIn(?AdministrativeArea $value)
    {
        $this->setProperty('availableIn', $value);
        return $this;
    }

    /**
    * The units of an active ingredient's strength, e.g. mg.
    * @param string $value
    * @return $this
    */
    public function strengthUnit(?string $value)
    {
        $this->setProperty('strengthUnit', $value);
        return $this;
    }

    /**
    * An active ingredient, typically chemical compounds and/or biologic substances.
    * @param string $value
    * @return $this
    */
    public function activeIngredient(?string $value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
    * The value of an active ingredient's strength, e.g. 325.
    * @param  $value
    * @return $this
    */
    public function strengthValue($value)
    {
        $this->setProperty('strengthValue', $value);
        return $this;
    }

    /**
    * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @param MaximumDoseSchedule $value
    * @return $this
    */
    public function maximumIntake(?MaximumDoseSchedule $value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalIntangible\\DrugStrength','Thing\\DrugStrength');

