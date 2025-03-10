<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

/**
* A specific dosing schedule for a drug or supplement.
* @see schema:DoseSchedule
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DoseSchedule extends MedicalIntangible
{


    /**
        * The value of the dose, e.g. 500.
        * @param array|string|mixed $value
    * @return $this
    */
    public function doseValue($value)
    {
        $this->setProperty('doseValue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDoseValue($value)
    {
        $this->setProperty('doseValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDoseValue()
    {
       return $this->getProperty('doseValue');
    }


    /**
        * How often the dose is taken, e.g. 'daily'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function frequency($value)
    {
        $this->setProperty('frequency', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFrequency($value)
    {
        $this->setProperty('frequency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFrequency()
    {
       return $this->getProperty('frequency');
    }


    /**
        * Characteristics of the population for which this is intended, or which
 * typically uses it, e.g. 'adults'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function targetPopulation($value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTargetPopulation($value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTargetPopulation()
    {
       return $this->getProperty('targetPopulation');
    }


    /**
        * The unit of the dose, e.g. 'mg'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function doseUnit($value)
    {
        $this->setProperty('doseUnit', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDoseUnit($value)
    {
        $this->setProperty('doseUnit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDoseUnit()
    {
       return $this->getProperty('doseUnit');
    }


}
