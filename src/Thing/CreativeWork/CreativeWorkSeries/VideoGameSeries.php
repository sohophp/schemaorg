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
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An episode of a TV, radio or game media within a series or season.
        * @param array|string|mixed $value
    * @return $this
    */
    public function episode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A season in a media series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function seasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A director of e.g. TV, radio, movie, video games etc. content. Directors can
 * be associated with individual items or with a series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
 * event. Directors can be associated with individual items or with a series,
 * episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A season that is part of the media series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function containsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The electronic systems used to play [video
 * games](http://en.wikipedia.org/wiki/Category:Video_game_platforms).
        * @param array|string|mixed $value
    * @return $this
    */
    public function gamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Cheat codes to the game.
        * @param array|string|mixed $value
    * @return $this
    */
    public function cheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A season in a media series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function season($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The number of episodes in this season or series.
        * @param array|string|mixed $value
    * @return $this
    */
    public function numberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An episode of a TV/radio series or season.
        * @param array|string|mixed $value
    * @return $this
    */
    public function episodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates whether this game is multi-player, co-op or single-player.  The
 * game can be marked as multi-player, co-op and single-player at the same time.
        * @param array|string|mixed $value
    * @return $this
    */
    public function playMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The production company or studio responsible for the item, e.g. series, video
 * game, episode etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The trailer of a movie or TV/radio series, season, episode, etc.
        * @param array|string|mixed $value
    * @return $this
    */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The composer of the soundtrack.
        * @param array|string|mixed $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An actor (individual or a group), e.g. in TV, radio, movie, video games etc.,
 * or in an event. Actors can be associated with individual items or with a
 * series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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


    /**
        * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated
 * with individual items or with a series, episode, clip.
        * @param array|string|mixed $value
    * @return $this
    */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
