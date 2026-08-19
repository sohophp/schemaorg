<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\PlayAction;

use Sohophp\SchemaOrg\Thing\Action\PlayAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Diet;
use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization\SportsTeam;
use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\SportsActivityLocation;
use Sohophp\SchemaOrg\Thing\Event\SportsEvent;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\MedicalEntity\LifestyleModification\PhysicalActivity\ExercisePlan;
use Sohophp\SchemaOrg\Quantity\Distance;

/**
 * The act of participating in exertive activity for the purposes of improving health and fitness.
 * @see https://schema.org/ExerciseAction
 * @package Sohophp\SchemaOrg\Thing\Action\PlayAction
 */
class ExerciseAction extends PlayAction
{
    /**
     * A sub property of instrument. The diet used in this action.
     * @see https://schema.org/exerciseRelatedDiet
     * @param Diet|array $value
     * @return $this
     */
    public function exerciseRelatedDiet($value)
    {
        $this->setProperty('exerciseRelatedDiet', $value);
        return $this;
    }

    /**
     * @param Diet|array $value
     * @return $this
     */
    public function setExerciseRelatedDiet($value)
    {
        $this->setProperty('exerciseRelatedDiet', $value);
        return $this;
    }

    /**
     * @param Diet $value
     * @return $this
     */
    public function addExerciseRelatedDiet($value)
    {
        $current = $this->getProperty('exerciseRelatedDiet');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('exerciseRelatedDiet', $current);
        return $this;
    }

    /**
     * @return Diet|array
     */
    public function getExerciseRelatedDiet()
    {
        return $this->getProperty('exerciseRelatedDiet');
    }
    /**
     * A sub property of participant. The sports team that participated on this action.
     * @see https://schema.org/sportsTeam
     * @param SportsTeam|array $value
     * @return $this
     */
    public function sportsTeam($value)
    {
        $this->setProperty('sportsTeam', $value);
        return $this;
    }

    /**
     * @param SportsTeam|array $value
     * @return $this
     */
    public function setSportsTeam($value)
    {
        $this->setProperty('sportsTeam', $value);
        return $this;
    }

    /**
     * @param SportsTeam $value
     * @return $this
     */
    public function addSportsTeam($value)
    {
        $current = $this->getProperty('sportsTeam');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sportsTeam', $current);
        return $this;
    }

    /**
     * @return SportsTeam|array
     */
    public function getSportsTeam()
    {
        return $this->getProperty('sportsTeam');
    }
    /**
     * A sub property of location. The sports activity location where this action occurred.
     * @see https://schema.org/sportsActivityLocation
     * @param SportsActivityLocation|array $value
     * @return $this
     */
    public function sportsActivityLocation($value)
    {
        $this->setProperty('sportsActivityLocation', $value);
        return $this;
    }

    /**
     * @param SportsActivityLocation|array $value
     * @return $this
     */
    public function setSportsActivityLocation($value)
    {
        $this->setProperty('sportsActivityLocation', $value);
        return $this;
    }

    /**
     * @param SportsActivityLocation $value
     * @return $this
     */
    public function addSportsActivityLocation($value)
    {
        $current = $this->getProperty('sportsActivityLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sportsActivityLocation', $current);
        return $this;
    }

    /**
     * @return SportsActivityLocation|array
     */
    public function getSportsActivityLocation()
    {
        return $this->getProperty('sportsActivityLocation');
    }
    /**
     * A sub property of instrument. The diet used in this action.
     * @see https://schema.org/diet
     * @param Diet|array $value
     * @return $this
     */
    public function diet($value)
    {
        $this->setProperty('diet', $value);
        return $this;
    }

    /**
     * @param Diet|array $value
     * @return $this
     */
    public function setDiet($value)
    {
        $this->setProperty('diet', $value);
        return $this;
    }

    /**
     * @param Diet $value
     * @return $this
     */
    public function addDiet($value)
    {
        $current = $this->getProperty('diet');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('diet', $current);
        return $this;
    }

    /**
     * @return Diet|array
     */
    public function getDiet()
    {
        return $this->getProperty('diet');
    }
    /**
     * A sub property of location. The sports event where this action occurred.
     * @see https://schema.org/sportsEvent
     * @param SportsEvent|array $value
     * @return $this
     */
    public function sportsEvent($value)
    {
        $this->setProperty('sportsEvent', $value);
        return $this;
    }

    /**
     * @param SportsEvent|array $value
     * @return $this
     */
    public function setSportsEvent($value)
    {
        $this->setProperty('sportsEvent', $value);
        return $this;
    }

    /**
     * @param SportsEvent $value
     * @return $this
     */
    public function addSportsEvent($value)
    {
        $current = $this->getProperty('sportsEvent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('sportsEvent', $current);
        return $this;
    }

    /**
     * @return SportsEvent|array
     */
    public function getSportsEvent()
    {
        return $this->getProperty('sportsEvent');
    }
    /**
     * A sub property of participant. The opponent on this action.
     * @see https://schema.org/opponent
     * @param Person|array $value
     * @return $this
     */
    public function opponent($value)
    {
        $this->setProperty('opponent', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setOpponent($value)
    {
        $this->setProperty('opponent', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addOpponent($value)
    {
        $current = $this->getProperty('opponent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('opponent', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getOpponent()
    {
        return $this->getProperty('opponent');
    }
    /**
     * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
     * @see https://schema.org/exerciseType
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
     * A sub property of location. The final location of the object or the agent after the action.
     * @see https://schema.org/toLocation
     * @param Place|array $value
     * @return $this
     */
    public function toLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setToLocation($value)
    {
        $this->setProperty('toLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addToLocation($value)
    {
        $current = $this->getProperty('toLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('toLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getToLocation()
    {
        return $this->getProperty('toLocation');
    }
    /**
     * A sub property of location. The original location of the object or the agent before the action.
     * @see https://schema.org/fromLocation
     * @param Place|array $value
     * @return $this
     */
    public function fromLocation($value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setFromLocation($value)
    {
        $this->setProperty('fromLocation', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addFromLocation($value)
    {
        $current = $this->getProperty('fromLocation');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('fromLocation', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getFromLocation()
    {
        return $this->getProperty('fromLocation');
    }
    /**
     * A sub property of instrument. The exercise plan used on this action.
     * @see https://schema.org/exercisePlan
     * @param ExercisePlan|array $value
     * @return $this
     */
    public function exercisePlan($value)
    {
        $this->setProperty('exercisePlan', $value);
        return $this;
    }

    /**
     * @param ExercisePlan|array $value
     * @return $this
     */
    public function setExercisePlan($value)
    {
        $this->setProperty('exercisePlan', $value);
        return $this;
    }

    /**
     * @param ExercisePlan $value
     * @return $this
     */
    public function addExercisePlan($value)
    {
        $current = $this->getProperty('exercisePlan');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('exercisePlan', $current);
        return $this;
    }

    /**
     * @return ExercisePlan|array
     */
    public function getExercisePlan()
    {
        return $this->getProperty('exercisePlan');
    }
    /**
     * A sub property of location. The course where this action was taken.
     * @see https://schema.org/exerciseCourse
     * @param Place|array $value
     * @return $this
     */
    public function exerciseCourse($value)
    {
        $this->setProperty('exerciseCourse', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setExerciseCourse($value)
    {
        $this->setProperty('exerciseCourse', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addExerciseCourse($value)
    {
        $current = $this->getProperty('exerciseCourse');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('exerciseCourse', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getExerciseCourse()
    {
        return $this->getProperty('exerciseCourse');
    }
    /**
     * A sub property of location. The course where this action was taken.
     * @see https://schema.org/course
     * @param Place|array $value
     * @return $this
     */
    public function course($value)
    {
        $this->setProperty('course', $value);
        return $this;
    }

    /**
     * @param Place|array $value
     * @return $this
     */
    public function setCourse($value)
    {
        $this->setProperty('course', $value);
        return $this;
    }

    /**
     * @param Place $value
     * @return $this
     */
    public function addCourse($value)
    {
        $current = $this->getProperty('course');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('course', $current);
        return $this;
    }

    /**
     * @return Place|array
     */
    public function getCourse()
    {
        return $this->getProperty('course');
    }
    /**
     * The distance travelled, e.g. exercising or travelling.
     * @see https://schema.org/distance
     * @param Distance|array $value
     * @return $this
     */
    public function distance($value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
     * @param Distance|array $value
     * @return $this
     */
    public function setDistance($value)
    {
        $this->setProperty('distance', $value);
        return $this;
    }

    /**
     * @param Distance $value
     * @return $this
     */
    public function addDistance($value)
    {
        $current = $this->getProperty('distance');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('distance', $current);
        return $this;
    }

    /**
     * @return Distance|array
     */
    public function getDistance()
    {
        return $this->getProperty('distance');
    }
}
