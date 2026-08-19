<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem\HowToSupply;
use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem\HowToTool;
use Sohophp\SchemaOrg\Quantity\Duration;

/**
 * A direction indicating a single action to do in the instructions for how to achieve a result.
 * @see https://schema.org/HowToDirection
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class HowToDirection extends CreativeWork
{
    /**
     * A media object representing the circumstances before performing this direction.
     * @see https://schema.org/beforeMedia
     * @param MediaObject|string|array $value
     * @return $this
     */
    public function beforeMedia($value)
    {
        $this->setProperty('beforeMedia', $value);
        return $this;
    }

    /**
     * @param MediaObject|string|array $value
     * @return $this
     */
    public function setBeforeMedia($value)
    {
        $this->setProperty('beforeMedia', $value);
        return $this;
    }

    /**
     * @param MediaObject|string $value
     * @return $this
     */
    public function addBeforeMedia($value)
    {
        $current = $this->getProperty('beforeMedia');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('beforeMedia', $current);
        return $this;
    }

    /**
     * @return MediaObject|string|array
     */
    public function getBeforeMedia()
    {
        return $this->getProperty('beforeMedia');
    }
    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     * @see https://schema.org/supply
     * @param string|HowToSupply|array $value
     * @return $this
     */
    public function supply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }

    /**
     * @param string|HowToSupply|array $value
     * @return $this
     */
    public function setSupply($value)
    {
        $this->setProperty('supply', $value);
        return $this;
    }

    /**
     * @param string|HowToSupply $value
     * @return $this
     */
    public function addSupply($value)
    {
        $current = $this->getProperty('supply');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('supply', $current);
        return $this;
    }

    /**
     * @return string|HowToSupply|array
     */
    public function getSupply()
    {
        return $this->getProperty('supply');
    }
    /**
     * A media object representing the circumstances while performing this direction.
     * @see https://schema.org/duringMedia
     * @param string|MediaObject|array $value
     * @return $this
     */
    public function duringMedia($value)
    {
        $this->setProperty('duringMedia', $value);
        return $this;
    }

    /**
     * @param string|MediaObject|array $value
     * @return $this
     */
    public function setDuringMedia($value)
    {
        $this->setProperty('duringMedia', $value);
        return $this;
    }

    /**
     * @param string|MediaObject $value
     * @return $this
     */
    public function addDuringMedia($value)
    {
        $current = $this->getProperty('duringMedia');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('duringMedia', $current);
        return $this;
    }

    /**
     * @return string|MediaObject|array
     */
    public function getDuringMedia()
    {
        return $this->getProperty('duringMedia');
    }
    /**
     * A media object representing the circumstances after performing this direction.
     * @see https://schema.org/afterMedia
     * @param MediaObject|string|array $value
     * @return $this
     */
    public function afterMedia($value)
    {
        $this->setProperty('afterMedia', $value);
        return $this;
    }

    /**
     * @param MediaObject|string|array $value
     * @return $this
     */
    public function setAfterMedia($value)
    {
        $this->setProperty('afterMedia', $value);
        return $this;
    }

    /**
     * @param MediaObject|string $value
     * @return $this
     */
    public function addAfterMedia($value)
    {
        $current = $this->getProperty('afterMedia');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('afterMedia', $current);
        return $this;
    }

    /**
     * @return MediaObject|string|array
     */
    public function getAfterMedia()
    {
        return $this->getProperty('afterMedia');
    }
    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     * @see https://schema.org/tool
     * @param HowToTool|string|array $value
     * @return $this
     */
    public function tool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }

    /**
     * @param HowToTool|string|array $value
     * @return $this
     */
    public function setTool($value)
    {
        $this->setProperty('tool', $value);
        return $this;
    }

    /**
     * @param HowToTool|string $value
     * @return $this
     */
    public function addTool($value)
    {
        $current = $this->getProperty('tool');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('tool', $current);
        return $this;
    }

    /**
     * @return HowToTool|string|array
     */
    public function getTool()
    {
        return $this->getProperty('tool');
    }
    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @see https://schema.org/totalTime
     * @param Duration|array $value
     * @return $this
     */
    public function totalTime($value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setTotalTime($value)
    {
        $this->setProperty('totalTime', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addTotalTime($value)
    {
        $current = $this->getProperty('totalTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('totalTime', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getTotalTime()
    {
        return $this->getProperty('totalTime');
    }
    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @see https://schema.org/performTime
     * @param Duration|array $value
     * @return $this
     */
    public function performTime($value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setPerformTime($value)
    {
        $this->setProperty('performTime', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addPerformTime($value)
    {
        $current = $this->getProperty('performTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('performTime', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getPerformTime()
    {
        return $this->getProperty('performTime');
    }
    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in [ISO 8601 duration format](http://en.wikipedia.org/wiki/ISO_8601).
     * @see https://schema.org/prepTime
     * @param Duration|array $value
     * @return $this
     */
    public function prepTime($value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }

    /**
     * @param Duration|array $value
     * @return $this
     */
    public function setPrepTime($value)
    {
        $this->setProperty('prepTime', $value);
        return $this;
    }

    /**
     * @param Duration $value
     * @return $this
     */
    public function addPrepTime($value)
    {
        $current = $this->getProperty('prepTime');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('prepTime', $current);
        return $this;
    }

    /**
     * @return Duration|array
     */
    public function getPrepTime()
    {
        return $this->getProperty('prepTime');
    }
}
