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
    */
    public function doseUnit(?string $value)
    {
        $this->setProperty('doseUnit', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDoseUnit(?string $value)
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
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function doseValue(?QualitativeValue $value)
    {
        $this->setProperty('doseValue', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function setDoseValue(?QualitativeValue $value)
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
    */
    public function targetPopulation(?string $value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTargetPopulation(?string $value)
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
    */
    public function frequency(?string $value)
    {
        $this->setProperty('frequency', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setFrequency(?string $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalIntangible\\DoseSchedule','Thing\\DoseSchedule');

