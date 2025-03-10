<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
* A class of medical drugs, e.g., statins. Classes can represent general
 * pharmacological class, common mechanisms of action, common physiological
 * effects, etc.
* @see schema:DrugClass
* @package Sohophp\SchemaOrg\Thing\MedicalEntity
*/
class DrugClass extends MedicalEntity
{


    /**
        * Specifying a drug or medicine used in a medication procedure.
        * @param array|string|mixed $value
    * @return $this
    */
    public function drug($value)
    {
        $this->setProperty('drug', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
