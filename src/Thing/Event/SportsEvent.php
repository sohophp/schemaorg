<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization\SportsTeam;
use Sohophp\SchemaOrg\Thing\Person;

/**
* Event type: Sports event.
* @see http://schema.org/SportsEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class SportsEvent extends Event
{

    /**
    * The away team in a sports event.
    * @param SportsTeam|Person $value
    * @return $this
    */
    public function awayTeam($value)
    {
        $this->setProperty('awayTeam', $value);
        return $this;
    }

    /**
    * The home team in a sports event.
    * @param Person|SportsTeam $value
    * @return $this
    */
    public function homeTeam($value)
    {
        $this->setProperty('homeTeam', $value);
        return $this;
    }

    /**
    * A competitor in a sports event.
    * @param Person|SportsTeam $value
    * @return $this
    */
    public function competitor($value)
    {
        $this->setProperty('competitor', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\SportsEvent','Thing\\SportsEvent');

