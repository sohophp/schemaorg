<?php
namespace Sohophp\SchemaOrg\Thing\Event;

use Sohophp\SchemaOrg\Thing\Event;

/**
* Event type: Sports event.
* @see schema:SportsEvent
* @package Sohophp\SchemaOrg\Thing\Event
*/
class SportsEvent extends Event
{
   /**
        * A type of sport (e.g. Baseball).
        */
    protected $sport = null;

   /**
        * The home team in a sports event.
        */
    protected $homeTeam = null;

   /**
        * The away team in a sports event.
        */
    protected $awayTeam = null;

   /**
        * A competitor in a sports event.
        */
    protected $competitor = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setSport($value)
    {
        $this->setProperty('sport', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSport()
    {
       return $this->getProperty('sport');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHomeTeam($value)
    {
        $this->setProperty('homeTeam', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHomeTeam()
    {
       return $this->getProperty('homeTeam');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAwayTeam($value)
    {
        $this->setProperty('awayTeam', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAwayTeam()
    {
       return $this->getProperty('awayTeam');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCompetitor($value)
    {
        $this->setProperty('competitor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCompetitor()
    {
       return $this->getProperty('competitor');
    }


}
