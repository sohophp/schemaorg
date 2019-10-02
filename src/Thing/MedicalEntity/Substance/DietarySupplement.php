<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\Substance;

use Sohophp\SchemaOrg\Thing\MedicalEntity\Substance;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule;
use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;

/**
* A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals, herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
* @see http://schema.org/DietarySupplement
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\Substance
*/
class DietarySupplement extends Substance
{

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
    * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
    * @param RecommendedDoseSchedule $value
    * @return $this
    */
    public function recommendedIntake(?RecommendedDoseSchedule $value)
    {
        $this->setProperty('recommendedIntake', $value);
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
    * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
    * @param string $value
    * @return $this
    */
    public function targetPopulation(?string $value)
    {
        $this->setProperty('targetPopulation', $value);
        return $this;
    }

    /**
    * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
    * @param string $value
    * @return $this
    */
    public function safetyConsideration(?string $value)
    {
        $this->setProperty('safetyConsideration', $value);
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
    * Descriptive information establishing a historical perspective on the supplement. May include the rationale for the name, the population where the supplement first came to prominence, etc.
    * @param string $value
    * @return $this
    */
    public function background(?string $value)
    {
        $this->setProperty('background', $value);
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


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\Substance\\DietarySupplement','Thing\\DietarySupplement');

