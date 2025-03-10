<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A product taken by mouth that contains a dietary ingredient intended to
 * supplement the diet. Dietary ingredients may include vitamins, minerals,
 * herbs or other botanicals, amino acids, and substances such as enzymes, organ
 * tissues, glandulars and metabolites.
* @see schema:DietarySupplement
* @package Sohophp\SchemaOrg\Thing\Product
*/
class DietarySupplement extends Product
{


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
        * Any potential safety concern associated with the supplement. May include
 * interactions with other drugs and foods, pregnancy, breastfeeding, known
 * adverse reactions, and documented efficacy of the supplement.
        * @param array|string|mixed $value
    * @return $this
    */
    public function safetyConsideration($value)
    {
        $this->setProperty('safetyConsideration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Characteristics of the population for which this is intended, or which
 * typically uses it, e.g. 'adults'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function targetPopulation($value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Recommended intake of this supplement for a given population as defined by a
 * specific recommending authority.
        * @param array|string|mixed $value
    * @return $this
    */
    public function recommendedIntake($value)
    {
        $this->setProperty('recommendedIntake', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


}
