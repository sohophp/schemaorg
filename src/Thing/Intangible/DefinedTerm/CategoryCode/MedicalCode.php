<?php declare(strict_types=1);
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
    */
    public function codingSystem(?string $value)
    {
        $this->setProperty('codingSystem', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCodingSystem(?string $value)
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
    */
    public function codeValue(?string $value)
    {
        $this->setProperty('codeValue', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setCodeValue(?string $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\DefinedTerm\\CategoryCode\\MedicalCode','Thing\\MedicalCode');

