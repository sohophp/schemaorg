<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

/**
 * A medical laboratory that offers on-site or off-site diagnostic services.
 * @see https://schema.org/DiagnosticLab
 * @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization
 */
class DiagnosticLab extends MedicalOrganization
{
    /**
     * A diagnostic test or procedure offered by this lab.
     * @see https://schema.org/availableTest
     * @param MedicalTest|array $value
     * @return $this
     */
    public function availableTest($value)
    {
        $this->setProperty('availableTest', $value);
        return $this;
    }

    /**
     * @param MedicalTest|array $value
     * @return $this
     */
    public function setAvailableTest($value)
    {
        $this->setProperty('availableTest', $value);
        return $this;
    }

    /**
     * @param MedicalTest $value
     * @return $this
     */
    public function addAvailableTest($value)
    {
        $current = $this->getProperty('availableTest');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableTest', $current);
        return $this;
    }

    /**
     * @return MedicalTest|array
     */
    public function getAvailableTest()
    {
        return $this->getProperty('availableTest');
    }
}
