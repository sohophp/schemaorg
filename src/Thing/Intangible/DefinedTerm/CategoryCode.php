<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
* A Category Code.
* @see schema:CategoryCode
* @package Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm
*/
class CategoryCode extends DefinedTerm
{
   /**
        * A short textual code that uniquely identifies the value.
        */
    protected $codeValue = null;

   /**
        * A [[CategoryCodeSet]] that contains this category code.
        */
    protected $inCodeSet = null;


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

    /**
    * @param array|string $value
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


}
