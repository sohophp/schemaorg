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
        * @param array|string|mixed $value
    * @return $this
    */
    public function sport($value)
    {
        $this->setProperty('sport', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The home team in a sports event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function homeTeam($value)
    {
        $this->setProperty('homeTeam', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The away team in a sports event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function awayTeam($value)
    {
        $this->setProperty('awayTeam', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A competitor in a sports event.
        * @param array|string|mixed $value
    * @return $this
    */
    public function competitor($value)
    {
        $this->setProperty('competitor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
