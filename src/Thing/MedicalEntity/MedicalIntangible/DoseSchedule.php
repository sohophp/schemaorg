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
        */
    protected $doseValue = null;

   /**
        * How often the dose is taken, e.g. 'daily'.
        */
    protected $frequency = null;

   /**
        * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
        */
    protected $targetPopulation = null;

   /**
        * The unit of the dose, e.g. 'mg'.
        */
    protected $doseUnit = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
