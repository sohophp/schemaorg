<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\Substance;

use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugCost;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugClass;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPrescriptionStatus;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugStrength;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration\DrugPregnancyCategory;
use Sohophp\SchemaOrg\Thing\Intangible\HealthInsurancePlan;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;

/**
* A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism. Here the term drug is used interchangeably with the term medicine although clinical knowledge make a clear difference between them.
* @see http://schema.org/Drug
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\Substance
*/
class Drug extends Substance
{

    /**
    * True if the drug is available in a generic form (regardless of name).
    * @param bool $value
    * @return $this
    */
    public function isAvailableGenerically(?bool $value)
    {
        $this->setProperty('isAvailableGenerically', $value);
        return $this;
    }

    /**
    * Cost per unit of the drug, as reported by the source being tagged.
    * @param DrugCost $value
    * @return $this
    */
    public function cost(?DrugCost $value)
    {
        $this->setProperty('cost', $value);
        return $this;
    }

    /**
    * The manufacturer of the product.
    * @param Organization $value
    * @return $this
    */
    public function manufacturer(?Organization $value)
    {
        $this->setProperty('manufacturer', $value);
        return $this;
    }

    /**
    * Link to prescribing information for the drug.
    * @param string $value
    * @return $this
    */
    public function prescribingInfo(?string $value)
    {
        $this->setProperty('prescribingInfo', $value);
        return $this;
    }

    /**
    * The class of drug this belongs to (e.g., statins).
    * @param DrugClass $value
    * @return $this
    */
    public function drugClass(?DrugClass $value)
    {
        $this->setProperty('drugClass', $value);
        return $this;
    }

    /**
    * Any FDA or other warnings about the drug (text or URL).
    * @param string|string $value
    * @return $this
    */
    public function warning($value)
    {
        $this->setProperty('warning', $value);
        return $this;
    }

    /**
    * Indicates the status of drug prescription eg. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
    * @param string|DrugPrescriptionStatus $value
    * @return $this
    */
    public function prescriptionStatus($value)
    {
        $this->setProperty('prescriptionStatus', $value);
        return $this;
    }

    /**
    * Any other drug related to this one, for example commonly-prescribed alternatives.
    * @param Drug $value
    * @return $this
    */
    public function relatedDrug(?Drug $value)
    {
        $this->setProperty('relatedDrug', $value);
        return $this;
    }

    /**
    * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
    * @param string $value
    * @return $this
    */
    public function mechanismOfAction(?string $value)
    {
        $this->setProperty('mechanismOfAction', $value);
        return $this;
    }

    /**
    * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
    * @param string $value
    * @return $this
    */
    public function breastfeedingWarning(?string $value)
    {
        $this->setProperty('breastfeedingWarning', $value);
        return $this;
    }

    /**
    * The drug or supplement's legal status, including any controlled substance schedules that apply.
    * @param DrugLegalStatus|string|MedicalEnumeration $value
    * @return $this
    */
    public function legalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
    * The RxCUI drug identifier from RXNORM.
    * @param string $value
    * @return $this
    */
    public function rxcui(?string $value)
    {
        $this->setProperty('rxcui', $value);
        return $this;
    }

    /**
    * Proprietary name given to the diet plan, typically by its originator or creator.
    * @param string $value
    * @return $this
    */
    public function proprietaryName(?string $value)
    {
        $this->setProperty('proprietaryName', $value);
        return $this;
    }

    /**
    * An available dosage strength for the drug.
    * @param DrugStrength $value
    * @return $this
    */
    public function availableStrength(?DrugStrength $value)
    {
        $this->setProperty('availableStrength', $value);
        return $this;
    }

    /**
    * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
    * @param string $value
    * @return $this
    */
    public function alcoholWarning(?string $value)
    {
        $this->setProperty('alcoholWarning', $value);
        return $this;
    }

    /**
    * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
    * @param string $value
    * @return $this
    */
    public function clincalPharmacology(?string $value)
    {
        $this->setProperty('clincalPharmacology', $value);
        return $this;
    }

    /**
    * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
    * @param string $value
    * @return $this
    */
    public function dosageForm(?string $value)
    {
        $this->setProperty('dosageForm', $value);
        return $this;
    }

    /**
    * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
    * @param DoseSchedule $value
    * @return $this
    */
    public function doseSchedule(?DoseSchedule $value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }

    /**
    * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
    * @param string $value
    * @return $this
    */
    public function foodWarning(?string $value)
    {
        $this->setProperty('foodWarning', $value);
        return $this;
    }

    /**
    * An active ingredient, typically chemical compounds and/or biologic substances.
    * @param string $value
    * @return $this
    */
    public function activeIngredient(?string $value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
    * Pregnancy category of this drug.
    * @param DrugPregnancyCategory $value
    * @return $this
    */
    public function pregnancyCategory(?DrugPregnancyCategory $value)
    {
        $this->setProperty('pregnancyCategory', $value);
        return $this;
    }

    /**
    * A route by which this drug may be administered, e.g. 'oral'.
    * @param string $value
    * @return $this
    */
    public function administrationRoute(?string $value)
    {
        $this->setProperty('administrationRoute', $value);
        return $this;
    }

    /**
    * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
    * @param string $value
    * @return $this
    */
    public function pregnancyWarning(?string $value)
    {
        $this->setProperty('pregnancyWarning', $value);
        return $this;
    }

    /**
    * The insurance plans that cover this drug.
    * @param HealthInsurancePlan $value
    * @return $this
    */
    public function includedInHealthInsurancePlan(?HealthInsurancePlan $value)
    {
        $this->setProperty('includedInHealthInsurancePlan', $value);
        return $this;
    }

    /**
    * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
    * @param Drug $value
    * @return $this
    */
    public function interactingDrug(?Drug $value)
    {
        $this->setProperty('interactingDrug', $value);
        return $this;
    }

    /**
    * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
    * @param string $value
    * @return $this
    */
    public function overdosage(?string $value)
    {
        $this->setProperty('overdosage', $value);
        return $this;
    }

    /**
    * Link to the drug's label details.
    * @param string $value
    * @return $this
    */
    public function labelDetails(?string $value)
    {
        $this->setProperty('labelDetails', $value);
        return $this;
    }

    /**
    * True if this item's name is a proprietary/brand name (vs. generic name).
    * @param bool $value
    * @return $this
    */
    public function isProprietary(?bool $value)
    {
        $this->setProperty('isProprietary', $value);
        return $this;
    }

    /**
    * The unit in which the drug is measured, e.g. '5 mg tablet'.
    * @param string $value
    * @return $this
    */
    public function drugUnit(?string $value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
    * The generic name of this drug or supplement.
    * @param string $value
    * @return $this
    */
    public function nonProprietaryName(?string $value)
    {
        $this->setProperty('nonProprietaryName', $value);
        return $this;
    }

    /**
    * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @param MaximumDoseSchedule $value
    * @return $this
    */
    public function maximumIntake(?MaximumDoseSchedule $value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
    * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
    * @param string $value
    * @return $this
    */
    public function clinicalPharmacology(?string $value)
    {
        $this->setProperty('clinicalPharmacology', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\Substance\\Drug','Thing\\Drug');

