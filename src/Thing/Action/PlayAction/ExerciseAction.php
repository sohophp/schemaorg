<?php
namespace Sohophp\SchemaOrg\Thing\Action\PlayAction;

use Sohophp\SchemaOrg\Thing\Action\PlayAction;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization\SportsTeam;
use Sohophp\SchemaOrg\Thing\Event\SportsEvent;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Distance;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\Diet;
use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity\ExercisePlan;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\SportsActivityLocation;

/**
* The act of participating in exertive activity for the purposes of improving health and fitness.
* @see http://schema.org/ExerciseAction
* @package Sohophp\SchemaOrg\Thing\Action\PlayAction

*
*/
class ExerciseAction extends PlayAction
{

    /**
    * A sub property of location. The final location of the object or the agent after the action.
    * @param Place|array $value
    * @return $this
    */
    public function toLocation(?Place $value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setToLocation(?Place $value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getToLocation()
    {
       return $this->getProperty('toLocation');
    }

    /**
    * A sub property of location. The course where this action was taken.
    * @param Place|array $value
    * @return $this
    */
    public function course(?Place $value)
    {
        $this->setProperty('course', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setCourse(?Place $value)
    {
        $this->setProperty('course', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCourse()
    {
       return $this->getProperty('course');
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
    * A sub property of participant. The sports team that participated on this action.
    * @param SportsTeam|array $value
    * @return $this
    */
    public function sportsTeam(?SportsTeam $value)
    {
        $this->setProperty('sportsTeam', $value);
        return $this;
    }
   /**
    * @param SportsTeam|array $value
    * @return $this
    */
    public function setSportsTeam(?SportsTeam $value)
    {
        $this->setProperty('sportsTeam', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSportsTeam()
    {
       return $this->getProperty('sportsTeam');
    }

    /**
    * A sub property of location. The sports event where this action occurred.
    * @param SportsEvent|array $value
    * @return $this
    */
    public function sportsEvent(?SportsEvent $value)
    {
        $this->setProperty('sportsEvent', $value);
        return $this;
    }
   /**
    * @param SportsEvent|array $value
    * @return $this
    */
    public function setSportsEvent(?SportsEvent $value)
    {
        $this->setProperty('sportsEvent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSportsEvent()
    {
       return $this->getProperty('sportsEvent');
    }

    /**
    * The distance travelled, e.g. exercising or travelling.
    * @param Distance|array $value
    * @return $this
    */
    public function distance(?Distance $value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }
   /**
    * @param Distance|array $value
    * @return $this
    */
    public function setDistance(?Distance $value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDistance()
    {
       return $this->getProperty('distance');
    }

    /**
    * A sub property of participant. The opponent on this action.
    * @param Person|array $value
    * @return $this
    */
    public function opponent(?Person $value)
    {
        $this->setProperty('opponent', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setOpponent(?Person $value)
    {
        $this->setProperty('opponent', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOpponent()
    {
       return $this->getProperty('opponent');
    }

    /**
    * A sub property of instrument. The diet used in this action.
    * @param Diet|array $value
    * @return $this
    */
    public function exerciseRelatedDiet(?Diet $value)
    {
        $this->setProperty('exerciseRelatedDiet', $value);
        return $this;
    }
   /**
    * @param Diet|array $value
    * @return $this
    */
    public function setExerciseRelatedDiet(?Diet $value)
    {
        $this->setProperty('exerciseRelatedDiet', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExerciseRelatedDiet()
    {
       return $this->getProperty('exerciseRelatedDiet');
    }

    /**
    * A sub property of instrument. The exercise plan used on this action.
    * @param ExercisePlan|array $value
    * @return $this
    */
    public function exercisePlan(?ExercisePlan $value)
    {
        $this->setProperty('exercisePlan', $value);
        return $this;
    }
   /**
    * @param ExercisePlan|array $value
    * @return $this
    */
    public function setExercisePlan(?ExercisePlan $value)
    {
        $this->setProperty('exercisePlan', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExercisePlan()
    {
       return $this->getProperty('exercisePlan');
    }

    /**
    * A sub property of location. The sports activity location where this action occurred.
    * @param SportsActivityLocation|array $value
    * @return $this
    */
    public function sportsActivityLocation(?SportsActivityLocation $value)
    {
        $this->setProperty('sportsActivityLocation', $value);
        return $this;
    }
   /**
    * @param SportsActivityLocation|array $value
    * @return $this
    */
    public function setSportsActivityLocation(?SportsActivityLocation $value)
    {
        $this->setProperty('sportsActivityLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSportsActivityLocation()
    {
       return $this->getProperty('sportsActivityLocation');
    }

    /**
    * A sub property of location. The original location of the object or the agent before the action.
    * @param Place|array $value
    * @return $this
    */
    public function fromLocation(?Place $value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setFromLocation(?Place $value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFromLocation()
    {
       return $this->getProperty('fromLocation');
    }

    /**
    * A sub property of location. The course where this action was taken.
    * @param Place|array $value
    * @return $this
    */
    public function exerciseCourse(?Place $value)
    {
        $this->setProperty('exerciseCourse', $value);
        return $this;
    }
   /**
    * @param Place|array $value
    * @return $this
    */
    public function setExerciseCourse(?Place $value)
    {
        $this->setProperty('exerciseCourse', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExerciseCourse()
    {
       return $this->getProperty('exerciseCourse');
    }

    /**
    * A sub property of instrument. The diet used in this action.
    * @param Diet|array $value
    * @return $this
    */
    public function diet(?Diet $value)
    {
        $this->setProperty('diet', $value);
        return $this;
    }
   /**
    * @param Diet|array $value
    * @return $this
    */
    public function setDiet(?Diet $value)
    {
        $this->setProperty('diet', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiet()
    {
       return $this->getProperty('diet');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\PlayAction\\ExerciseAction','Thing\\ExerciseAction');

