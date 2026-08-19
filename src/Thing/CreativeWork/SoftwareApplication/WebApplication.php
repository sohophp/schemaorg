<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
 * Web applications.
 * @see https://schema.org/WebApplication
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication
 */
class WebApplication extends SoftwareApplication
{
    /**
     * Specifies browser requirements in human-readable text. For example, 'requires HTML5 support'.
     * @see https://schema.org/browserRequirements
     * @param string|array $value
     * @return $this
     */
    public function browserRequirements($value)
    {
        $this->setProperty('browserRequirements', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBrowserRequirements($value)
    {
        $this->setProperty('browserRequirements', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBrowserRequirements($value)
    {
        $current = $this->getProperty('browserRequirements');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('browserRequirements', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBrowserRequirements()
    {
        return $this->getProperty('browserRequirements');
    }
}
