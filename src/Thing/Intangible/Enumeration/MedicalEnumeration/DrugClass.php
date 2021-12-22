<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance\Drug;

/**
* A class of medical drugs, e.g., statins. Classes can represent general pharmacological class, common mechanisms of action, common physiological effects, etc.
* @see http://schema.org/DrugClass
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration

*
*/
class DrugClass extends MedicalEnumeration
{

    /**
    * Specifying a drug or medicine used in a medication procedure
    * @param Drug|array $value
    * @return $this
    */
    public function drug(?Drug $value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }
   /**
    * @param Drug|array $value
    * @return $this
    */
    public function setDrug(?Drug $value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDrug()
    {
       return $this->getProperty('drug');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Enumeration\\MedicalEnumeration\\DrugClass','Thing\\DrugClass');

