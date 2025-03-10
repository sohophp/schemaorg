<?php
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
* A chemical or biologic substance, used as a medical therapy, that has a
 * physiological effect on an organism. Here the term drug is used
 * interchangeably with the term medicine although clinical knowledge make a
 * clear difference between them.
* @see http://schema.org/Drug
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\Substance
*/
class Drug extends Substance
{


    /**
        * True if the drug is available in a generic form (regardless of name).
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function isAvailableGenerically($value)
    {
        $this->setProperty('isAvailableGenerically', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setIsAvailableGenerically($value)
    {
        $this->setProperty('isAvailableGenerically', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsAvailableGenerically()
    {
       return $this->getProperty('isAvailableGenerically');
    }


    /**
        * Cost per unit of the drug, as reported by the source being tagged.
        * @param DrugCost|array|string|mixed $value
    * @return $this
    */
    public function cost($value)
    {
        $this->setProperty('cost', $value);
        return $this;
    }

    /**
    * @param DrugCost|array|string|mixed $value
    * @return $this
    */
    public function setCost($value)
    {
        $this->setProperty('cost', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCost()
    {
       return $this->getProperty('cost');
    }


    /**
        * The manufacturer of the product.
        * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function manufacturer($value)
    {
        $this->setProperty('manufacturer', $value);
        return $this;
    }

    /**
    * @param Organization|array|string|mixed $value
    * @return $this
    */
    public function setManufacturer($value)
    {
        $this->setProperty('manufacturer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getManufacturer()
    {
       return $this->getProperty('manufacturer');
    }


    /**
        * Link to prescribing information for the drug.
        * @param string|array|mixed $value
    * @return $this
    */
    public function prescribingInfo($value)
    {
        $this->setProperty('prescribingInfo', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPrescribingInfo($value)
    {
        $this->setProperty('prescribingInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrescribingInfo()
    {
       return $this->getProperty('prescribingInfo');
    }


    /**
        * The class of drug this belongs to (e.g., statins).
        * @param DrugClass|array|string|mixed $value
    * @return $this
    */
    public function drugClass($value)
    {
        $this->setProperty('drugClass', $value);
        return $this;
    }

    /**
    * @param DrugClass|array|string|mixed $value
    * @return $this
    */
    public function setDrugClass($value)
    {
        $this->setProperty('drugClass', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDrugClass()
    {
       return $this->getProperty('drugClass');
    }


    /**
        * Any FDA or other warnings about the drug (text or URL).
        * @param string|string|array|mixed $value
    * @return $this
    */
    public function warning($value)
    {
        $this->setProperty('warning', $value);
        return $this;
    }

    /**
    * @param string|string|array|mixed $value
    * @return $this
    */
    public function setWarning($value)
    {
        $this->setProperty('warning', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWarning()
    {
       return $this->getProperty('warning');
    }


    /**
        * Indicates the status of drug prescription eg. local catalogs classifications
 * or whether the drug is available by prescription or over-the-counter, etc.
        * @param string|DrugPrescriptionStatus|array|mixed $value
    * @return $this
    */
    public function prescriptionStatus($value)
    {
        $this->setProperty('prescriptionStatus', $value);
        return $this;
    }

    /**
    * @param string|DrugPrescriptionStatus|array|mixed $value
    * @return $this
    */
    public function setPrescriptionStatus($value)
    {
        $this->setProperty('prescriptionStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPrescriptionStatus()
    {
       return $this->getProperty('prescriptionStatus');
    }


    /**
        * Any other drug related to this one, for example commonly-prescribed
 * alternatives.
        * @param Drug|array|string|mixed $value
    * @return $this
    */
    public function relatedDrug($value)
    {
        $this->setProperty('relatedDrug', $value);
        return $this;
    }

    /**
    * @param Drug|array|string|mixed $value
    * @return $this
    */
    public function setRelatedDrug($value)
    {
        $this->setProperty('relatedDrug', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRelatedDrug()
    {
       return $this->getProperty('relatedDrug');
    }


    /**
        * The specific biochemical interaction through which this drug or supplement
 * produces its pharmacological effect.
        * @param string|array|mixed $value
    * @return $this
    */
    public function mechanismOfAction($value)
    {
        $this->setProperty('mechanismOfAction', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setMechanismOfAction($value)
    {
        $this->setProperty('mechanismOfAction', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMechanismOfAction()
    {
       return $this->getProperty('mechanismOfAction');
    }


    /**
        * Any precaution, guidance, contraindication, etc. related to this drug's use
 * by breastfeeding mothers.
        * @param string|array|mixed $value
    * @return $this
    */
    public function breastfeedingWarning($value)
    {
        $this->setProperty('breastfeedingWarning', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setBreastfeedingWarning($value)
    {
        $this->setProperty('breastfeedingWarning', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBreastfeedingWarning()
    {
       return $this->getProperty('breastfeedingWarning');
    }


    /**
        * The drug or supplement's legal status, including any controlled substance
 * schedules that apply.
        * @param DrugLegalStatus|string|MedicalEnumeration|array|mixed $value
    * @return $this
    */
    public function legalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
    * @param DrugLegalStatus|string|MedicalEnumeration|array|mixed $value
    * @return $this
    */
    public function setLegalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLegalStatus()
    {
       return $this->getProperty('legalStatus');
    }


    /**
        * The RxCUI drug identifier from RXNORM.
        * @param string|array|mixed $value
    * @return $this
    */
    public function rxcui($value)
    {
        $this->setProperty('rxcui', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setRxcui($value)
    {
        $this->setProperty('rxcui', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRxcui()
    {
       return $this->getProperty('rxcui');
    }


    /**
        * Proprietary name given to the diet plan, typically by its originator or
 * creator.
        * @param string|array|mixed $value
    * @return $this
    */
    public function proprietaryName($value)
    {
        $this->setProperty('proprietaryName', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setProprietaryName($value)
    {
        $this->setProperty('proprietaryName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProprietaryName()
    {
       return $this->getProperty('proprietaryName');
    }


    /**
        * An available dosage strength for the drug.
        * @param DrugStrength|array|string|mixed $value
    * @return $this
    */
    public function availableStrength($value)
    {
        $this->setProperty('availableStrength', $value);
        return $this;
    }

    /**
    * @param DrugStrength|array|string|mixed $value
    * @return $this
    */
    public function setAvailableStrength($value)
    {
        $this->setProperty('availableStrength', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailableStrength()
    {
       return $this->getProperty('availableStrength');
    }


    /**
        * Any precaution, guidance, contraindication, etc. related to consumption of
 * alcohol while taking this drug.
        * @param string|array|mixed $value
    * @return $this
    */
    public function alcoholWarning($value)
    {
        $this->setProperty('alcoholWarning', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setAlcoholWarning($value)
    {
        $this->setProperty('alcoholWarning', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlcoholWarning()
    {
       return $this->getProperty('alcoholWarning');
    }


    /**
        * Description of the absorption and elimination of drugs, including their
 * concentration (pharmacokinetics, pK) and biological effects
 * (pharmacodynamics, pD).
        * @param string|array|mixed $value
    * @return $this
    */
    public function clincalPharmacology($value)
    {
        $this->setProperty('clincalPharmacology', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setClincalPharmacology($value)
    {
        $this->setProperty('clincalPharmacology', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getClincalPharmacology()
    {
       return $this->getProperty('clincalPharmacology');
    }


    /**
        * A dosage form in which this drug/supplement is available, e.g. 'tablet',
 * 'suspension', 'injection'.
        * @param string|array|mixed $value
    * @return $this
    */
    public function dosageForm($value)
    {
        $this->setProperty('dosageForm', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setDosageForm($value)
    {
        $this->setProperty('dosageForm', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDosageForm()
    {
       return $this->getProperty('dosageForm');
    }


    /**
        * A dosing schedule for the drug for a given population, either observed,
 * recommended, or maximum dose based on the type used.
        * @param DoseSchedule|array|string|mixed $value
    * @return $this
    */
    public function doseSchedule($value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }

    /**
    * @param DoseSchedule|array|string|mixed $value
    * @return $this
    */
    public function setDoseSchedule($value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDoseSchedule()
    {
       return $this->getProperty('doseSchedule');
    }


    /**
        * Any precaution, guidance, contraindication, etc. related to consumption of
 * specific foods while taking this drug.
        * @param string|array|mixed $value
    * @return $this
    */
    public function foodWarning($value)
    {
        $this->setProperty('foodWarning', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setFoodWarning($value)
    {
        $this->setProperty('foodWarning', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFoodWarning()
    {
       return $this->getProperty('foodWarning');
    }


    /**
        * An active ingredient, typically chemical compounds and/or biologic
 * substances.
        * @param string|array|mixed $value
    * @return $this
    */
    public function activeIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setActiveIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActiveIngredient()
    {
       return $this->getProperty('activeIngredient');
    }


    /**
        * Pregnancy category of this drug.
        * @param DrugPregnancyCategory|array|string|mixed $value
    * @return $this
    */
    public function pregnancyCategory($value)
    {
        $this->setProperty('pregnancyCategory', $value);
        return $this;
    }

    /**
    * @param DrugPregnancyCategory|array|string|mixed $value
    * @return $this
    */
    public function setPregnancyCategory($value)
    {
        $this->setProperty('pregnancyCategory', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPregnancyCategory()
    {
       return $this->getProperty('pregnancyCategory');
    }


    /**
        * A route by which this drug may be administered, e.g. 'oral'.
        * @param string|array|mixed $value
    * @return $this
    */
    public function administrationRoute($value)
    {
        $this->setProperty('administrationRoute', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setAdministrationRoute($value)
    {
        $this->setProperty('administrationRoute', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdministrationRoute()
    {
       return $this->getProperty('administrationRoute');
    }


    /**
        * Any precaution, guidance, contraindication, etc. related to this drug's use
 * during pregnancy.
        * @param string|array|mixed $value
    * @return $this
    */
    public function pregnancyWarning($value)
    {
        $this->setProperty('pregnancyWarning', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPregnancyWarning($value)
    {
        $this->setProperty('pregnancyWarning', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPregnancyWarning()
    {
       return $this->getProperty('pregnancyWarning');
    }


    /**
        * The insurance plans that cover this drug.
        * @param HealthInsurancePlan|array|string|mixed $value
    * @return $this
    */
    public function includedInHealthInsurancePlan($value)
    {
        $this->setProperty('includedInHealthInsurancePlan', $value);
        return $this;
    }

    /**
    * @param HealthInsurancePlan|array|string|mixed $value
    * @return $this
    */
    public function setIncludedInHealthInsurancePlan($value)
    {
        $this->setProperty('includedInHealthInsurancePlan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIncludedInHealthInsurancePlan()
    {
       return $this->getProperty('includedInHealthInsurancePlan');
    }


    /**
        * Another drug that is known to interact with this drug in a way that impacts
 * the effect of this drug or causes a risk to the patient. Note: disease
 * interactions are typically captured as contraindications.
        * @param Drug|array|string|mixed $value
    * @return $this
    */
    public function interactingDrug($value)
    {
        $this->setProperty('interactingDrug', $value);
        return $this;
    }

    /**
    * @param Drug|array|string|mixed $value
    * @return $this
    */
    public function setInteractingDrug($value)
    {
        $this->setProperty('interactingDrug', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getInteractingDrug()
    {
       return $this->getProperty('interactingDrug');
    }


    /**
        * Any information related to overdose on a drug, including signs or symptoms,
 * treatments, contact information for emergency response.
        * @param string|array|mixed $value
    * @return $this
    */
    public function overdosage($value)
    {
        $this->setProperty('overdosage', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setOverdosage($value)
    {
        $this->setProperty('overdosage', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOverdosage()
    {
       return $this->getProperty('overdosage');
    }


    /**
        * Link to the drug's label details.
        * @param string|array|mixed $value
    * @return $this
    */
    public function labelDetails($value)
    {
        $this->setProperty('labelDetails', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setLabelDetails($value)
    {
        $this->setProperty('labelDetails', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLabelDetails()
    {
       return $this->getProperty('labelDetails');
    }


    /**
        * True if this item's name is a proprietary/brand name (vs. generic name).
        * @param bool|array|string|mixed $value
    * @return $this
    */
    public function isProprietary($value)
    {
        $this->setProperty('isProprietary', $value);
        return $this;
    }

    /**
    * @param bool|array|string|mixed $value
    * @return $this
    */
    public function setIsProprietary($value)
    {
        $this->setProperty('isProprietary', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsProprietary()
    {
       return $this->getProperty('isProprietary');
    }


    /**
        * The unit in which the drug is measured, e.g. '5 mg tablet'.
        * @param string|array|mixed $value
    * @return $this
    */
    public function drugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setDrugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDrugUnit()
    {
       return $this->getProperty('drugUnit');
    }


    /**
        * The generic name of this drug or supplement.
        * @param string|array|mixed $value
    * @return $this
    */
    public function nonProprietaryName($value)
    {
        $this->setProperty('nonProprietaryName', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setNonProprietaryName($value)
    {
        $this->setProperty('nonProprietaryName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNonProprietaryName()
    {
       return $this->getProperty('nonProprietaryName');
    }


    /**
        * Recommended intake of this supplement for a given population as defined by a
 * specific recommending authority.
        * @param MaximumDoseSchedule|array|string|mixed $value
    * @return $this
    */
    public function maximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
    * @param MaximumDoseSchedule|array|string|mixed $value
    * @return $this
    */
    public function setMaximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMaximumIntake()
    {
       return $this->getProperty('maximumIntake');
    }


    /**
        * Description of the absorption and elimination of drugs, including their
 * concentration (pharmacokinetics, pK) and biological effects
 * (pharmacodynamics, pD).
        * @param string|array|mixed $value
    * @return $this
    */
    public function clinicalPharmacology($value)
    {
        $this->setProperty('clinicalPharmacology', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setClinicalPharmacology($value)
    {
        $this->setProperty('clinicalPharmacology', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getClinicalPharmacology()
    {
       return $this->getProperty('clinicalPharmacology');
    }


}
