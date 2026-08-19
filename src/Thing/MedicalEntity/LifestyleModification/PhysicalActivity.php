<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;

use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
use Sohophp\SchemaOrg\Thing\MedicalEntity\SuperficialAnatomy;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;

/**
 * Any bodily activity that enhances or maintains physical fitness and overall health and wellness. Includes activity that is part of daily living and routine, structured exercise, and exercise prescribed as part of a medical treatment or recovery plan.
 * @see https://schema.org/PhysicalActivity
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification
 */
class PhysicalActivity extends LifestyleModification
{
    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @see https://schema.org/category
     * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
     * @return $this
     */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
     * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
     * @return $this
     */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
     * @param string|Thing|PhysicalActivityCategory|CategoryCode $value
     * @return $this
     */
    public function addCategory($value)
    {
        $current = $this->getProperty('category');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('category', $current);
        return $this;
    }

    /**
     * @return string|Thing|PhysicalActivityCategory|CategoryCode|array
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }
    /**
     * The anatomy of the underlying organ system or structures associated with this entity.
     * @see https://schema.org/associatedAnatomy
     * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem|array $value
     * @return $this
     */
    public function associatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }

    /**
     * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem|array $value
     * @return $this
     */
    public function setAssociatedAnatomy($value)
    {
        $this->setProperty('associatedAnatomy', $value);
        return $this;
    }

    /**
     * @param SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem $value
     * @return $this
     */
    public function addAssociatedAnatomy($value)
    {
        $current = $this->getProperty('associatedAnatomy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('associatedAnatomy', $current);
        return $this;
    }

    /**
     * @return SuperficialAnatomy|AnatomicalStructure|AnatomicalSystem|array
     */
    public function getAssociatedAnatomy()
    {
        return $this->getProperty('associatedAnatomy');
    }
    /**
     * The characteristics of associated patients, such as age, gender, race etc.
     * @see https://schema.org/epidemiology
     * @param string|array $value
     * @return $this
     */
    public function epidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEpidemiology($value)
    {
        $this->setProperty('epidemiology', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEpidemiology($value)
    {
        $current = $this->getProperty('epidemiology');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('epidemiology', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEpidemiology()
    {
        return $this->getProperty('epidemiology');
    }
    /**
     * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
     * @see https://schema.org/pathophysiology
     * @param string|array $value
     * @return $this
     */
    public function pathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPathophysiology($value)
    {
        $this->setProperty('pathophysiology', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPathophysiology($value)
    {
        $current = $this->getProperty('pathophysiology');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pathophysiology', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPathophysiology()
    {
        return $this->getProperty('pathophysiology');
    }
}
