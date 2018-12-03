<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DigitalDocumentPermissionType;

/**
 * A permission for a particular person or group to access a particular file.
 *
 * @see http://schema.org/DigitalDocumentPermission
 */
class DigitalDocumentPermission extends Intangible
{
    /**
     * The person, organization, contact point, or audience that has been granted this permission.
     *
     * @param ContactPoint|Audience|Person|Organization $value
     *
     * @return $this
     */
    public function grantee($value): self
    {
        $this->setProperty('grantee', $value);

        return $this;
    }

    /**
     * The type of permission granted the person, organization, or audience.
     *
     * @param DigitalDocumentPermissionType $value
     *
     * @return $this
     */
    public function permissionType(?DigitalDocumentPermissionType $value): self
    {
        $this->setProperty('permissionType', $value);

        return $this;
    }
}
