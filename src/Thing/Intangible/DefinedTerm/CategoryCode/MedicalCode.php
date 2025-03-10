<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
* A code for a medical entity.
* @see http://schema.org/MedicalCode
* @package Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode
*/
class MedicalCode extends CategoryCode
{


    /**
        * The coding system, e.g. 'ICD-10'.
        * @param string|array|mixed $value
    * @return $this
    */
    public function codingSystem($value)
    {
        $this->setProperty('codingSystem', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCodingSystem($value)
    {
        $this->setProperty('codingSystem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCodingSystem()
    {
       return $this->getProperty('codingSystem');
    }


    /**
        * A short textual code that uniquely identifies the value.
        * @param string|array|mixed $value
    * @return $this
    */
    public function codeValue($value)
    {
        $this->setProperty('codeValue', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setCodeValue($value)
    {
        $this->setProperty('codeValue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCodeValue()
    {
       return $this->getProperty('codeValue');
    }


}
