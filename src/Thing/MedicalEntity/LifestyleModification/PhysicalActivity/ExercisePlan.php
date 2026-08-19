<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;

  use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Quantity\Energy;

/**
  * Fitness-related activity designed for a specific health-related purpose,
 * including defined exercise routines as well as activity prescribed by a
 * clinician.
  * @see schema:ExercisePlan
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity
*/
class ExercisePlan extends PhysicalActivity
{


  /**
      * How often one should break from the activity.
    * @param QuantitativeValue|string|array $value
  * @return $this
  */
  public function restPeriods($value)
  {
  $this->setProperty('restPeriods', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|string|array $value
  * @return $this
  */
  public function setRestPeriods($value)
  {
  $this->setProperty('restPeriods', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|string $value
  * @return $this
  */
  public function addRestPeriods($value)
  {
  $current = $this->getProperty('restPeriods');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('restPeriods', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|string|array
  */
  public function getRestPeriods()
  {
  return $this->getProperty('restPeriods');
  }


  /**
      * How often one should engage in the activity.
    * @param QuantitativeValue|string|array $value
  * @return $this
  */
  public function activityFrequency($value)
  {
  $this->setProperty('activityFrequency', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|string|array $value
  * @return $this
  */
  public function setActivityFrequency($value)
  {
  $this->setProperty('activityFrequency', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|string $value
  * @return $this
  */
  public function addActivityFrequency($value)
  {
  $current = $this->getProperty('activityFrequency');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('activityFrequency', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|string|array
  */
  public function getActivityFrequency()
  {
  return $this->getProperty('activityFrequency');
  }


  /**
      * Type(s) of exercise or activity, such as strength training, flexibility
 * training, aerobics, cardiac rehabilitation, etc.
    * @param string|array $value
  * @return $this
  */
  public function exerciseType($value)
  {
  $this->setProperty('exerciseType', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setExerciseType($value)
  {
  $this->setProperty('exerciseType', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addExerciseType($value)
  {
  $current = $this->getProperty('exerciseType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('exerciseType', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getExerciseType()
  {
  return $this->getProperty('exerciseType');
  }


  /**
      * Any additional component of the exercise prescription that may need to be
 * articulated to the patient. This may include the order of exercises, the
 * number of repetitions of movement, quantitative distance, progressions over
 * time, etc.
    * @param string|array $value
  * @return $this
  */
  public function additionalVariable($value)
  {
  $this->setProperty('additionalVariable', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAdditionalVariable($value)
  {
  $this->setProperty('additionalVariable', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAdditionalVariable($value)
  {
  $current = $this->getProperty('additionalVariable');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('additionalVariable', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAdditionalVariable()
  {
  return $this->getProperty('additionalVariable');
  }


  /**
      * Number of times one should repeat the activity.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function repetitions($value)
  {
  $this->setProperty('repetitions', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setRepetitions($value)
  {
  $this->setProperty('repetitions', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addRepetitions($value)
  {
  $current = $this->getProperty('repetitions');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('repetitions', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getRepetitions()
  {
  return $this->getProperty('repetitions');
  }


  /**
      * Quantitative measure gauging the degree of force involved in the exercise,
 * for example, heartbeats per minute. May include the velocity of the movement.
    * @param QuantitativeValue|string|array $value
  * @return $this
  */
  public function intensity($value)
  {
  $this->setProperty('intensity', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|string|array $value
  * @return $this
  */
  public function setIntensity($value)
  {
  $this->setProperty('intensity', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|string $value
  * @return $this
  */
  public function addIntensity($value)
  {
  $current = $this->getProperty('intensity');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('intensity', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|string|array
  */
  public function getIntensity()
  {
  return $this->getProperty('intensity');
  }


  /**
      * Length of time to engage in the activity.
    * @param QuantitativeValue|Duration|array $value
  * @return $this
  */
  public function activityDuration($value)
  {
  $this->setProperty('activityDuration', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Duration|array $value
  * @return $this
  */
  public function setActivityDuration($value)
  {
  $this->setProperty('activityDuration', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Duration $value
  * @return $this
  */
  public function addActivityDuration($value)
  {
  $current = $this->getProperty('activityDuration');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('activityDuration', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Duration|array
  */
  public function getActivityDuration()
  {
  return $this->getProperty('activityDuration');
  }


  /**
      * Quantitative measure of the physiologic output of the exercise; also referred
 * to as energy expenditure.
    * @param Energy|QuantitativeValue|array $value
  * @return $this
  */
  public function workload($value)
  {
  $this->setProperty('workload', $value);
  return $this;
  }

  /**
  * @param Energy|QuantitativeValue|array $value
  * @return $this
  */
  public function setWorkload($value)
  {
  $this->setProperty('workload', $value);
  return $this;
  }

  /**
  * @param Energy|QuantitativeValue $value
  * @return $this
  */
  public function addWorkload($value)
  {
  $current = $this->getProperty('workload');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('workload', $current);
  return $this;
  }

  /**
  * @return Energy|QuantitativeValue|array
  */
  public function getWorkload()
  {
  return $this->getProperty('workload');
  }


}
