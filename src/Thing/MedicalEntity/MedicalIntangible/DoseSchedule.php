<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;

/**
* A specific dosing schedule for a drug or supplement.
* @see http://schema.org/DoseSchedule
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible
*/
class DoseSchedule extends MedicalIntangible
{

    /**
    * The unit of the dose, e.g. 'mg'.
    * @param string $value
    * @return $this
    */
    public function doseUnit(?string $value)
    {
        $this->setProperty('doseUnit', $value);
        return $this;
    }

    /**
    * The value of the dose, e.g. 500.
    * @param QualitativeValue $value
    * @return $this
    */
    public function doseValue(?QualitativeValue $value)
    {
        $this->setProperty('doseValue', $value);
        return $this;
    }

    /**
    * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
    * @param string $value
    * @return $this
    */
    public function targetPopulation(?string $value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }

    /**
    * How often the dose is taken, e.g. 'daily'.
    * @param string $value
    * @return $this
    */
    public function frequency(?string $value)
    {
        $this->setProperty('frequency', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalIntangible\\DoseSchedule','Thing\\DoseSchedule');

