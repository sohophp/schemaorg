<?php
namespace Sohophp\SchemaOrg\Thing\Product;

use Sohophp\SchemaOrg\Thing\Product;

/**
* A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals, herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
* @see schema:DietarySupplement
* @package Sohophp\SchemaOrg\Thing\Product
*/
class DietarySupplement extends Product
{
   /**
        * The generic name of this drug or supplement.
        */
    protected $nonProprietaryName = null;

   /**
        * Proprietary name given to the diet plan, typically by its originator or creator.
        */
    protected $proprietaryName = null;

   /**
        * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
        */
    protected $mechanismOfAction = null;

   /**
        * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
        */
    protected $safetyConsideration = null;

   /**
        * The drug or supplement's legal status, including any controlled substance schedules that apply.
        */
    protected $legalStatus = null;

   /**
        * True if this item's name is a proprietary/brand name (vs. generic name).
        */
    protected $isProprietary = null;

   /**
        * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
        */
    protected $targetPopulation = null;

   /**
        * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
        */
    protected $maximumIntake = null;

   /**
        * An active ingredient, typically chemical compounds and/or biologic substances.
        */
    protected $activeIngredient = null;

   /**
        * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
        */
    protected $recommendedIntake = null;


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
