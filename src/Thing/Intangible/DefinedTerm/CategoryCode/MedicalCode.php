<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
* A code for a medical entity.
* @see http://schema.org/MedicalCode
* @package Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode

*
*/
class MedicalCode extends CategoryCode
{

    /**
    * The coding system, e.g. 'ICD-10'.
    * @param string|array $value
    * @return $this
    * @deprecated use setCodingSystem
    */
    public function codingSystem($value)
    {
        $this->setProperty('codingSystem', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCodingSystem($value)
    {
        $this->setProperty('codingSystem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCodingSystem()
    {
       return $this->getProperty('codingSystem');
    }

    /**
    * A short textual code that uniquely identifies the value.
    * @param string|array $value
    * @return $this
    * @deprecated use setCodeValue
    */
    public function codeValue($value)
    {
        $this->setProperty('codeValue', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCodeValue($value)
    {
        $this->setProperty('codeValue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCodeValue()
    {
       return $this->getProperty('codeValue');
    }


}
