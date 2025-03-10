<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\Substance;

use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;

/**
* A product taken by mouth that contains a dietary ingredient intended to
 * supplement the diet. Dietary ingredients may include vitamins, minerals,
 * herbs or other botanicals, amino acids, and substances such as enzymes, organ
 * tissues, glandulars and metabolites.
* @see http://schema.org/DietarySupplement
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\Substance
*/
class DietarySupplement extends Substance
{


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
        * Recommended intake of this supplement for a given population as defined by a
 * specific recommending authority.
        * @param RecommendedDoseSchedule|array|string|mixed $value
    * @return $this
    */
    public function recommendedIntake($value)
    {
        $this->setProperty('recommendedIntake', $value);
        return $this;
    }

    /**
    * @param RecommendedDoseSchedule|array|string|mixed $value
    * @return $this
    */
    public function setRecommendedIntake($value)
    {
        $this->setProperty('recommendedIntake', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRecommendedIntake()
    {
       return $this->getProperty('recommendedIntake');
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
        * Characteristics of the population for which this is intended, or which
 * typically uses it, e.g. 'adults'.
        * @param string|array|mixed $value
    * @return $this
    */
    public function targetPopulation($value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setTargetPopulation($value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTargetPopulation()
    {
       return $this->getProperty('targetPopulation');
    }


    /**
        * Any potential safety concern associated with the supplement. May include
 * interactions with other drugs and foods, pregnancy, breastfeeding, known
 * adverse reactions, and documented efficacy of the supplement.
        * @param string|array|mixed $value
    * @return $this
    */
    public function safetyConsideration($value)
    {
        $this->setProperty('safetyConsideration', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setSafetyConsideration($value)
    {
        $this->setProperty('safetyConsideration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSafetyConsideration()
    {
       return $this->getProperty('safetyConsideration');
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
        * Descriptive information establishing a historical perspective on the
 * supplement. May include the rationale for the name, the population where the
 * supplement first came to prominence, etc.
        * @param string|array|mixed $value
    * @return $this
    */
    public function background($value)
    {
        $this->setProperty('background', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setBackground($value)
    {
        $this->setProperty('background', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBackground()
    {
       return $this->getProperty('background');
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


}
