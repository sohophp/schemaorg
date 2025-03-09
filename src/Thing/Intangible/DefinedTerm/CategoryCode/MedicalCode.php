<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
* A code for a medical entity.
* @see schema:MedicalCode
* @package Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode
*/
class MedicalCode extends CategoryCode
{
   /**
        * The coding system, e.g. 'ICD-10'.
        */
    protected $codingSystem = null;

   /**
        * A short textual code that uniquely identifies the value.
        */
    protected $codeValue = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
