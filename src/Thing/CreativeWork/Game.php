<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* The Game type represents things which are games. These are typically
 * rule-governed recreational activities, e.g. role-playing games in which
 * players assume the role of characters in a fictional setting.
* @see schema:Game
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Game extends CreativeWork
{


    /**
        * Indicate how many people can play this game (minimum, maximum, or range).
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfPlayers($value)
    {
        $this->setProperty('numberOfPlayers', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setNumberOfPlayers($value)
    {
        $this->setProperty('numberOfPlayers', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfPlayers()
    {
       return $this->getProperty('numberOfPlayers');
    }


    /**
        * The task that a player-controlled character, or group of characters may
 * complete in order to gain a reward.
        * @param array|string|mixed $value
    * @return $this
    */
    public function quest($value)
    {
        $this->setProperty('quest', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setQuest($value)
    {
        $this->setProperty('quest', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getQuest()
    {
       return $this->getProperty('quest');
    }


    /**
        * Real or fictional location of the game (or part of game).
        * @param array|string|mixed $value
    * @return $this
    */
    public function gameLocation($value)
    {
        $this->setProperty('gameLocation', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGameLocation($value)
    {
        $this->setProperty('gameLocation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameLocation()
    {
       return $this->getProperty('gameLocation');
    }


    /**
        * An item is an object within the game world that can be collected by a player
 * or, occasionally, a non-player character.
        * @param array|string|mixed $value
    * @return $this
    */
    public function gameItem($value)
    {
        $this->setProperty('gameItem', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setGameItem($value)
    {
        $this->setProperty('gameItem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameItem()
    {
       return $this->getProperty('gameItem');
    }


    /**
        * A piece of data that represents a particular aspect of a fictional character
 * (skill, power, character points, advantage, disadvantage).
        * @param array|string|mixed $value
    * @return $this
    */
    public function characterAttribute($value)
    {
        $this->setProperty('characterAttribute', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCharacterAttribute($value)
    {
        $this->setProperty('characterAttribute', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCharacterAttribute()
    {
       return $this->getProperty('characterAttribute');
    }


}
