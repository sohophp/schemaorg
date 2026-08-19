<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
 * A type of blood vessel that specifically carries blood to the heart.
 * @see https://schema.org/Vein
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel
 */
class Vein extends Vessel
{
    /**
     * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
     * @see https://schema.org/tributary
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function tributary($value)
    {
        $this->setProperty('tributary', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function setTributary($value)
    {
        $this->setProperty('tributary', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure $value
     * @return $this
     */
    public function addTributary($value)
    {
        $current = $this->getProperty('tributary');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('tributary', $current);
        return $this;
    }

    /**
     * @return AnatomicalStructure|array
     */
    public function getTributary()
    {
        return $this->getProperty('tributary');
    }
    /**
     * The anatomical or organ system drained by this vessel; generally refers to a specific part of an organ.
     * @see https://schema.org/regionDrained
     * @param AnatomicalSystem|AnatomicalStructure|array $value
     * @return $this
     */
    public function regionDrained($value)
    {
        $this->setProperty('regionDrained', $value);
        return $this;
    }

    /**
     * @param AnatomicalSystem|AnatomicalStructure|array $value
     * @return $this
     */
    public function setRegionDrained($value)
    {
        $this->setProperty('regionDrained', $value);
        return $this;
    }

    /**
     * @param AnatomicalSystem|AnatomicalStructure $value
     * @return $this
     */
    public function addRegionDrained($value)
    {
        $current = $this->getProperty('regionDrained');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('regionDrained', $current);
        return $this;
    }

    /**
     * @return AnatomicalSystem|AnatomicalStructure|array
     */
    public function getRegionDrained()
    {
        return $this->getProperty('regionDrained');
    }
    /**
     * The vasculature that the vein drains into.
     * @see https://schema.org/drainsTo
     * @param Vessel|array $value
     * @return $this
     */
    public function drainsTo($value)
    {
        $this->setProperty('drainsTo', $value);
        return $this;
    }

    /**
     * @param Vessel|array $value
     * @return $this
     */
    public function setDrainsTo($value)
    {
        $this->setProperty('drainsTo', $value);
        return $this;
    }

    /**
     * @param Vessel $value
     * @return $this
     */
    public function addDrainsTo($value)
    {
        $current = $this->getProperty('drainsTo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('drainsTo', $current);
        return $this;
    }

    /**
     * @return Vessel|array
     */
    public function getDrainsTo()
    {
        return $this->getProperty('drainsTo');
    }
}
