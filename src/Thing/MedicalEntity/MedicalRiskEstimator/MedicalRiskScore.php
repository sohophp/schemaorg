<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator;

/**
 * A simple system that adds up the number of risk factors to yield a score that is associated with prognosis, e.g. CHAD score, TIMI risk score.
 * @see https://schema.org/MedicalRiskScore
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalRiskEstimator
 */
class MedicalRiskScore extends MedicalRiskEstimator
{
    /**
     * The algorithm or rules to follow to compute the score.
     * @see https://schema.org/algorithm
     * @param string|array $value
     * @return $this
     */
    public function algorithm($value)
    {
        $this->setProperty('algorithm', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAlgorithm($value)
    {
        $this->setProperty('algorithm', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAlgorithm($value)
    {
        $current = $this->getProperty('algorithm');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('algorithm', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAlgorithm()
    {
        return $this->getProperty('algorithm');
    }
}
