<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
* A set of defined terms for example a set of categories or a classification scheme, a glossary, dictionary or enumeration.
* @see http://schema.org/DefinedTermSet
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class DefinedTermSet extends CreativeWork
{

    /**
    * A Defined Term contained in this term set.
    * @param DefinedTerm|array|string $value
    * @return $this
    * @deprecated use setHasDefinedTerm
    */
    public function hasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }
   /**
    * @param DefinedTerm|array|string $value
    * @return $this
    */
    public function setHasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHasDefinedTerm()
    {
       return $this->getProperty('hasDefinedTerm');
    }


}
