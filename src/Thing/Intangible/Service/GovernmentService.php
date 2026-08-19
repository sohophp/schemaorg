<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Service;

use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
use Sohophp\SchemaOrg\Thing\Organization;

/**
 * A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
 * @see https://schema.org/GovernmentService
 * @package Sohophp\SchemaOrg\Thing\Intangible\Service
 */
class GovernmentService extends Service
{
    /**
     * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
     * @see https://schema.org/jurisdiction
     * @param string|AdministrativeArea|array $value
     * @return $this
     */
    public function jurisdiction($value)
    {
        $this->setProperty('jurisdiction', $value);
        return $this;
    }

    /**
     * @param string|AdministrativeArea|array $value
     * @return $this
     */
    public function setJurisdiction($value)
    {
        $this->setProperty('jurisdiction', $value);
        return $this;
    }

    /**
     * @param string|AdministrativeArea $value
     * @return $this
     */
    public function addJurisdiction($value)
    {
        $current = $this->getProperty('jurisdiction');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('jurisdiction', $current);
        return $this;
    }

    /**
     * @return string|AdministrativeArea|array
     */
    public function getJurisdiction()
    {
        return $this->getProperty('jurisdiction');
    }
    /**
     * The operating organization, if different from the provider. This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
     * @see https://schema.org/serviceOperator
     * @param Organization|array $value
     * @return $this
     */
    public function serviceOperator($value)
    {
        $this->setProperty('serviceOperator', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setServiceOperator($value)
    {
        $this->setProperty('serviceOperator', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addServiceOperator($value)
    {
        $current = $this->getProperty('serviceOperator');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('serviceOperator', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getServiceOperator()
    {
        return $this->getProperty('serviceOperator');
    }
}
