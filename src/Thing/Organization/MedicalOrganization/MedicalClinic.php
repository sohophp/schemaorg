<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalTest;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalProcedure\TherapeuticProcedure\MedicalTherapy;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\MedicalSpecialty;

/**
 * A facility, often associated with a hospital or medical school, that is devoted to the specific diagnosis and/or healthcare. Previously limited to outpatients but with evolution it may be open to inpatients as well.
 * @see https://schema.org/MedicalClinic
 * @package Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization
 */
class MedicalClinic extends MedicalOrganization
{
    /**
     * A medical service available from this provider.
     * @see https://schema.org/availableService
     * @param MedicalProcedure|MedicalTest|MedicalTherapy|array $value
     * @return $this
     */
    public function availableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }

    /**
     * @param MedicalProcedure|MedicalTest|MedicalTherapy|array $value
     * @return $this
     */
    public function setAvailableService($value)
    {
        $this->setProperty('availableService', $value);
        return $this;
    }

    /**
     * @param MedicalProcedure|MedicalTest|MedicalTherapy $value
     * @return $this
     */
    public function addAvailableService($value)
    {
        $current = $this->getProperty('availableService');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableService', $current);
        return $this;
    }

    /**
     * @return MedicalProcedure|MedicalTest|MedicalTherapy|array
     */
    public function getAvailableService()
    {
        return $this->getProperty('availableService');
    }
    /**
     * A medical specialty of the provider.
     * @see https://schema.org/medicalSpecialty
     * @param MedicalSpecialty|array $value
     * @return $this
     */
    public function medicalSpecialty($value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }

    /**
     * @param MedicalSpecialty|array $value
     * @return $this
     */
    public function setMedicalSpecialty($value)
    {
        $this->setProperty('medicalSpecialty', $value);
        return $this;
    }

    /**
     * @param MedicalSpecialty $value
     * @return $this
     */
    public function addMedicalSpecialty($value)
    {
        $current = $this->getProperty('medicalSpecialty');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('medicalSpecialty', $current);
        return $this;
    }

    /**
     * @return MedicalSpecialty|array
     */
    public function getMedicalSpecialty()
    {
        return $this->getProperty('medicalSpecialty');
    }
}
