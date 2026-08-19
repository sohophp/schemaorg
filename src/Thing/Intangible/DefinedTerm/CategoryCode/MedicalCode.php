<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;

/**
 * A code for a medical entity.
 * @see https://schema.org/MedicalCode
 * @package Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode
 */
class MedicalCode extends CategoryCode
{
    /**
     * A short textual code that uniquely identifies the value.
     * @see https://schema.org/codeValue
     * @param string|array $value
     * @return $this
     */
    public function codeValue($value)
    {
        $this->setProperty('codeValue', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCodeValue($value)
    {
        $this->setProperty('codeValue', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCodeValue($value)
    {
        $current = $this->getProperty('codeValue');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('codeValue', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCodeValue()
    {
        return $this->getProperty('codeValue');
    }
    /**
     * The coding system, e.g. 'ICD-10'.
     * @see https://schema.org/codingSystem
     * @param string|array $value
     * @return $this
     */
    public function codingSystem($value)
    {
        $this->setProperty('codingSystem', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCodingSystem($value)
    {
        $this->setProperty('codingSystem', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCodingSystem($value)
    {
        $current = $this->getProperty('codingSystem');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('codingSystem', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCodingSystem()
    {
        return $this->getProperty('codingSystem');
    }
}
