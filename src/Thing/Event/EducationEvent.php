<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;

/**
 * Event type: Education event.
 * @see https://schema.org/EducationEvent
 * @package Sohophp\SchemaOrg\Thing\Event
 */
class EducationEvent extends Event
{
    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @see https://schema.org/assesses
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function assesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setAssesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addAssesses($value)
    {
        $current = $this->getProperty('assesses');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('assesses', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getAssesses()
    {
        return $this->getProperty('assesses');
    }
    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @see https://schema.org/teaches
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function teaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setTeaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addTeaches($value)
    {
        $current = $this->getProperty('teaches');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('teaches', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getTeaches()
    {
        return $this->getProperty('teaches');
    }
    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     * @see https://schema.org/educationalLevel
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function educationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setEducationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addEducationalLevel($value)
    {
        $current = $this->getProperty('educationalLevel');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalLevel', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getEducationalLevel()
    {
        return $this->getProperty('educationalLevel');
    }
}
