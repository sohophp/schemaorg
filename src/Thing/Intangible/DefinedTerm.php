<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\CreativeWork\DefinedTermSet;

/**
 * A word, name, acronym, phrase, etc. with a formal definition. Often used in the context of category or subject classification, glossaries or dictionaries, product or creative work types, etc. Use the name property for the term being defined, use termCode if the term has an alpha-numeric code allocated, use description to provide the definition of the term. Use the about property to specify what the term is about.
 * @see https://schema.org/DefinedTerm
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class DefinedTerm extends Intangible
{
    /**
     * The subject matter of an object.
     * @see https://schema.org/about
     * @param Thing|array $value
     * @return $this
     */
    public function about($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setAbout($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addAbout($value)
    {
        $current = $this->getProperty('about');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('about', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getAbout()
    {
        return $this->getProperty('about');
    }
    /**
     * A [[DefinedTermSet]] that contains this term.
     * @see https://schema.org/inDefinedTermSet
     * @param string|DefinedTermSet|array $value
     * @return $this
     */
    public function inDefinedTermSet($value)
    {
        $this->setProperty('inDefinedTermSet', $value);
        return $this;
    }

    /**
     * @param string|DefinedTermSet|array $value
     * @return $this
     */
    public function setInDefinedTermSet($value)
    {
        $this->setProperty('inDefinedTermSet', $value);
        return $this;
    }

    /**
     * @param string|DefinedTermSet $value
     * @return $this
     */
    public function addInDefinedTermSet($value)
    {
        $current = $this->getProperty('inDefinedTermSet');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inDefinedTermSet', $current);
        return $this;
    }

    /**
     * @return string|DefinedTermSet|array
     */
    public function getInDefinedTermSet()
    {
        return $this->getProperty('inDefinedTermSet');
    }
    /**
     * A code that identifies this [[DefinedTerm]] within a [[DefinedTermSet]].
     * @see https://schema.org/termCode
     * @param string|array $value
     * @return $this
     */
    public function termCode($value)
    {
        $this->setProperty('termCode', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTermCode($value)
    {
        $this->setProperty('termCode', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTermCode($value)
    {
        $current = $this->getProperty('termCode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('termCode', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTermCode()
    {
        return $this->getProperty('termCode');
    }
}
