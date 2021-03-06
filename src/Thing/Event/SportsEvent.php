<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;
use Sohophp\SchemaOrg\Thing\Organization\SportsOrganization\SportsTeam;
use Sohophp\SchemaOrg\Thing\Person;

/**
* Event type: Sports event.
* @see http://schema.org/SportsEvent
* @package Sohophp\SchemaOrg\Thing\Event

*
*/
class SportsEvent extends Event
{

    /**
    * The away team in a sports event.
    * @param SportsTeam|Person|array $value
    * @return $this
    */
    public function awayTeam($value)
    {
        $this->setProperty('awayTeam', $value);
        return $this;
    }
   /**
    * @param SportsTeam|Person|array $value
    * @return $this
    */
    public function setAwayTeam($value)
    {
        $this->setProperty('awayTeam', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAwayTeam()
    {
       return $this->getProperty('awayTeam');
    }

    /**
    * The home team in a sports event.
    * @param Person|SportsTeam|array $value
    * @return $this
    */
    public function homeTeam($value)
    {
        $this->setProperty('homeTeam', $value);
        return $this;
    }
   /**
    * @param Person|SportsTeam|array $value
    * @return $this
    */
    public function setHomeTeam($value)
    {
        $this->setProperty('homeTeam', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getHomeTeam()
    {
       return $this->getProperty('homeTeam');
    }

    /**
    * A competitor in a sports event.
    * @param Person|SportsTeam|array $value
    * @return $this
    */
    public function competitor($value)
    {
        $this->setProperty('competitor', $value);
        return $this;
    }
   /**
    * @param Person|SportsTeam|array $value
    * @return $this
    */
    public function setCompetitor($value)
    {
        $this->setProperty('competitor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCompetitor()
    {
       return $this->getProperty('competitor');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Event\\SportsEvent','Thing\\SportsEvent');

