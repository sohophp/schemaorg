<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Organization;

/**
 * A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
 *
 * @see http://schema.org/GovernmentService
 */
class GovernmentService extends Service
{
    /**
     * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
     *
     * @param Organization $value
     *
     * @return $this
     */
    public function serviceOperator(?Organization $value): self
    {
        $this->setProperty('serviceOperator', $value);

        return $this;
    }
}
