<?php
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;

use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;

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
        * Quantitative measure of the physiologic output of the exercise; also referred
 * to as energy expenditure.
        * @param array|string|mixed $value
    * @return $this
    */
    public function workload($value)
    {
        $this->setProperty('workload', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setWorkload($value)
    {
        $this->setProperty('workload', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWorkload()
    {
       return $this->getProperty('workload');
    }


    /**
        * How often one should engage in the activity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function activityFrequency($value)
    {
        $this->setProperty('activityFrequency', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setActivityFrequency($value)
    {
        $this->setProperty('activityFrequency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActivityFrequency()
    {
       return $this->getProperty('activityFrequency');
    }


    /**
        * Type(s) of exercise or activity, such as strength training, flexibility
 * training, aerobics, cardiac rehabilitation, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function exerciseType($value)
    {
        $this->setProperty('exerciseType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExerciseType($value)
    {
        $this->setProperty('exerciseType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExerciseType()
    {
       return $this->getProperty('exerciseType');
    }


    /**
        * Number of times one should repeat the activity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function repetitions($value)
    {
        $this->setProperty('repetitions', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRepetitions($value)
    {
        $this->setProperty('repetitions', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRepetitions()
    {
       return $this->getProperty('repetitions');
    }


    /**
        * How often one should break from the activity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function restPeriods($value)
    {
        $this->setProperty('restPeriods', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRestPeriods($value)
    {
        $this->setProperty('restPeriods', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRestPeriods()
    {
       return $this->getProperty('restPeriods');
    }


    /**
        * Quantitative measure gauging the degree of force involved in the exercise,
 * for example, heartbeats per minute. May include the velocity of the movement.
        * @param array|string|mixed $value
    * @return $this
    */
    public function intensity($value)
    {
        $this->setProperty('intensity', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIntensity($value)
    {
        $this->setProperty('intensity', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIntensity()
    {
       return $this->getProperty('intensity');
    }


    /**
        * Length of time to engage in the activity.
        * @param array|string|mixed $value
    * @return $this
    */
    public function activityDuration($value)
    {
        $this->setProperty('activityDuration', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setActivityDuration($value)
    {
        $this->setProperty('activityDuration', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActivityDuration()
    {
       return $this->getProperty('activityDuration');
    }


    /**
        * Any additional component of the exercise prescription that may need to be
 * articulated to the patient. This may include the order of exercises, the
 * number of repetitions of movement, quantitative distance, progressions over
 * time, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function additionalVariable($value)
    {
        $this->setProperty('additionalVariable', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAdditionalVariable($value)
    {
        $this->setProperty('additionalVariable', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAdditionalVariable()
    {
       return $this->getProperty('additionalVariable');
    }


}
