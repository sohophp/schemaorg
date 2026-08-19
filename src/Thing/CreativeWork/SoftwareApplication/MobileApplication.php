<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
 * A software application designed specifically to work well on a mobile device such as a telephone.
 * @see https://schema.org/MobileApplication
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication
 */
class MobileApplication extends SoftwareApplication
{
    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
     * @see https://schema.org/carrierRequirements
     * @param string|array $value
     * @return $this
     */
    public function carrierRequirements($value)
    {
        $this->setProperty('carrierRequirements', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setCarrierRequirements($value)
    {
        $this->setProperty('carrierRequirements', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addCarrierRequirements($value)
    {
        $current = $this->getProperty('carrierRequirements');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('carrierRequirements', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getCarrierRequirements()
    {
        return $this->getProperty('carrierRequirements');
    }
}
