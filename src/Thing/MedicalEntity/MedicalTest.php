<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition\MedicalSignOrSymptom\MedicalSign;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalDevice;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;
use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance\Drug;

/**
* Any medical test, typically performed for diagnostic purposes.
* @see http://schema.org/MedicalTest
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class MedicalTest extends MedicalEntity
{

    /**
    * A sign detected by the test.
    * @param MedicalSign $value
    * @return $this
    */
    public function signDetected(?MedicalSign $value)
    {
        $this->setProperty('signDetected', $value);
        return $this;
    }

    /**
    * Range of acceptable values for a typical patient, when applicable.
    * @param string|MedicalEnumeration $value
    * @return $this
    */
    public function normalRange($value)
    {
        $this->setProperty('normalRange', $value);
        return $this;
    }

    /**
    * Device used to perform the test.
    * @param MedicalDevice $value
    * @return $this
    */
    public function usesDevice(?MedicalDevice $value)
    {
        $this->setProperty('usesDevice', $value);
        return $this;
    }

    /**
    * A condition the test is used to diagnose.
    * @param MedicalCondition $value
    * @return $this
    */
    public function usedToDiagnose(?MedicalCondition $value)
    {
        $this->setProperty('usedToDiagnose', $value);
        return $this;
    }

    /**
    * Drugs that affect the test's results.
    * @param Drug $value
    * @return $this
    */
    public function affectedBy(?Drug $value)
    {
        $this->setProperty('affectedBy', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\MedicalTest','Thing\\MedicalTest');

