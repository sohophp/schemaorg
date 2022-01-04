<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* A specific dosing schedule for a drug or supplement.
* @see http://schema.org/DoseSchedule
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible

*
*/
class DoseSchedule extends MedicalIntangible
{

    /**
    * The unit of the dose, e.g. 'mg'.
    * @param string|array $value
    * @return $this
    * @deprecated use setDoseUnit
    */
    public function doseUnit($value)
    {
        $this->setProperty('doseUnit', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDoseUnit($value)
    {
        $this->setProperty('doseUnit', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDoseUnit()
    {
       return $this->getProperty('doseUnit');
    }

    /**
    * The value of the dose, e.g. 500.
    * @param QualitativeValue|array|string $value
    * @return $this
    * @deprecated use setDoseValue
    */
    public function doseValue($value)
    {
        $this->setProperty('doseValue', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array|string $value
    * @return $this
    */
    public function setDoseValue($value)
    {
        $this->setProperty('doseValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDoseValue()
    {
       return $this->getProperty('doseValue');
    }

    /**
    * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
    * @param string|array $value
    * @return $this
    * @deprecated use setTargetPopulation
    */
    public function targetPopulation($value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTargetPopulation($value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTargetPopulation()
    {
       return $this->getProperty('targetPopulation');
    }

    /**
    * How often the dose is taken, e.g. 'daily'.
    * @param string|array $value
    * @return $this
    * @deprecated use setFrequency
    */
    public function frequency($value)
    {
        $this->setProperty('frequency', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFrequency($value)
    {
        $this->setProperty('frequency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFrequency()
    {
       return $this->getProperty('frequency');
    }


}
