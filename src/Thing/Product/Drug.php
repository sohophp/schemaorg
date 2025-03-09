<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism. Here the term drug is used interchangeably with the term medicine although clinical knowledge makes a clear difference between them.
* @see schema:Drug
* @package Sohophp\SchemaOrg\Thing\Product
*/
class Drug extends Product
{
   /**
        * The insurance plans that cover this drug.
        */
    protected $includedInHealthInsurancePlan = null;

   /**
        * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
        */
    protected $clincalPharmacology = null;

   /**
        * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
        */
    protected $doseSchedule = null;

   /**
        * An available dosage strength for the drug.
        */
    protected $availableStrength = null;

   /**
        * Indicates the status of drug prescription, e.g. local catalogs classifications or whether the drug is available by prescription or over-the-counter, etc.
        */
    protected $prescriptionStatus = null;

   /**
        * The RxCUI drug identifier from RXNORM.
        */
    protected $rxcui = null;

   /**
        * Any precaution, guidance, contraindication, etc. related to consumption of alcohol while taking this drug.
        */
    protected $alcoholWarning = null;

   /**
        * The generic name of this drug or supplement.
        */
    protected $nonProprietaryName = null;

   /**
        * Proprietary name given to the diet plan, typically by its originator or creator.
        */
    protected $proprietaryName = null;

   /**
        * Any other drug related to this one, for example commonly-prescribed alternatives.
        */
    protected $relatedDrug = null;

   /**
        * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
        */
    protected $foodWarning = null;

   /**
        * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
        */
    protected $mechanismOfAction = null;

   /**
        * The drug or supplement's legal status, including any controlled substance schedules that apply.
        */
    protected $legalStatus = null;

   /**
        * The class of drug this belongs to (e.g., statins).
        */
    protected $drugClass = null;

   /**
        * Link to the drug's label details.
        */
    protected $labelDetails = null;

   /**
        * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
        */
    protected $dosageForm = null;

   /**
        * True if this item's name is a proprietary/brand name (vs. generic name).
        */
    protected $isProprietary = null;

   /**
        * Any precaution, guidance, contraindication, etc. related to this drug's use during pregnancy.
        */
    protected $pregnancyWarning = null;

   /**
        * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
        */
    protected $maximumIntake = null;

   /**
        * Description of the absorption and elimination of drugs, including their concentration (pharmacokinetics, pK) and biological effects (pharmacodynamics, pD).
        */
    protected $clinicalPharmacology = null;

   /**
        * True if the drug is available in a generic form (regardless of name).
        */
    protected $isAvailableGenerically = null;

   /**
        * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
        */
    protected $overdosage = null;

   /**
        * Any FDA or other warnings about the drug (text or URL).
        */
    protected $warning = null;

   /**
        * The unit in which the drug is measured, e.g. '5 mg tablet'.
        */
    protected $drugUnit = null;

   /**
        * Link to prescribing information for the drug.
        */
    protected $prescribingInfo = null;

   /**
        * Any precaution, guidance, contraindication, etc. related to this drug's use by breastfeeding mothers.
        */
    protected $breastfeedingWarning = null;

   /**
        * A route by which this drug may be administered, e.g. 'oral'.
        */
    protected $administrationRoute = null;

   /**
        * An active ingredient, typically chemical compounds and/or biologic substances.
        */
    protected $activeIngredient = null;

   /**
        * Another drug that is known to interact with this drug in a way that impacts the effect of this drug or causes a risk to the patient. Note: disease interactions are typically captured as contraindications.
        */
    protected $interactingDrug = null;

   /**
        * Pregnancy category of this drug.
        */
    protected $pregnancyCategory = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
