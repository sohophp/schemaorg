<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Legislation;

use Sohophp\SchemaOrg\Thing\CreativeWork\Legislation;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\LegalValueLevel;

/**
 * A specific object or file containing a Legislation. Note that the same Legislation can be published in multiple files. For example, a digitally signed PDF, a plain PDF and an HTML version.
 * @see https://schema.org/LegislationObject
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\Legislation
 */
class LegislationObject extends Legislation
{
    /**
     * The legal value of this legislation file. The same legislation can be written in multiple files with different legal values. Typically a digitally signed PDF have a "stronger" legal value than the HTML file of the same act.
     * @see https://schema.org/legislationLegalValue
     * @param LegalValueLevel|array $value
     * @return $this
     */
    public function legislationLegalValue($value)
    {
        $this->setProperty('legislationLegalValue', $value);
        return $this;
    }

    /**
     * @param LegalValueLevel|array $value
     * @return $this
     */
    public function setLegislationLegalValue($value)
    {
        $this->setProperty('legislationLegalValue', $value);
        return $this;
    }

    /**
     * @param LegalValueLevel $value
     * @return $this
     */
    public function addLegislationLegalValue($value)
    {
        $current = $this->getProperty('legislationLegalValue');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('legislationLegalValue', $current);
        return $this;
    }

    /**
     * @return LegalValueLevel|array
     */
    public function getLegislationLegalValue()
    {
        return $this->getProperty('legislationLegalValue');
    }
}
