<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet\CategoryCodeSet;

/**
* A Category Code.
* @see http://schema.org/CategoryCode
* @package Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm
*/
class CategoryCode extends DefinedTerm
{


    /**
        * A [[CategoryCodeSet]] that contains this category code.
        * @param string|CategoryCodeSet|array|mixed $value
    * @return $this
    */
    public function inCodeSet($value)
    {
        $this->setProperty('inCodeSet', $value);
        return $this;
    }

    /**
    * @param string|CategoryCodeSet|array|mixed $value
    * @return $this
    */
    public function setInCodeSet($value)
    {
        $this->setProperty('inCodeSet', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInCodeSet()
    {
       return $this->getProperty('inCodeSet');
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
