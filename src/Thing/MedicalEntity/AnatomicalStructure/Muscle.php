<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Nerve;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure\Vessel;

/**
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 * @see https://schema.org/Muscle
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure
 */
class Muscle extends AnatomicalStructure
{
    /**
     * The place of attachment of a muscle, or what the muscle moves.
     * @see https://schema.org/insertion
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function insertion($value)
    {
        $this->setProperty('insertion', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function setInsertion($value)
    {
        $this->setProperty('insertion', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure $value
     * @return $this
     */
    public function addInsertion($value)
    {
        $current = $this->getProperty('insertion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('insertion', $current);
        return $this;
    }

    /**
     * @return AnatomicalStructure|array
     */
    public function getInsertion()
    {
        return $this->getProperty('insertion');
    }
    /**
     * The movement the muscle generates.
     * @see https://schema.org/muscleAction
     * @param string|array $value
     * @return $this
     */
    public function muscleAction($value)
    {
        $this->setProperty('muscleAction', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setMuscleAction($value)
    {
        $this->setProperty('muscleAction', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addMuscleAction($value)
    {
        $current = $this->getProperty('muscleAction');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('muscleAction', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getMuscleAction()
    {
        return $this->getProperty('muscleAction');
    }
    /**
     * The muscle whose action counteracts the specified muscle.
     * @see https://schema.org/antagonist
     * @param Muscle|array $value
     * @return $this
     */
    public function antagonist($value)
    {
        $this->setProperty('antagonist', $value);
        return $this;
    }

    /**
     * @param Muscle|array $value
     * @return $this
     */
    public function setAntagonist($value)
    {
        $this->setProperty('antagonist', $value);
        return $this;
    }

    /**
     * @param Muscle $value
     * @return $this
     */
    public function addAntagonist($value)
    {
        $current = $this->getProperty('antagonist');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('antagonist', $current);
        return $this;
    }

    /**
     * @return Muscle|array
     */
    public function getAntagonist()
    {
        return $this->getProperty('antagonist');
    }
    /**
     * The underlying innervation associated with the muscle.
     * @see https://schema.org/nerve
     * @param Nerve|array $value
     * @return $this
     */
    public function nerve($value)
    {
        $this->setProperty('nerve', $value);
        return $this;
    }

    /**
     * @param Nerve|array $value
     * @return $this
     */
    public function setNerve($value)
    {
        $this->setProperty('nerve', $value);
        return $this;
    }

    /**
     * @param Nerve $value
     * @return $this
     */
    public function addNerve($value)
    {
        $current = $this->getProperty('nerve');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('nerve', $current);
        return $this;
    }

    /**
     * @return Nerve|array
     */
    public function getNerve()
    {
        return $this->getProperty('nerve');
    }
    /**
     * The blood vessel that carries blood from the heart to the muscle.
     * @see https://schema.org/bloodSupply
     * @param Vessel|array $value
     * @return $this
     */
    public function bloodSupply($value)
    {
        $this->setProperty('bloodSupply', $value);
        return $this;
    }

    /**
     * @param Vessel|array $value
     * @return $this
     */
    public function setBloodSupply($value)
    {
        $this->setProperty('bloodSupply', $value);
        return $this;
    }

    /**
     * @param Vessel $value
     * @return $this
     */
    public function addBloodSupply($value)
    {
        $current = $this->getProperty('bloodSupply');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('bloodSupply', $current);
        return $this;
    }

    /**
     * @return Vessel|array
     */
    public function getBloodSupply()
    {
        return $this->getProperty('bloodSupply');
    }
}
