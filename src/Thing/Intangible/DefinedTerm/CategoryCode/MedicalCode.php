<?php declare(strict_types=1);
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
    * @param string $value
    * @return $this
    */
    public function codingSystem(?string $value)
    {
        $this->setProperty('codingSystem', $value);
        return $this;
    }

    /**
    * A short textual code that uniquely identifies the value.
    * @param string $value
    * @return $this
    */
    public function codeValue(?string $value)
    {
        $this->setProperty('codeValue', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\DefinedTerm\\CategoryCode\\MedicalCode','Thing\\MedicalCode');

