<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
use Sohophp\SchemaOrg\Thing;

/**
 * An event with no duration, like for instance a computer log entry.
 * @see https://schema.org/InstantaneousEvent
 * @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
 */
class InstantaneousEvent extends StructuredValue
{
    /**
     * The instant the event occured.
     * @see https://schema.org/timestamp
     * @param mixed $value
     * @return $this
     */
    public function timestamp($value)
    {
        $this->setProperty('timestamp', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setTimestamp($value)
    {
        $this->setProperty('timestamp', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addTimestamp($value)
    {
        $current = $this->getProperty('timestamp');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('timestamp', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->getProperty('timestamp');
    }
    /**
     * The source or cause of the event.
     * @see https://schema.org/source
     * @param Thing|array $value
     * @return $this
     */
    public function source($value)
    {
        $this->setProperty('source', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setSource($value)
    {
        $this->setProperty('source', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addSource($value)
    {
        $current = $this->getProperty('source');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('source', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getSource()
    {
        return $this->getProperty('source');
    }
    /**
     * Data associated with the event, like for instance a log message.
     * @see https://schema.org/data
     * @param Thing|array $value
     * @return $this
     */
    public function data($value)
    {
        $this->setProperty('data', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setData($value)
    {
        $this->setProperty('data', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addData($value)
    {
        $current = $this->getProperty('data');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('data', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getData()
    {
        return $this->getProperty('data');
    }
}
