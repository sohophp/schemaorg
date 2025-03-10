<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance\Drug;

/**
* A class of medical drugs, e.g., statins. Classes can represent general
 * pharmacological class, common mechanisms of action, common physiological
 * effects, etc.
* @see http://schema.org/DrugClass
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration
*/
class DrugClass extends MedicalEnumeration
{


    /**
        * Specifying a drug or medicine used in a medication procedure
        * @param Drug|array|string|mixed $value
    * @return $this
    */
    public function drug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
    * @param Drug|array|string|mixed $value
    * @return $this
    */
    public function setDrug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDrug()
    {
       return $this->getProperty('drug');
    }


}
