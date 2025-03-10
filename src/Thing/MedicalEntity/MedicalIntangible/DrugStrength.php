<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;

/**
* A specific strength in which a medical drug is available in a specific
 * country.
* @see http://schema.org/DrugStrength
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DrugStrength extends MedicalIntangible
{


    /**
        * The location in which the strength is available.
        * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function availableIn($value)
    {
        $this->setProperty('availableIn', $value);
        return $this;
    }

    /**
    * @param AdministrativeArea|array|string|mixed $value
    * @return $this
    */
    public function setAvailableIn($value)
    {
        $this->setProperty('availableIn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableIn()
    {
       return $this->getProperty('availableIn');
    }


    /**
        * The units of an active ingredient's strength, e.g. mg.
        * @param string|array|mixed $value
    * @return $this
    */
    public function strengthUnit($value)
    {
        $this->setProperty('strengthUnit', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setStrengthUnit($value)
    {
        $this->setProperty('strengthUnit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStrengthUnit()
    {
       return $this->getProperty('strengthUnit');
    }


    /**
        * An active ingredient, typically chemical compounds and/or biologic
 * substances.
        * @param string|array|mixed $value
    * @return $this
    */
    public function activeIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setActiveIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActiveIngredient()
    {
       return $this->getProperty('activeIngredient');
    }


    /**
        * The value of an active ingredient's strength, e.g. 325.
        * @param array|string|mixed $value
    * @return $this
    */
    public function strengthValue($value)
    {
        $this->setProperty('strengthValue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setStrengthValue($value)
    {
        $this->setProperty('strengthValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStrengthValue()
    {
       return $this->getProperty('strengthValue');
    }


    /**
        * Recommended intake of this supplement for a given population as defined by a
 * specific recommending authority.
        * @param MaximumDoseSchedule|array|string|mixed $value
    * @return $this
    */
    public function maximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
    * @param MaximumDoseSchedule|array|string|mixed $value
    * @return $this
    */
    public function setMaximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaximumIntake()
    {
       return $this->getProperty('maximumIntake');
    }


}
