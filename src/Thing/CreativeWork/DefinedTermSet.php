<?php declare(strict_types=1);
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
    * @param DefinedTerm|array $value
    * @return $this
    */
    public function hasDefinedTerm(?DefinedTerm $value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }
   /**
    * @param DefinedTerm|array $value
    * @return $this
    */
    public function setHasDefinedTerm(?DefinedTerm $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\DefinedTermSet','Thing\\DefinedTermSet');

