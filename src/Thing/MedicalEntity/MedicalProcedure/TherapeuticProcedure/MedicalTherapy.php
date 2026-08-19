<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalContraindication;
use Sohophp\SchemaOrg\Thing\MedicalEntity;

/**
 * Any medical intervention designed to prevent, treat, and cure human diseases and medical conditions, including both curative and palliative therapies. Medical therapies are typically processes of care relying upon pharmacotherapy, behavioral therapy, supportive therapy (with fluid or nutrition for example), or detoxification (e.g. hemodialysis) aimed at improving or preventing a health condition.
 * @see https://schema.org/MedicalTherapy
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure
 */
class MedicalTherapy extends TherapeuticProcedure
{
    /**
     * A contraindication for this therapy.
     * @see https://schema.org/contraindication
     * @param string|MedicalContraindication|array $value
     * @return $this
     */
    public function contraindication($value)
    {
        $this->setProperty('contraindication', $value);
        return $this;
    }

    /**
     * @param string|MedicalContraindication|array $value
     * @return $this
     */
    public function setContraindication($value)
    {
        $this->setProperty('contraindication', $value);
        return $this;
    }

    /**
     * @param string|MedicalContraindication $value
     * @return $this
     */
    public function addContraindication($value)
    {
        $current = $this->getProperty('contraindication');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('contraindication', $current);
        return $this;
    }

    /**
     * @return string|MedicalContraindication|array
     */
    public function getContraindication()
    {
        return $this->getProperty('contraindication');
    }
    /**
     * A therapy that duplicates or overlaps this one.
     * @see https://schema.org/duplicateTherapy
     * @param MedicalTherapy|array $value
     * @return $this
     */
    public function duplicateTherapy($value)
    {
        $this->setProperty('duplicateTherapy', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy|array $value
     * @return $this
     */
    public function setDuplicateTherapy($value)
    {
        $this->setProperty('duplicateTherapy', $value);
        return $this;
    }

    /**
     * @param MedicalTherapy $value
     * @return $this
     */
    public function addDuplicateTherapy($value)
    {
        $current = $this->getProperty('duplicateTherapy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('duplicateTherapy', $current);
        return $this;
    }

    /**
     * @return MedicalTherapy|array
     */
    public function getDuplicateTherapy()
    {
        return $this->getProperty('duplicateTherapy');
    }
    /**
     * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
     * @see https://schema.org/seriousAdverseOutcome
     * @param MedicalEntity|array $value
     * @return $this
     */
    public function seriousAdverseOutcome($value)
    {
        $this->setProperty('seriousAdverseOutcome', $value);
        return $this;
    }

    /**
     * @param MedicalEntity|array $value
     * @return $this
     */
    public function setSeriousAdverseOutcome($value)
    {
        $this->setProperty('seriousAdverseOutcome', $value);
        return $this;
    }

    /**
     * @param MedicalEntity $value
     * @return $this
     */
    public function addSeriousAdverseOutcome($value)
    {
        $current = $this->getProperty('seriousAdverseOutcome');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('seriousAdverseOutcome', $current);
        return $this;
    }

    /**
     * @return MedicalEntity|array
     */
    public function getSeriousAdverseOutcome()
    {
        return $this->getProperty('seriousAdverseOutcome');
    }
}
