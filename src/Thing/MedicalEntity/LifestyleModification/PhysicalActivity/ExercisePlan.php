<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;

use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Energy;

/**
* Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
* @see http://schema.org/ExercisePlan
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity
*/
class ExercisePlan extends PhysicalActivity
{

    /**
    * Number of times one should repeat the activity.
    * @param QualitativeValue $value
    * @return $this
    */
    public function repetitions(? $value)
    {
        $this->setProperty('repetitions', $value);
        return $this;
    }

    /**
    * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
    * @param string $value
    * @return $this
    */
    public function additionalVariable(?string $value)
    {
        $this->setProperty('additionalVariable', $value);
        return $this;
    }

    /**
    * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
    * @param string $value
    * @return $this
    */
    public function exerciseType(?string $value)
    {
        $this->setProperty('exerciseType', $value);
        return $this;
    }

    /**
    * Length of time to engage in the activity.
    * @param Duration|QualitativeValue $value
    * @return $this
    */
    public function activityDuration($value)
    {
        $this->setProperty('activityDuration', $value);
        return $this;
    }

    /**
    * How often one should break from the activity.
    * @param string|QualitativeValue $value
    * @return $this
    */
    public function restPeriods($value)
    {
        $this->setProperty('restPeriods', $value);
        return $this;
    }

    /**
    * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
    * @param string|QualitativeValue $value
    * @return $this
    */
    public function intensity($value)
    {
        $this->setProperty('intensity', $value);
        return $this;
    }

    /**
    * How often one should engage in the activity.
    * @param string|QualitativeValue $value
    * @return $this
    */
    public function activityFrequency($value)
    {
        $this->setProperty('activityFrequency', $value);
        return $this;
    }

    /**
    * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
    * @param Energy|QualitativeValue $value
    * @return $this
    */
    public function workload($value)
    {
        $this->setProperty('workload', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\LifestyleModification\\PhysicalActivity\\ExercisePlan','Thing\\ExercisePlan');

