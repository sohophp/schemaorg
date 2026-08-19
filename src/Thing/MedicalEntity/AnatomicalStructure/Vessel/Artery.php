<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

/**
 * A type of blood vessel that specifically carries blood away from the heart.
 * @see https://schema.org/Artery
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
 */
class Artery extends Vessel
{
    /**
     * The branches that comprise the arterial structure.
     * @see https://schema.org/arterialBranch
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function arterialBranch($value)
    {
        $this->setProperty('arterialBranch', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function setArterialBranch($value)
    {
        $this->setProperty('arterialBranch', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure $value
     * @return $this
     */
    public function addArterialBranch($value)
    {
        $current = $this->getProperty('arterialBranch');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('arterialBranch', $current);
        return $this;
    }

    /**
     * @return AnatomicalStructure|array
     */
    public function getArterialBranch()
    {
        return $this->getProperty('arterialBranch');
    }
    /**
     * The area to which the artery supplies blood.
     * @see https://schema.org/supplyTo
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function supplyTo($value)
    {
        $this->setProperty('supplyTo', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function setSupplyTo($value)
    {
        $this->setProperty('supplyTo', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure $value
     * @return $this
     */
    public function addSupplyTo($value)
    {
        $current = $this->getProperty('supplyTo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('supplyTo', $current);
        return $this;
    }

    /**
     * @return AnatomicalStructure|array
     */
    public function getSupplyTo()
    {
        return $this->getProperty('supplyTo');
    }
}
