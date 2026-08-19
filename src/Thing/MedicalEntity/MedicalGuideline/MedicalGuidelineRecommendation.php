<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline;

/**
 * A guideline recommendation that is regarded as efficacious and where quality of the data supporting the recommendation is sound.
 * @see https://schema.org/MedicalGuidelineRecommendation
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalGuideline
 */
class MedicalGuidelineRecommendation extends MedicalGuideline
{
    /**
     * Strength of the guideline's recommendation (e.g. 'class I').
     * @see https://schema.org/recommendationStrength
     * @param string|array $value
     * @return $this
     */
    public function recommendationStrength($value)
    {
        $this->setProperty('recommendationStrength', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setRecommendationStrength($value)
    {
        $this->setProperty('recommendationStrength', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addRecommendationStrength($value)
    {
        $current = $this->getProperty('recommendationStrength');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('recommendationStrength', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getRecommendationStrength()
    {
        return $this->getProperty('recommendationStrength');
    }
}
