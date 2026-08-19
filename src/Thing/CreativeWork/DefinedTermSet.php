<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing;

/**
 * A set of defined terms, for example a set of categories or a classification scheme, a glossary, dictionary or enumeration. Use the about property to specify what the term set is about.
 * @see https://schema.org/DefinedTermSet
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class DefinedTermSet extends CreativeWork
{
    /**
     * A Defined Term contained in this term set.
     * @see https://schema.org/hasDefinedTerm
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function hasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|array $value
     * @return $this
     */
    public function setHasDefinedTerm($value)
    {
        $this->setProperty('hasDefinedTerm', $value);
        return $this;
    }

    /**
     * @param DefinedTerm $value
     * @return $this
     */
    public function addHasDefinedTerm($value)
    {
        $current = $this->getProperty('hasDefinedTerm');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasDefinedTerm', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|array
     */
    public function getHasDefinedTerm()
    {
        return $this->getProperty('hasDefinedTerm');
    }
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
}
