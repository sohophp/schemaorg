<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness\Physician;

use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness\Physician;
use Sohophp\SchemaOrg\Thing\Organization\MedicalOrganization;

/**
 * An individual medical practitioner. For their official address use [[address]], for affiliations to hospitals use [[hospitalAffiliation]]. The [[practicesAt]] property can be used to indicate [[MedicalOrganization]] hospitals, clinics, pharmacies etc. where this physician practices.
 * @see https://schema.org/IndividualPhysician
 * @package Sohophp\SchemaOrg\Thing\Place\LocalBusiness\MedicalBusiness\Physician
 */
class IndividualPhysician extends Physician
{
    /**
     * A [[MedicalOrganization]] where the [[IndividualPhysician]] practices.
     * @see https://schema.org/practicesAt
     * @param MedicalOrganization|array $value
     * @return $this
     */
    public function practicesAt($value)
    {
        $this->setProperty('practicesAt', $value);
        return $this;
    }

    /**
     * @param MedicalOrganization|array $value
     * @return $this
     */
    public function setPracticesAt($value)
    {
        $this->setProperty('practicesAt', $value);
        return $this;
    }

    /**
     * @param MedicalOrganization $value
     * @return $this
     */
    public function addPracticesAt($value)
    {
        $current = $this->getProperty('practicesAt');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('practicesAt', $current);
        return $this;
    }

    /**
     * @return MedicalOrganization|array
     */
    public function getPracticesAt()
    {
        return $this->getProperty('practicesAt');
    }
}
