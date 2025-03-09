<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A word, name, acronym, phrase, etc. with a formal definition. Often used in the context of category or subject classification, glossaries or dictionaries, product or creative work types, etc. Use the name property for the term being defined, use termCode if the term has an alpha-numeric code allocated, use description to provide the definition of the term.
* @see schema:DefinedTerm
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class DefinedTerm extends Intangible
{
   /**
        * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]].
        */
    protected $termCode = null;

   /**
        * A [[DefinedTermSet]] that contains this term.
        */
    protected $inDefinedTermSet = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setTermCode($value)
    {
        $this->setProperty('termCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTermCode()
    {
       return $this->getProperty('termCode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setInDefinedTermSet($value)
    {
        $this->setProperty('inDefinedTermSet', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInDefinedTermSet()
    {
       return $this->getProperty('inDefinedTermSet');
    }


}
