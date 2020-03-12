<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;

use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\QualitativeValue;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Energy;

/**
* Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
* @see http://schema.org/ExercisePlan
* @package Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity

*
*/
class ExercisePlan extends PhysicalActivity
{

    /**
    * Number of times one should repeat the activity.
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function repetitions(?QualitativeValue $value)
    {
        $this->setProperty('repetitions', $value);
        return $this;
    }
   /**
    * @param QualitativeValue|array $value
    * @return $this
    */
    public function setRepetitions(?QualitativeValue $value)
    {
        $this->setProperty('repetitions', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRepetitions()
    {
       return $this->getProperty('repetitions');
    }

    /**
    * Any additional component of the exercise prescription that may need to be articulated to the patient. This may include the order of exercises, the number of repetitions of movement, quantitative distance, progressions over time, etc.
    * @param string|array $value
    * @return $this
    */
    public function additionalVariable(?string $value)
    {
        $this->setProperty('additionalVariable', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAdditionalVariable(?string $value)
    {
        $this->setProperty('additionalVariable', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAdditionalVariable()
    {
       return $this->getProperty('additionalVariable');
    }

    /**
    * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
    * @param string|array $value
    * @return $this
    */
    public function exerciseType(?string $value)
    {
        $this->setProperty('exerciseType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setExerciseType(?string $value)
    {
        $this->setProperty('exerciseType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExerciseType()
    {
       return $this->getProperty('exerciseType');
    }

    /**
    * Length of time to engage in the activity.
    * @param Duration|QualitativeValue|array $value
    * @return $this
    */
    public function activityDuration($value)
    {
        $this->setProperty('activityDuration', $value);
        return $this;
    }
   /**
    * @param Duration|QualitativeValue|array $value
    * @return $this
    */
    public function setActivityDuration($value)
    {
        $this->setProperty('activityDuration', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActivityDuration()
    {
       return $this->getProperty('activityDuration');
    }

    /**
    * How often one should break from the activity.
    * @param string|QualitativeValue|array $value
    * @return $this
    */
    public function restPeriods($value)
    {
        $this->setProperty('restPeriods', $value);
        return $this;
    }
   /**
    * @param string|QualitativeValue|array $value
    * @return $this
    */
    public function setRestPeriods($value)
    {
        $this->setProperty('restPeriods', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRestPeriods()
    {
       return $this->getProperty('restPeriods');
    }

    /**
    * Quantitative measure gauging the degree of force involved in the exercise, for example, heartbeats per minute. May include the velocity of the movement.
    * @param string|QualitativeValue|array $value
    * @return $this
    */
    public function intensity($value)
    {
        $this->setProperty('intensity', $value);
        return $this;
    }
   /**
    * @param string|QualitativeValue|array $value
    * @return $this
    */
    public function setIntensity($value)
    {
        $this->setProperty('intensity', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIntensity()
    {
       return $this->getProperty('intensity');
    }

    /**
    * How often one should engage in the activity.
    * @param string|QualitativeValue|array $value
    * @return $this
    */
    public function activityFrequency($value)
    {
        $this->setProperty('activityFrequency', $value);
        return $this;
    }
   /**
    * @param string|QualitativeValue|array $value
    * @return $this
    */
    public function setActivityFrequency($value)
    {
        $this->setProperty('activityFrequency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActivityFrequency()
    {
       return $this->getProperty('activityFrequency');
    }

    /**
    * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
    * @param Energy|QualitativeValue|array $value
    * @return $this
    */
    public function workload($value)
    {
        $this->setProperty('workload', $value);
        return $this;
    }
   /**
    * @param Energy|QualitativeValue|array $value
    * @return $this
    */
    public function setWorkload($value)
    {
        $this->setProperty('workload', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getWorkload()
    {
       return $this->getProperty('workload');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\MedicalEntity\\LifestyleModification\\PhysicalActivity\\ExercisePlan','Thing\\ExercisePlan');

