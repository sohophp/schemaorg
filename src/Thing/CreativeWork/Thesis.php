<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A thesis or dissertation document submitted in support of candidature for an academic degree or professional qualification.
 * @see https://schema.org/Thesis
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Thesis extends CreativeWork
{
    /**
     * Qualification, candidature, degree, application that Thesis supports.
     * @see https://schema.org/inSupportOf
     * @param string|array $value
     * @return $this
     */
    public function inSupportOf($value)
    {
        $this->setProperty('inSupportOf', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setInSupportOf($value)
    {
        $this->setProperty('inSupportOf', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addInSupportOf($value)
    {
        $current = $this->getProperty('inSupportOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inSupportOf', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getInSupportOf()
    {
        return $this->getProperty('inSupportOf');
    }
}
