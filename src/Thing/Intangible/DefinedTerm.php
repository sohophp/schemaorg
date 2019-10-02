<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet;

/**
* A word, name, acronym, phrase, etc. with a formal definition. Often used in the context of category or subject classification, glossaries or dictionaries, product or creative work types, etc. Use the name property for the term being defined, use termCode if the term has an alpha-numeric code allocated, use description to provide the definition of the term.
* @see http://schema.org/DefinedTerm
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class DefinedTerm extends Intangible
{

    /**
    * A code that identifies this <a class="localLink" href="http://schema.org/DefinedTerm">DefinedTerm</a> within a <a class="localLink" href="http://schema.org/DefinedTermSet">DefinedTermSet</a>
    * @param string $value
    * @return $this
    */
    public function termCode(?string $value)
    {
        $this->setProperty('termCode', $value);
        return $this;
    }

    /**
    * A <a class="localLink" href="http://schema.org/DefinedTermSet">DefinedTermSet</a> that contains this term.
    * @param DefinedTermSet|string $value
    * @return $this
    */
    public function inDefinedTermSet($value)
    {
        $this->setProperty('inDefinedTermSet', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\DefinedTerm','Thing\\DefinedTerm');
