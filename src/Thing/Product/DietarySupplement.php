<?php
namespace Sohophp\SchemaOrg\Thing\Product;

  use Sohophp\SchemaOrg\Thing\Product;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\MaximumDoseSchedule;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DoseSchedule\RecommendedDoseSchedule;
  use Sohophp\SchemaOrg\Thing\MedicalEntity\MedicalIntangible\DrugLegalStatus;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\MedicalEnumeration;

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
      * True if this item's name is a proprietary/brand name (vs. generic name).
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
      * Characteristics of the population for which this is intended, or which
 * typically uses it, e.g. 'adults'.
    * @param string|array $value
  * @return $this
  */
  public function targetPopulation($value)
  {
  $this->setProperty('targetPopulation', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTargetPopulation($value)
  {
  $this->setProperty('targetPopulation', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTargetPopulation($value)
  {
  $current = $this->getProperty('targetPopulation');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('targetPopulation', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTargetPopulation()
  {
  return $this->getProperty('targetPopulation');
  }


  /**
      * An active ingredient, typically chemical compounds and/or biologic
 * substances.
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
      * Recommended intake of this supplement for a given population as defined by a
 * specific recommending authority.
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
      * Any potential safety concern associated with the supplement. May include
 * interactions with other drugs and foods, pregnancy, breastfeeding, known
 * adverse reactions, and documented efficacy of the supplement.
    * @param string|array $value
  * @return $this
  */
  public function safetyConsideration($value)
  {
  $this->setProperty('safetyConsideration', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSafetyConsideration($value)
  {
  $this->setProperty('safetyConsideration', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSafetyConsideration($value)
  {
  $current = $this->getProperty('safetyConsideration');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('safetyConsideration', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSafetyConsideration()
  {
  return $this->getProperty('safetyConsideration');
  }


  /**
      * Recommended intake of this supplement for a given population as defined by a
 * specific recommending authority.
    * @param RecommendedDoseSchedule|array $value
  * @return $this
  */
  public function recommendedIntake($value)
  {
  $this->setProperty('recommendedIntake', $value);
  return $this;
  }

  /**
  * @param RecommendedDoseSchedule|array $value
  * @return $this
  */
  public function setRecommendedIntake($value)
  {
  $this->setProperty('recommendedIntake', $value);
  return $this;
  }

  /**
  * @param RecommendedDoseSchedule $value
  * @return $this
  */
  public function addRecommendedIntake($value)
  {
  $current = $this->getProperty('recommendedIntake');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recommendedIntake', $current);
  return $this;
  }

  /**
  * @return RecommendedDoseSchedule|array
  */
  public function getRecommendedIntake()
  {
  return $this->getProperty('recommendedIntake');
  }


  /**
      * Proprietary name given to the diet plan, typically by its originator or
 * creator.
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
      * The drug or supplement's legal status, including any controlled substance
 * schedules that apply.
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
      * The specific biochemical interaction through which this drug or supplement
 * produces its pharmacological effect.
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
      * The generic name of this drug or supplement.
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
