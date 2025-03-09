<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A set of defined terms, for example a set of categories or a classification scheme, a glossary, dictionary or enumeration.
* @see schema:DefinedTermSet
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class DefinedTermSet extends CreativeWork
{
   /**
        * A Defined Term contained in this term set.
        */
    protected $hasDefinedTerm = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasDefinedTerm()
    {
       return $this->getProperty('hasDefinedTerm');
    }


}
