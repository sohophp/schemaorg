<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugStrength;
use Sohophp\SchemaOrg\Thing\MedicalEntity\DrugClass;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;
use Sohophp\SchemaOrg\Thing\Intangible\HealthInsurancePlan;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;

/**
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism. Here the term drug is used interchangeably with the term medicine although clinical knowledge makes a clear difference between them.
 * @see https://schema.org/Drug
 * @package Sohophp\SchemaOrg\Thing\Product
 */
class Drug extends Product
{
    /**
     * An available dosage strength for the drug.
     * @see https://schema.org/availableStrength
     * @param DrugStrength|array $value
     * @return $this
     */
    public function availableStrength($value)
    {
        $this->setProperty('availableStrength', $value);
        return $this;
    }

    /**
     * @param DrugStrength|array $value
     * @return $this
     */
    public function setAvailableStrength($value)
    {
        $this->setProperty('availableStrength', $value);
        return $this;
    }

    /**
     * @param DrugStrength $value
     * @return $this
     */
    public function addAvailableStrength($value)
    {
        $current = $this->getProperty('availableStrength');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availableStrength', $current);
        return $this;
    }

    /**
     * @return DrugStrength|array
     */
    public function getAvailableStrength()
    {
        return $this->getProperty('availableStrength');
    }
    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     * @see https://schema.org/isProprietary
     * @param bool|array $value
     * @return $this
     */
    public function isProprietary($value)
    {
        $this->setProperty('isProprietary', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setIsProprietary($value)
    {
        $this->setProperty('isProprietary', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addIsProprietary($value)
    {
        $current = $this->getProperty('isProprietary');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isProprietary', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getIsProprietary()
    {
        return $this->getProperty('isProprietary');
    }
    /**
     * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
     * @see https://schema.org/dosageForm
     * @param string|array $value
     * @return $this
     */
    public function dosageForm($value)
    {
        $this->setProperty('dosageForm', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDosageForm($value)
    {
        $this->setProperty('dosageForm', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDosageForm($value)
    {
        $current = $this->getProperty('dosageForm');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('dosageForm', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDosageForm()
    {
        return $this->getProperty('dosageForm');
    }
    /**
     * The class of drug this belongs to (e.g., statins).
     * @see https://schema.org/drugClass
     * @param DrugClass|array $value
     * @return $this
     */
    public function drugClass($value)
    {
        $this->setProperty('drugClass', $value);
        return $this;
    }

    /**
     * @param DrugClass|array $value
     * @return $this
     */
    public function setDrugClass($value)
    {
        $this->setProperty('drugClass', $value);
        return $this;
    }

    /**
     * @param DrugClass $value
     * @return $this
     */
    public function addDrugClass($value)
    {
        $current = $this->getProperty('drugClass');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('drugClass', $current);
        return $this;
    }

    /**
     * @return DrugClass|array
     */
    public function getDrugClass()
    {
        return $this->getProperty('drugClass');
    }
    /**
     * An active ingredient, typically chemical compounds and/or biologic substances.
     * @see https://schema.org/activeIngredient
     * @param string|array $value
     * @return $this
     */
    public function activeIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setActiveIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addActiveIngredient($value)
    {
        $current = $this->getProperty('activeIngredient');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('activeIngredient', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getActiveIngredient()
    {
        return $this->getProperty('activeIngredient');
    }
    /**
     * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
     * @see https://schema.org/prescriptionStatus
     * @param string|DrugPrescriptionStatus|array $value
     * @return $this
     */
    public function prescriptionStatus($value)
    {
        $this->setProperty('prescriptionStatus', $value);
        return $this;
    }

    /**
     * @param string|DrugPrescriptionStatus|array $value
     * @return $this
     */
    public function setPrescriptionStatus($value)
    {
        $this->setProperty('prescriptionStatus', $value);
        return $this;
    }

    /**
     * @param string|DrugPrescriptionStatus $value
     * @return $this
     */
    public function addPrescriptionStatus($value)
    {
        $current = $this->getProperty('prescriptionStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('prescriptionStatus', $current);
        return $this;
    }

    /**
     * @return string|DrugPrescriptionStatus|array
     */
    public function getPrescriptionStatus()
    {
        return $this->getProperty('prescriptionStatus');
    }
    /**
     * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
     * @see https://schema.org/maximumIntake
     * @param MaximumDoseSchedule|array $value
     * @return $this
     */
    public function maximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
     * @param MaximumDoseSchedule|array $value
     * @return $this
     */
    public function setMaximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
     * @param MaximumDoseSchedule $value
     * @return $this
     */
    public function addMaximumIntake($value)
    {
        $current = $this->getProperty('maximumIntake');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('maximumIntake', $current);
        return $this;
    }

    /**
     * @return MaximumDoseSchedule|array
     */
    public function getMaximumIntake()
    {
        return $this->getProperty('maximumIntake');
    }
    /**
     * The insurance plans that cover this drug.
     * @see https://schema.org/includedInHealthInsurancePlan
     * @param HealthInsurancePlan|array $value
     * @return $this
     */
    public function includedInHealthInsurancePlan($value)
    {
        $this->setProperty('includedInHealthInsurancePlan', $value);
        return $this;
    }

    /**
     * @param HealthInsurancePlan|array $value
     * @return $this
     */
    public function setIncludedInHealthInsurancePlan($value)
    {
        $this->setProperty('includedInHealthInsurancePlan', $value);
        return $this;
    }

    /**
     * @param HealthInsurancePlan $value
     * @return $this
     */
    public function addIncludedInHealthInsurancePlan($value)
    {
        $current = $this->getProperty('includedInHealthInsurancePlan');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('includedInHealthInsurancePlan', $current);
        return $this;
    }

    /**
     * @return HealthInsurancePlan|array
     */
    public function getIncludedInHealthInsurancePlan()
    {
        return $this->getProperty('includedInHealthInsurancePlan');
    }
    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
     * @see https://schema.org/foodWarning
     * @param string|array $value
     * @return $this
     */
    public function foodWarning($value)
    {
        $this->setProperty('foodWarning', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setFoodWarning($value)
    {
        $this->setProperty('foodWarning', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFoodWarning($value)
    {
        $current = $this->getProperty('foodWarning');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('foodWarning', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getFoodWarning()
    {
        return $this->getProperty('foodWarning');
    }
    /**
     * Pregnancy category of this drug.
     * @see https://schema.org/pregnancyCategory
     * @param DrugPregnancyCategory|array $value
     * @return $this
     */
    public function pregnancyCategory($value)
    {
        $this->setProperty('pregnancyCategory', $value);
        return $this;
    }

    /**
     * @param DrugPregnancyCategory|array $value
     * @return $this
     */
    public function setPregnancyCategory($value)
    {
        $this->setProperty('pregnancyCategory', $value);
        return $this;
    }

    /**
     * @param DrugPregnancyCategory $value
     * @return $this
     */
    public function addPregnancyCategory($value)
    {
        $current = $this->getProperty('pregnancyCategory');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pregnancyCategory', $current);
        return $this;
    }

    /**
     * @return DrugPregnancyCategory|array
     */
    public function getPregnancyCategory()
    {
        return $this->getProperty('pregnancyCategory');
    }
    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     * @see https://schema.org/drugUnit
     * @param string|array $value
     * @return $this
     */
    public function drugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setDrugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addDrugUnit($value)
    {
        $current = $this->getProperty('drugUnit');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('drugUnit', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getDrugUnit()
    {
        return $this->getProperty('drugUnit');
    }
    /**
     * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
     * @see https://schema.org/alcoholWarning
     * @param string|array $value
     * @return $this
     */
    public function alcoholWarning($value)
    {
        $this->setProperty('alcoholWarning', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAlcoholWarning($value)
    {
        $this->setProperty('alcoholWarning', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAlcoholWarning($value)
    {
        $current = $this->getProperty('alcoholWarning');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('alcoholWarning', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAlcoholWarning()
    {
        return $this->getProperty('alcoholWarning');
    }
    /**
     * True if the drug is available in a generic form (regardless of name).
     * @see https://schema.org/isAvailableGenerically
     * @param bool|array $value
     * @return $this
     */
    public function isAvailableGenerically($value)
    {
        $this->setProperty('isAvailableGenerically', $value);
        return $this;
    }

    /**
     * @param bool|array $value
     * @return $this
     */
    public function setIsAvailableGenerically($value)
    {
        $this->setProperty('isAvailableGenerically', $value);
        return $this;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function addIsAvailableGenerically($value)
    {
        $current = $this->getProperty('isAvailableGenerically');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('isAvailableGenerically', $current);
        return $this;
    }

    /**
     * @return bool|array
     */
    public function getIsAvailableGenerically()
    {
        return $this->getProperty('isAvailableGenerically');
    }
    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     * @see https://schema.org/clinicalPharmacology
     * @param string|array $value
     * @return $this
     */
    public function clinicalPharmacology($value)
    {
        $this->setProperty('clinicalPharmacology', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setClinicalPharmacology($value)
    {
        $this->setProperty('clinicalPharmacology', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addClinicalPharmacology($value)
    {
        $current = $this->getProperty('clinicalPharmacology');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('clinicalPharmacology', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getClinicalPharmacology()
    {
        return $this->getProperty('clinicalPharmacology');
    }
    /**
     * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
     * @see https://schema.org/doseSchedule
     * @param DoseSchedule|array $value
     * @return $this
     */
    public function doseSchedule($value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }

    /**
     * @param DoseSchedule|array $value
     * @return $this
     */
    public function setDoseSchedule($value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }

    /**
     * @param DoseSchedule $value
     * @return $this
     */
    public function addDoseSchedule($value)
    {
        $current = $this->getProperty('doseSchedule');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('doseSchedule', $current);
        return $this;
    }

    /**
     * @return DoseSchedule|array
     */
    public function getDoseSchedule()
    {
        return $this->getProperty('doseSchedule');
    }
    /**
     * Link to prescribing information for the drug.
     * @see https://schema.org/prescribingInfo
     * @param string|array $value
     * @return $this
     */
    public function prescribingInfo($value)
    {
        $this->setProperty('prescribingInfo', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPrescribingInfo($value)
    {
        $this->setProperty('prescribingInfo', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPrescribingInfo($value)
    {
        $current = $this->getProperty('prescribingInfo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('prescribingInfo', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPrescribingInfo()
    {
        return $this->getProperty('prescribingInfo');
    }
    /**
     * Link to the drug's label details.
     * @see https://schema.org/labelDetails
     * @param string|array $value
     * @return $this
     */
    public function labelDetails($value)
    {
        $this->setProperty('labelDetails', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setLabelDetails($value)
    {
        $this->setProperty('labelDetails', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addLabelDetails($value)
    {
        $current = $this->getProperty('labelDetails');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('labelDetails', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getLabelDetails()
    {
        return $this->getProperty('labelDetails');
    }
    /**
     * Proprietary name given to the diet plan, typically by its originator or creator.
     * @see https://schema.org/proprietaryName
     * @param string|array $value
     * @return $this
     */
    public function proprietaryName($value)
    {
        $this->setProperty('proprietaryName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setProprietaryName($value)
    {
        $this->setProperty('proprietaryName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addProprietaryName($value)
    {
        $current = $this->getProperty('proprietaryName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('proprietaryName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getProprietaryName()
    {
        return $this->getProperty('proprietaryName');
    }
    /**
     * The RxCUI drug identifier from RXNORM.
     * @see https://schema.org/rxcui
     * @param string|array $value
     * @return $this
     */
    public function rxcui($value)
    {
        $this->setProperty('rxcui', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setRxcui($value)
    {
        $this->setProperty('rxcui', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addRxcui($value)
    {
        $current = $this->getProperty('rxcui');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('rxcui', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getRxcui()
    {
        return $this->getProperty('rxcui');
    }
    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
     * @see https://schema.org/breastfeedingWarning
     * @param string|array $value
     * @return $this
     */
    public function breastfeedingWarning($value)
    {
        $this->setProperty('breastfeedingWarning', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setBreastfeedingWarning($value)
    {
        $this->setProperty('breastfeedingWarning', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addBreastfeedingWarning($value)
    {
        $current = $this->getProperty('breastfeedingWarning');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('breastfeedingWarning', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getBreastfeedingWarning()
    {
        return $this->getProperty('breastfeedingWarning');
    }
    /**
     * Any FDA or other warnings about the drug (text or URL).
     * @see https://schema.org/warning
     * @param string|array $value
     * @return $this
     */
    public function warning($value)
    {
        $this->setProperty('warning', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setWarning($value)
    {
        $this->setProperty('warning', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addWarning($value)
    {
        $current = $this->getProperty('warning');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('warning', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getWarning()
    {
        return $this->getProperty('warning');
    }
    /**
     * The drug or supplement's legal status, including any controlled substance schedules that apply.
     * @see https://schema.org/legalStatus
     * @param DrugLegalStatus|MedicalEnumeration|string|array $value
     * @return $this
     */
    public function legalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
     * @param DrugLegalStatus|MedicalEnumeration|string|array $value
     * @return $this
     */
    public function setLegalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
     * @param DrugLegalStatus|MedicalEnumeration|string $value
     * @return $this
     */
    public function addLegalStatus($value)
    {
        $current = $this->getProperty('legalStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('legalStatus', $current);
        return $this;
    }

    /**
     * @return DrugLegalStatus|MedicalEnumeration|string|array
     */
    public function getLegalStatus()
    {
        return $this->getProperty('legalStatus');
    }
    /**
     * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
     * @see https://schema.org/interactingDrug
     * @param Drug|array $value
     * @return $this
     */
    public function interactingDrug($value)
    {
        $this->setProperty('interactingDrug', $value);
        return $this;
    }

    /**
     * @param Drug|array $value
     * @return $this
     */
    public function setInteractingDrug($value)
    {
        $this->setProperty('interactingDrug', $value);
        return $this;
    }

    /**
     * @param Drug $value
     * @return $this
     */
    public function addInteractingDrug($value)
    {
        $current = $this->getProperty('interactingDrug');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('interactingDrug', $current);
        return $this;
    }

    /**
     * @return Drug|array
     */
    public function getInteractingDrug()
    {
        return $this->getProperty('interactingDrug');
    }
    /**
     * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
     * @see https://schema.org/mechanismOfAction
     * @param string|array $value
     * @return $this
     */
    public function mechanismOfAction($value)
    {
        $this->setProperty('mechanismOfAction', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setMechanismOfAction($value)
    {
        $this->setProperty('mechanismOfAction', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addMechanismOfAction($value)
    {
        $current = $this->getProperty('mechanismOfAction');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('mechanismOfAction', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getMechanismOfAction()
    {
        return $this->getProperty('mechanismOfAction');
    }
    /**
     * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
     * @see https://schema.org/overdosage
     * @param string|array $value
     * @return $this
     */
    public function overdosage($value)
    {
        $this->setProperty('overdosage', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setOverdosage($value)
    {
        $this->setProperty('overdosage', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addOverdosage($value)
    {
        $current = $this->getProperty('overdosage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('overdosage', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getOverdosage()
    {
        return $this->getProperty('overdosage');
    }
    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
     * @see https://schema.org/pregnancyWarning
     * @param string|array $value
     * @return $this
     */
    public function pregnancyWarning($value)
    {
        $this->setProperty('pregnancyWarning', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setPregnancyWarning($value)
    {
        $this->setProperty('pregnancyWarning', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addPregnancyWarning($value)
    {
        $current = $this->getProperty('pregnancyWarning');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('pregnancyWarning', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getPregnancyWarning()
    {
        return $this->getProperty('pregnancyWarning');
    }
    /**
     * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
     * @see https://schema.org/clincalPharmacology
     * @param string|array $value
     * @return $this
     */
    public function clincalPharmacology($value)
    {
        $this->setProperty('clincalPharmacology', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setClincalPharmacology($value)
    {
        $this->setProperty('clincalPharmacology', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addClincalPharmacology($value)
    {
        $current = $this->getProperty('clincalPharmacology');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('clincalPharmacology', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getClincalPharmacology()
    {
        return $this->getProperty('clincalPharmacology');
    }
    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     * @see https://schema.org/administrationRoute
     * @param string|array $value
     * @return $this
     */
    public function administrationRoute($value)
    {
        $this->setProperty('administrationRoute', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setAdministrationRoute($value)
    {
        $this->setProperty('administrationRoute', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addAdministrationRoute($value)
    {
        $current = $this->getProperty('administrationRoute');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('administrationRoute', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getAdministrationRoute()
    {
        return $this->getProperty('administrationRoute');
    }
    /**
     * Any other drug related to this one, for example commonly-prescribed alternatives.
     * @see https://schema.org/relatedDrug
     * @param Drug|array $value
     * @return $this
     */
    public function relatedDrug($value)
    {
        $this->setProperty('relatedDrug', $value);
        return $this;
    }

    /**
     * @param Drug|array $value
     * @return $this
     */
    public function setRelatedDrug($value)
    {
        $this->setProperty('relatedDrug', $value);
        return $this;
    }

    /**
     * @param Drug $value
     * @return $this
     */
    public function addRelatedDrug($value)
    {
        $current = $this->getProperty('relatedDrug');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('relatedDrug', $current);
        return $this;
    }

    /**
     * @return Drug|array
     */
    public function getRelatedDrug()
    {
        return $this->getProperty('relatedDrug');
    }
    /**
     * The generic name of this drug or supplement.
     * @see https://schema.org/nonProprietaryName
     * @param string|array $value
     * @return $this
     */
    public function nonProprietaryName($value)
    {
        $this->setProperty('nonProprietaryName', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setNonProprietaryName($value)
    {
        $this->setProperty('nonProprietaryName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addNonProprietaryName($value)
    {
        $current = $this->getProperty('nonProprietaryName');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('nonProprietaryName', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getNonProprietaryName()
    {
        return $this->getProperty('nonProprietaryName');
    }
}
