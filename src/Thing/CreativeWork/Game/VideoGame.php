<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Game;

use Sohophp\SchemaOrg\Thing\CreativeWork\Game;

/**
* A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device.
* @see schema:VideoGame
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Game
*/
class VideoGame extends Game
{
   /**
        * The server on which  it is possible to play the game.
        */
    protected $gameServer = null;

   /**
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $directors = null;

   /**
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $director = null;

   /**
        * Links to tips, tactics, etc.
        */
    protected $gameTip = null;

   /**
        * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
        */
    protected $gamePlatform = null;

   /**
        * Cheat codes to the game.
        */
    protected $cheatCode = null;

   /**
        * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
        */
    protected $playMode = null;

   /**
        * The trailer of a movie or TV/radio series, season, episode, etc.
        */
    protected $trailer = null;

   /**
        * The composer of the soundtrack.
        */
    protected $musicBy = null;

   /**
        * The edition of a video game.
        */
    protected $gameEdition = null;

   /**
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actor = null;

   /**
        * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actors = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setGameServer($value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameServer()
    {
       return $this->getProperty('gameServer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGameTip($value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameTip()
    {
       return $this->getProperty('gameTip');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGamePlatform()
    {
       return $this->getProperty('gamePlatform');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCheatCode()
    {
       return $this->getProperty('cheatCode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPlayMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPlayMode()
    {
       return $this->getProperty('playMode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTrailer()
    {
       return $this->getProperty('trailer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setGameEdition($value)
    {
        $this->setProperty('gameEdition', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getGameEdition()
    {
       return $this->getProperty('gameEdition');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }


}
