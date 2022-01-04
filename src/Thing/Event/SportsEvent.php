<?php
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
    * @param SportsTeam|Person|array|string $value
    * @return $this
    * @deprecated use setAwayTeam
    */
    public function awayTeam($value)
    {
        $this->setProperty('awayTeam', $value);
        return $this;
    }
   /**
    * @param SportsTeam|Person|array|string $value
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
    * @param Person|SportsTeam|array|string $value
    * @return $this
    * @deprecated use setHomeTeam
    */
    public function homeTeam($value)
    {
        $this->setProperty('homeTeam', $value);
        return $this;
    }
   /**
    * @param Person|SportsTeam|array|string $value
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
    * @param Person|SportsTeam|array|string $value
    * @return $this
    * @deprecated use setCompetitor
    */
    public function competitor($value)
    {
        $this->setProperty('competitor', $value);
        return $this;
    }
   /**
    * @param Person|SportsTeam|array|string $value
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
