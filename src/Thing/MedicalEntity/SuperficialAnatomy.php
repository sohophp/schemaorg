<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity;

use Sohophp\SchemaOrg\Thing\MedicalEntity;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalSystem;
use Sohophp\SchemaOrg\Thing\MedicalEntity\AnatomicalStructure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalCondition;

/**
 * Anatomical features that can be observed by sight (without dissection), including the form and proportions of the human body as well as surface landmarks that correspond to deeper subcutaneous structures. Superficial anatomy plays an important role in sports medicine, phlebotomy, and other medical specialties as underlying anatomical structures can be identified through surface palpation. For example, during back surgery, superficial anatomy can be used to palpate and count vertebrae to find the site of incision. Or in phlebotomy, superficial anatomy can be used to locate an underlying vein; for example, the median cubital vein can be located by palpating the borders of the cubital fossa (such as the epicondyles of the humerus) and then looking for the superficial signs of the vein, such as size, prominence, ability to refill after depression, and feel of surrounding tissue support. As another example, in a subluxation (dislocation) of the glenohumeral joint, the bony structure becomes pronounced with the deltoid muscle failing to cover the glenohumeral joint allowing the edges of the scapula to be superficially visible. Here, the superficial anatomy is the visible edges of the scapula, implying the underlying dislocation of the joint (the related anatomical structure).
 * @see https://schema.org/SuperficialAnatomy
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity
 */
class SuperficialAnatomy extends MedicalEntity
{
    /**
     * The significance associated with the superficial anatomy; as an example, how characteristics of the superficial anatomy can suggest underlying medical conditions or courses of treatment.
     * @see https://schema.org/significance
     * @param string|array $value
     * @return $this
     */
    public function significance($value)
    {
        $this->setProperty('significance', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setSignificance($value)
    {
        $this->setProperty('significance', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addSignificance($value)
    {
        $current = $this->getProperty('significance');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('significance', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getSignificance()
    {
        return $this->getProperty('significance');
    }
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
     * Anatomical systems or structures that relate to the superficial anatomy.
     * @see https://schema.org/relatedAnatomy
     * @param AnatomicalSystem|AnatomicalStructure|array $value
     * @return $this
     */
    public function relatedAnatomy($value)
    {
        $this->setProperty('relatedAnatomy', $value);
        return $this;
    }

    /**
     * @param AnatomicalSystem|AnatomicalStructure|array $value
     * @return $this
     */
    public function setRelatedAnatomy($value)
    {
        $this->setProperty('relatedAnatomy', $value);
        return $this;
    }

    /**
     * @param AnatomicalSystem|AnatomicalStructure $value
     * @return $this
     */
    public function addRelatedAnatomy($value)
    {
        $current = $this->getProperty('relatedAnatomy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('relatedAnatomy', $current);
        return $this;
    }

    /**
     * @return AnatomicalSystem|AnatomicalStructure|array
     */
    public function getRelatedAnatomy()
    {
        return $this->getProperty('relatedAnatomy');
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
