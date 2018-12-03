<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\DigitalDocumentPermission;

/**
 * An electronic file or document.
 *
 * @see http://schema.org/DigitalDocument
 */
class DigitalDocument extends CreativeWork
{
    /**
     * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public document, specify a grantee with an Audience with audienceType equal to "public".
     *
     * @param DigitalDocumentPermission $value
     *
     * @return $this
     */
    public function hasDigitalDocumentPermission(?DigitalDocumentPermission $value): self
    {
        $this->setProperty('hasDigitalDocumentPermission', $value);

        return $this;
    }
}
