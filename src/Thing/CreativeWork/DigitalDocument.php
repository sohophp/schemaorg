<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\DigitalDocumentPermission;

/**
 * An electronic file or document.
 * @see https://schema.org/DigitalDocument
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class DigitalDocument extends CreativeWork
{
    /**
     * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public document, specify a grantee with an Audience with audienceType equal to "public".
     * @see https://schema.org/hasDigitalDocumentPermission
     * @param DigitalDocumentPermission|array $value
     * @return $this
     */
    public function hasDigitalDocumentPermission($value)
    {
        $this->setProperty('hasDigitalDocumentPermission', $value);
        return $this;
    }

    /**
     * @param DigitalDocumentPermission|array $value
     * @return $this
     */
    public function setHasDigitalDocumentPermission($value)
    {
        $this->setProperty('hasDigitalDocumentPermission', $value);
        return $this;
    }

    /**
     * @param DigitalDocumentPermission $value
     * @return $this
     */
    public function addHasDigitalDocumentPermission($value)
    {
        $current = $this->getProperty('hasDigitalDocumentPermission');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasDigitalDocumentPermission', $current);
        return $this;
    }

    /**
     * @return DigitalDocumentPermission|array
     */
    public function getHasDigitalDocumentPermission()
    {
        return $this->getProperty('hasDigitalDocumentPermission');
    }
}
