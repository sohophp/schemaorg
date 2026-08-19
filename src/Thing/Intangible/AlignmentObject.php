<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
 * An intangible item that describes an alignment between a learning resource and a node in an educational framework. Should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
 * @see https://schema.org/AlignmentObject
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class AlignmentObject extends Intangible
{
    /**
     * The name of a node in an established educational framework.
     * @see https://schema.org/targetName
     * @param string|array $value
     * @return $this
     */
    public function targetName($value)
    {
        $this->setProperty('targetName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTargetName($value)
    {
        $this->setProperty('targetName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTargetName($value)
    {
        $current = $this->getProperty('targetName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('targetName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTargetName()
    {
        return $this->getProperty('targetName');
    }
    /**
     * The framework to which the resource being described is aligned.
     * @see https://schema.org/educationalFramework
     * @param string|array $value
     * @return $this
     */
    public function educationalFramework($value)
    {
        $this->setProperty('educationalFramework', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEducationalFramework($value)
    {
        $this->setProperty('educationalFramework', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEducationalFramework($value)
    {
        $current = $this->getProperty('educationalFramework');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalFramework', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEducationalFramework()
    {
        return $this->getProperty('educationalFramework');
    }
    /**
     * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
     * @see https://schema.org/alignmentType
     * @param string|array $value
     * @return $this
     */
    public function alignmentType($value)
    {
        $this->setProperty('alignmentType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAlignmentType($value)
    {
        $this->setProperty('alignmentType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAlignmentType($value)
    {
        $current = $this->getProperty('alignmentType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('alignmentType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAlignmentType()
    {
        return $this->getProperty('alignmentType');
    }
    /**
     * The description of a node in an established educational framework.
     * @see https://schema.org/targetDescription
     * @param string|array $value
     * @return $this
     */
    public function targetDescription($value)
    {
        $this->setProperty('targetDescription', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTargetDescription($value)
    {
        $this->setProperty('targetDescription', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTargetDescription($value)
    {
        $current = $this->getProperty('targetDescription');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('targetDescription', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTargetDescription()
    {
        return $this->getProperty('targetDescription');
    }
    /**
     * The URL of a node in an established educational framework.
     * @see https://schema.org/targetUrl
     * @param string|array $value
     * @return $this
     */
    public function targetUrl($value)
    {
        $this->setProperty('targetUrl', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTargetUrl($value)
    {
        $this->setProperty('targetUrl', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTargetUrl($value)
    {
        $current = $this->getProperty('targetUrl');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('targetUrl', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTargetUrl()
    {
        return $this->getProperty('targetUrl');
    }
}
