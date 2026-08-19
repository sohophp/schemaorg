<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
 * An anatomical system is a group of anatomical structures that work together to perform a certain task. Anatomical systems, such as organ systems, are one organizing principle of anatomy, and can include circulatory, digestive, endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive, respiratory, skeletal, urinary, vestibular, and other systems.
 * @see https://schema.org/AnatomicalSystem
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity
 */
class AnatomicalSystem extends MedicalEntity
{
    /**
     * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
     * @see https://schema.org/associatedPathophysiology
     * @param string|array $value
     * @return $this
     */
    public function associatedPathophysiology($value)
    {
        $this->setProperty('associatedPathophysiology', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAssociatedPathophysiology($value)
    {
        $this->setProperty('associatedPathophysiology', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAssociatedPathophysiology($value)
    {
        $current = $this->getProperty('associatedPathophysiology');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('associatedPathophysiology', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAssociatedPathophysiology()
    {
        return $this->getProperty('associatedPathophysiology');
    }
    /**
     * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
     * @see https://schema.org/relatedStructure
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function relatedStructure($value)
    {
        $this->setProperty('relatedStructure', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure|array $value
     * @return $this
     */
    public function setRelatedStructure($value)
    {
        $this->setProperty('relatedStructure', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure $value
     * @return $this
     */
    public function addRelatedStructure($value)
    {
        $current = $this->getProperty('relatedStructure');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('relatedStructure', $current);
        return $this;
    }

    /**
     * @return AnatomicalStructure|array
     */
    public function getRelatedStructure()
    {
        return $this->getProperty('relatedStructure');
    }
    /**
     * A medical therapy related to this anatomy.
     * @see https://schema.org/relatedTherapy
     * @param MedicalTherapy|array $value
     * @return $this
     */
    public function relatedTherapy($value)
    {
        $this->setProperty('relatedTherapy', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy|array $value
     * @return $this
     */
    public function setRelatedTherapy($value)
    {
        $this->setProperty('relatedTherapy', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy $value
     * @return $this
     */
    public function addRelatedTherapy($value)
    {
        $current = $this->getProperty('relatedTherapy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('relatedTherapy', $current);
        return $this;
    }

    /**
     * @return MedicalTherapy|array
     */
    public function getRelatedTherapy()
    {
        return $this->getProperty('relatedTherapy');
    }
    /**
     * Specifying something physically contained by something else. Typically used here for the underlying anatomical structures, such as organs, that comprise the anatomical system.
     * @see https://schema.org/comprisedOf
     * @param AnatomicalStructure|AnatomicalSystem|array $value
     * @return $this
     */
    public function comprisedOf($value)
    {
        $this->setProperty('comprisedOf', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure|AnatomicalSystem|array $value
     * @return $this
     */
    public function setComprisedOf($value)
    {
        $this->setProperty('comprisedOf', $value);
        return $this;
    }

    /**
     * @param AnatomicalStructure|AnatomicalSystem $value
     * @return $this
     */
    public function addComprisedOf($value)
    {
        $current = $this->getProperty('comprisedOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('comprisedOf', $current);
        return $this;
    }

    /**
     * @return AnatomicalStructure|AnatomicalSystem|array
     */
    public function getComprisedOf()
    {
        return $this->getProperty('comprisedOf');
    }
    /**
     * A medical condition associated with this anatomy.
     * @see https://schema.org/relatedCondition
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function relatedCondition($value)
    {
        $this->setProperty('relatedCondition', $value);
        return $this;
    }

    /**
     * @param MedicalCondition|array $value
     * @return $this
     */
    public function setRelatedCondition($value)
    {
        $this->setProperty('relatedCondition', $value);
        return $this;
    }

    /**
     * @param MedicalCondition $value
     * @return $this
     */
    public function addRelatedCondition($value)
    {
        $current = $this->getProperty('relatedCondition');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('relatedCondition', $current);
        return $this;
    }

    /**
     * @return MedicalCondition|array
     */
    public function getRelatedCondition()
    {
        return $this->getProperty('relatedCondition');
    }
}
