<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\PlayAction;

use Sohophp\SchemaOrg\Thing\Action\PlayAction;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization\SportsTeam;
use Sohophp\SchemaOrg\Thing\Event\SportsEvent;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\SportsActivityLocation;
/**
* The act of participating in exertive activity for the purposes of improving health and fitness.
* @see http://schema.org/ExerciseAction
* @package Sohophp\SchemaOrg\Thing\Action\PlayAction
*/
class ExerciseAction extends PlayAction
{

     
     /**
     * A sub property of location. The course where this action was taken.
     * @param Place $value
     * @return $this
     */

     public function course(?Place $value):self
     {
        $this->setProperty("course",$value);
        return $this;
     }

     
     /**
     * A sub property of participant. The sports team that participated on this action.
     * @param SportsTeam $value
     * @return $this
     */

     public function sportsTeam(?SportsTeam $value):self
     {
        $this->setProperty("sportsTeam",$value);
        return $this;
     }

     
     /**
     * A sub property of location. The sports event where this action occurred.
     * @param SportsEvent $value
     * @return $this
     */

     public function sportsEvent(?SportsEvent $value):self
     {
        $this->setProperty("sportsEvent",$value);
        return $this;
     }

     
     /**
     * A sub property of participant. The opponent on this action.
     * @param Person $value
     * @return $this
     */

     public function opponent(?Person $value):self
     {
        $this->setProperty("opponent",$value);
        return $this;
     }

     
     /**
     * A sub property of location. The sports activity location where this action occurred.
     * @param SportsActivityLocation $value
     * @return $this
     */

     public function sportsActivityLocation(?SportsActivityLocation $value):self
     {
        $this->setProperty("sportsActivityLocation",$value);
        return $this;
     }

     
     /**
     * A sub property of location. The course where this action was taken.
     * @param Place $value
     * @return $this
     */

     public function exerciseCourse(?Place $value):self
     {
        $this->setProperty("exerciseCourse",$value);
        return $this;
     }

     
}

