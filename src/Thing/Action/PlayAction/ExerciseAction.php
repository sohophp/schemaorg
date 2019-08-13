<?php declare(strict_types=1);
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
*/
class ExerciseAction extends PlayAction
{

    /**
    * A sub property of location. The final location of the object or the agent after the action.
    * @param Place $value
    * @return $this
    */
    public function toLocation(?Place $value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }

    /**
    * A sub property of location. The course where this action was taken.
    * @param Place $value
    * @return $this
    */
    public function course(?Place $value)
    {
        $this->setProperty('course', $value);
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
    * A sub property of participant. The sports team that participated on this action.
    * @param SportsTeam $value
    * @return $this
    */
    public function sportsTeam(?SportsTeam $value)
    {
        $this->setProperty('sportsTeam', $value);
        return $this;
    }

    /**
    * A sub property of location. The sports event where this action occurred.
    * @param SportsEvent $value
    * @return $this
    */
    public function sportsEvent(?SportsEvent $value)
    {
        $this->setProperty('sportsEvent', $value);
        return $this;
    }

    /**
    * The distance travelled, e.g. exercising or travelling.
    * @param Distance $value
    * @return $this
    */
    public function distance(?Distance $value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
    * A sub property of participant. The opponent on this action.
    * @param Person $value
    * @return $this
    */
    public function opponent(?Person $value)
    {
        $this->setProperty('opponent', $value);
        return $this;
    }

    /**
    * A sub property of instrument. The diet used in this action.
    * @param Diet $value
    * @return $this
    */
    public function exerciseRelatedDiet(?Diet $value)
    {
        $this->setProperty('exerciseRelatedDiet', $value);
        return $this;
    }

    /**
    * A sub property of instrument. The exercise plan used on this action.
    * @param ExercisePlan $value
    * @return $this
    */
    public function exercisePlan(?ExercisePlan $value)
    {
        $this->setProperty('exercisePlan', $value);
        return $this;
    }

    /**
    * A sub property of location. The sports activity location where this action occurred.
    * @param SportsActivityLocation $value
    * @return $this
    */
    public function sportsActivityLocation(?SportsActivityLocation $value)
    {
        $this->setProperty('sportsActivityLocation', $value);
        return $this;
    }

    /**
    * A sub property of location. The original location of the object or the agent before the action.
    * @param Place $value
    * @return $this
    */
    public function fromLocation(?Place $value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }

    /**
    * A sub property of location. The course where this action was taken.
    * @param Place $value
    * @return $this
    */
    public function exerciseCourse(?Place $value)
    {
        $this->setProperty('exerciseCourse', $value);
        return $this;
    }

    /**
    * A sub property of instrument. The diet used in this action.
    * @param Diet $value
    * @return $this
    */
    public function diet(?Diet $value)
    {
        $this->setProperty('diet', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\PlayAction\\ExerciseAction','Thing\\ExerciseAction');

