<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

/**
* A video game series.
* @see schema:VideoGameSeries
* @package Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries
*/
class VideoGameSeries extends CreativeWorkSeries
{
   /**
        * The number of seasons in this series.
        */
    protected $numberOfSeasons = null;

   /**
        * An episode of a TV, radio or game media within a series or season.
        */
    protected $episode = null;

   /**
        * Indicate how many people can play this game (minimum, maximum, or range).
        */
    protected $numberOfPlayers = null;

   /**
        * A season in a media series.
        */
    protected $seasons = null;

   /**
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $directors = null;

   /**
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
        */
    protected $director = null;

   /**
        * A season that is part of the media series.
        */
    protected $containsSeason = null;

   /**
        * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
        */
    protected $gamePlatform = null;

   /**
        * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
        */
    protected $quest = null;

   /**
        * Cheat codes to the game.
        */
    protected $cheatCode = null;

   /**
        * Real or fictional location of the game (or part of game).
        */
    protected $gameLocation = null;

   /**
        * A season in a media series.
        */
    protected $season = null;

   /**
        * The number of episodes in this season or series.
        */
    protected $numberOfEpisodes = null;

   /**
        * An episode of a TV/radio series or season.
        */
    protected $episodes = null;

   /**
        * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
        */
    protected $playMode = null;

   /**
        * The production company or studio responsible for the item, e.g. series, video game, episode etc.
        */
    protected $productionCompany = null;

   /**
        * The trailer of a movie or TV/radio series, season, episode, etc.
        */
    protected $trailer = null;

   /**
        * The composer of the soundtrack.
        */
    protected $musicBy = null;

   /**
        * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
        */
    protected $gameItem = null;

   /**
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actor = null;

   /**
        * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
        */
    protected $characterAttribute = null;

   /**
        * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
        */
    protected $actors = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfSeasons()
    {
       return $this->getProperty('numberOfSeasons');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEpisode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpisode()
    {
       return $this->getProperty('episode');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setSeasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeasons()
    {
       return $this->getProperty('seasons');
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
    public function setContainsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getContainsSeason()
    {
       return $this->getProperty('containsSeason');
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
    * @param array|string $value
    * @return $this
    */
    public function setSeason($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeason()
    {
       return $this->getProperty('season');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setNumberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNumberOfEpisodes()
    {
       return $this->getProperty('numberOfEpisodes');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEpisodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEpisodes()
    {
       return $this->getProperty('episodes');
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
    public function setProductionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProductionCompany()
    {
       return $this->getProperty('productionCompany');
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
