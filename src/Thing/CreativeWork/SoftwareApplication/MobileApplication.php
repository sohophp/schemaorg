<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

/**
 * A software application designed specifically to work well on a mobile device such as a telephone.
 *
 * @see http://schema.org/MobileApplication
 */
class MobileApplication extends SoftwareApplication
{
    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
     *
     * @param string $value
     *
     * @return $this
     */
    public function carrierRequirements(?string $value): self
    {
        $this->setProperty('carrierRequirements', $value);

        return $this;
    }
}
