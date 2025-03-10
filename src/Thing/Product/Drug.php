<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A chemical or biologic substance, used as a medical therapy, that has a
 * physiological effect on an organism. Here the term drug is used
 * interchangeably with the term medicine although clinical knowledge makes a
 * clear difference between them.
* @see schema:Drug
* @package Sohophp\SchemaOrg\Thing\Product
*/
class Drug extends Product
{


    /**
        * The insurance plans that cover this drug.
        * @param array|string|mixed $value
    * @return $this
    */
    public function includedInHealthInsurancePlan($value)
    {
        $this->setProperty('includedInHealthInsurancePlan', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Description of the absorption and elimination of drugs, including their
 * concentration (pharmacokinetics, pK) and biological effects
 * (pharmacodynamics, pD).
        * @param array|string|mixed $value
    * @return $this
    */
    public function clincalPharmacology($value)
    {
        $this->setProperty('clincalPharmacology', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A dosing schedule for the drug for a given population, either observed,
 * recommended, or maximum dose based on the type used.
        * @param array|string|mixed $value
    * @return $this
    */
    public function doseSchedule($value)
    {
        $this->setProperty('doseSchedule', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An available dosage strength for the drug.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availableStrength($value)
    {
        $this->setProperty('availableStrength', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates the status of drug prescription, e.g. local catalogs
 * classifications or whether the drug is available by prescription or
 * over-the-counter, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function prescriptionStatus($value)
    {
        $this->setProperty('prescriptionStatus', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The RxCUI drug identifier from RXNORM.
        * @param array|string|mixed $value
    * @return $this
    */
    public function rxcui($value)
    {
        $this->setProperty('rxcui', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any precaution, guidance, contraindication, etc. related to consumption of
 * alcohol while taking this drug.
        * @param array|string|mixed $value
    * @return $this
    */
    public function alcoholWarning($value)
    {
        $this->setProperty('alcoholWarning', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The generic name of this drug or supplement.
        * @param array|string|mixed $value
    * @return $this
    */
    public function nonProprietaryName($value)
    {
        $this->setProperty('nonProprietaryName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Proprietary name given to the diet plan, typically by its originator or
 * creator.
        * @param array|string|mixed $value
    * @return $this
    */
    public function proprietaryName($value)
    {
        $this->setProperty('proprietaryName', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any other drug related to this one, for example commonly-prescribed
 * alternatives.
        * @param array|string|mixed $value
    * @return $this
    */
    public function relatedDrug($value)
    {
        $this->setProperty('relatedDrug', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any precaution, guidance, contraindication, etc. related to consumption of
 * specific foods while taking this drug.
        * @param array|string|mixed $value
    * @return $this
    */
    public function foodWarning($value)
    {
        $this->setProperty('foodWarning', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The specific biochemical interaction through which this drug or supplement
 * produces its pharmacological effect.
        * @param array|string|mixed $value
    * @return $this
    */
    public function mechanismOfAction($value)
    {
        $this->setProperty('mechanismOfAction', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The drug or supplement's legal status, including any controlled substance
 * schedules that apply.
        * @param array|string|mixed $value
    * @return $this
    */
    public function legalStatus($value)
    {
        $this->setProperty('legalStatus', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The class of drug this belongs to (e.g., statins).
        * @param array|string|mixed $value
    * @return $this
    */
    public function drugClass($value)
    {
        $this->setProperty('drugClass', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Link to the drug's label details.
        * @param array|string|mixed $value
    * @return $this
    */
    public function labelDetails($value)
    {
        $this->setProperty('labelDetails', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A dosage form in which this drug/supplement is available, e.g. 'tablet',
 * 'suspension', 'injection'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function dosageForm($value)
    {
        $this->setProperty('dosageForm', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * True if this item's name is a proprietary/brand name (vs. generic name).
        * @param array|string|mixed $value
    * @return $this
    */
    public function isProprietary($value)
    {
        $this->setProperty('isProprietary', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any precaution, guidance, contraindication, etc. related to this drug's use
 * during pregnancy.
        * @param array|string|mixed $value
    * @return $this
    */
    public function pregnancyWarning($value)
    {
        $this->setProperty('pregnancyWarning', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Recommended intake of this supplement for a given population as defined by a
 * specific recommending authority.
        * @param array|string|mixed $value
    * @return $this
    */
    public function maximumIntake($value)
    {
        $this->setProperty('maximumIntake', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * @param array|string|mixed $value
    * @return $this
    */
    public function clinicalPharmacology($value)
    {
        $this->setProperty('clinicalPharmacology', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * True if the drug is available in a generic form (regardless of name).
        * @param array|string|mixed $value
    * @return $this
    */
    public function isAvailableGenerically($value)
    {
        $this->setProperty('isAvailableGenerically', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any information related to overdose on a drug, including signs or symptoms,
 * treatments, contact information for emergency response.
        * @param array|string|mixed $value
    * @return $this
    */
    public function overdosage($value)
    {
        $this->setProperty('overdosage', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any FDA or other warnings about the drug (text or URL).
        * @param array|string|mixed $value
    * @return $this
    */
    public function warning($value)
    {
        $this->setProperty('warning', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The unit in which the drug is measured, e.g. '5 mg tablet'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function drugUnit($value)
    {
        $this->setProperty('drugUnit', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Link to prescribing information for the drug.
        * @param array|string|mixed $value
    * @return $this
    */
    public function prescribingInfo($value)
    {
        $this->setProperty('prescribingInfo', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any precaution, guidance, contraindication, etc. related to this drug's use
 * by breastfeeding mothers.
        * @param array|string|mixed $value
    * @return $this
    */
    public function breastfeedingWarning($value)
    {
        $this->setProperty('breastfeedingWarning', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A route by which this drug may be administered, e.g. 'oral'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function administrationRoute($value)
    {
        $this->setProperty('administrationRoute', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An active ingredient, typically chemical compounds and/or biologic
 * substances.
        * @param array|string|mixed $value
    * @return $this
    */
    public function activeIngredient($value)
    {
        $this->setProperty('activeIngredient', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Another drug that is known to interact with this drug in a way that impacts
 * the effect of this drug or causes a risk to the patient. Note: disease
 * interactions are typically captured as contraindications.
        * @param array|string|mixed $value
    * @return $this
    */
    public function interactingDrug($value)
    {
        $this->setProperty('interactingDrug', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Pregnancy category of this drug.
        * @param array|string|mixed $value
    * @return $this
    */
    public function pregnancyCategory($value)
    {
        $this->setProperty('pregnancyCategory', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
