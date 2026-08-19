<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;

use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalImagingTechnique;

/**
 * Any medical imaging modality typically used for diagnostic purposes.
 * @see https://schema.org/ImagingTest
 * @package Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest
 */
class ImagingTest extends MedicalTest
{
    /**
     * Imaging technique used.
     * @see https://schema.org/imagingTechnique
     * @param MedicalImagingTechnique|array $value
     * @return $this
     */
    public function imagingTechnique($value)
    {
        $this->setProperty('imagingTechnique', $value);
        return $this;
    }

    /**
     * @param MedicalImagingTechnique|array $value
     * @return $this
     */
    public function setImagingTechnique($value)
    {
        $this->setProperty('imagingTechnique', $value);
        return $this;
    }

    /**
     * @param MedicalImagingTechnique $value
     * @return $this
     */
    public function addImagingTechnique($value)
    {
        $current = $this->getProperty('imagingTechnique');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('imagingTechnique', $current);
        return $this;
    }

    /**
     * @return MedicalImagingTechnique|array
     */
    public function getImagingTechnique()
    {
        return $this->getProperty('imagingTechnique');
    }
}
