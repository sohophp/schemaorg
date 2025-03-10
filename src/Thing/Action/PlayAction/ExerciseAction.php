<?php
namespace Sohophp\SchemaOrg\Thing\Action\PlayAction;

use Sohophp\SchemaOrg\Thing\Action\PlayAction;

/**
* The act of participating in exertive activity for the purposes of improving
 * health and fitness.
* @see schema:ExerciseAction
* @package Sohophp\SchemaOrg\Thing\Action\PlayAction
*/
class ExerciseAction extends PlayAction
{


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
        * A sub property of location. The course where this action was taken.
        * @param array|string|mixed $value
    * @return $this
    */
    public function exerciseCourse($value)
    {
        $this->setProperty('exerciseCourse', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExerciseCourse($value)
    {
        $this->setProperty('exerciseCourse', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExerciseCourse()
    {
       return $this->getProperty('exerciseCourse');
    }


    /**
        * A sub property of instrument. The diet used in this action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function exerciseRelatedDiet($value)
    {
        $this->setProperty('exerciseRelatedDiet', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExerciseRelatedDiet($value)
    {
        $this->setProperty('exerciseRelatedDiet', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExerciseRelatedDiet()
    {
       return $this->getProperty('exerciseRelatedDiet');
    }


    /**
        * A sub property of location. The sports event where this action occurred.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sportsEvent($value)
    {
        $this->setProperty('sportsEvent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSportsEvent($value)
    {
        $this->setProperty('sportsEvent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSportsEvent()
    {
       return $this->getProperty('sportsEvent');
    }


    /**
        * A sub property of instrument. The diet used in this action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function diet($value)
    {
        $this->setProperty('diet', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDiet($value)
    {
        $this->setProperty('diet', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiet()
    {
       return $this->getProperty('diet');
    }


    /**
        * A sub property of instrument. The exercise plan used on this action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function exercisePlan($value)
    {
        $this->setProperty('exercisePlan', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExercisePlan($value)
    {
        $this->setProperty('exercisePlan', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExercisePlan()
    {
       return $this->getProperty('exercisePlan');
    }


    /**
        * A sub property of location. The sports activity location where this action
 * occurred.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sportsActivityLocation($value)
    {
        $this->setProperty('sportsActivityLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSportsActivityLocation($value)
    {
        $this->setProperty('sportsActivityLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSportsActivityLocation()
    {
       return $this->getProperty('sportsActivityLocation');
    }


    /**
        * A sub property of location. The original location of the object or the agent
 * before the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function fromLocation($value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setFromLocation($value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFromLocation()
    {
       return $this->getProperty('fromLocation');
    }


    /**
        * A sub property of location. The final location of the object or the agent
 * after the action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function toLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setToLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getToLocation()
    {
       return $this->getProperty('toLocation');
    }


    /**
        * A sub property of location. The course where this action was taken.
        * @param array|string|mixed $value
    * @return $this
    */
    public function course($value)
    {
        $this->setProperty('course', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCourse($value)
    {
        $this->setProperty('course', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCourse()
    {
       return $this->getProperty('course');
    }


    /**
        * The distance travelled, e.g. exercising or travelling.
        * @param array|string|mixed $value
    * @return $this
    */
    public function distance($value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDistance($value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDistance()
    {
       return $this->getProperty('distance');
    }


    /**
        * A sub property of participant. The opponent on this action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function opponent($value)
    {
        $this->setProperty('opponent', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setOpponent($value)
    {
        $this->setProperty('opponent', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOpponent()
    {
       return $this->getProperty('opponent');
    }


    /**
        * A sub property of participant. The sports team that participated on this
 * action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function sportsTeam($value)
    {
        $this->setProperty('sportsTeam', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setSportsTeam($value)
    {
        $this->setProperty('sportsTeam', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSportsTeam()
    {
       return $this->getProperty('sportsTeam');
    }


}
