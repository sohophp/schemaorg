<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GamePlayMode;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A video game series.
* @see http://schema.org/VideoGameSeries
* @package Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeries

*
*/
class VideoGameSeries extends CreativeWorkSeries
{

    /**
    * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
    * @param Thing|array|string $value
    * @return $this
    * @deprecated use setGameItem
    */
    public function gameItem($value)
    {
        $this->setProperty('gameItem', $value);
        return $this;
    }
   /**
    * @param Thing|array|string $value
    * @return $this
    */
    public function setGameItem($value)
    {
        $this->setProperty('gameItem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGameItem()
    {
       return $this->getProperty('gameItem');
    }

    /**
    * A season in a media series.
    * @param CreativeWorkSeason|array|string $value
    * @return $this
    * @deprecated use setSeasons
    */
    public function seasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array|string $value
    * @return $this
    */
    public function setSeasons($value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeasons()
    {
       return $this->getProperty('seasons');
    }

    /**
    * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
    * @param Thing|string|string|array $value
    * @return $this
    * @deprecated use setGamePlatform
    */
    public function gamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }
   /**
    * @param Thing|string|string|array $value
    * @return $this
    */
    public function setGamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGamePlatform()
    {
       return $this->getProperty('gamePlatform');
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setActor
    */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActor()
    {
       return $this->getProperty('actor');
    }

    /**
    * The number of episodes in this season or series.
    * @param int|array|string $value
    * @return $this
    * @deprecated use setNumberOfEpisodes
    */
    public function numberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }
   /**
    * @param int|array|string $value
    * @return $this
    */
    public function setNumberOfEpisodes($value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfEpisodes()
    {
       return $this->getProperty('numberOfEpisodes');
    }

    /**
    * The trailer of a movie or tv/radio series, season, episode, etc.
    * @param VideoObject|array|string $value
    * @return $this
    * @deprecated use setTrailer
    */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
   /**
    * @param VideoObject|array|string $value
    * @return $this
    */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTrailer()
    {
       return $this->getProperty('trailer');
    }

    /**
    * A season in a media series.
    * @param CreativeWorkSeason|array|string $value
    * @return $this
    * @deprecated use setSeason
    */
    public function season($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array|string $value
    * @return $this
    */
    public function setSeason($value)
    {
        $this->setProperty('season', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getSeason()
    {
       return $this->getProperty('season');
    }

    /**
    * An episode of a TV/radio series or season.
    * @param Episode|array|string $value
    * @return $this
    * @deprecated use setEpisodes
    */
    public function episodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }
   /**
    * @param Episode|array|string $value
    * @return $this
    */
    public function setEpisodes($value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEpisodes()
    {
       return $this->getProperty('episodes');
    }

    /**
    * Cheat codes to the game.
    * @param CreativeWork|array|string $value
    * @return $this
    * @deprecated use setCheatCode
    */
    public function cheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array|string $value
    * @return $this
    */
    public function setCheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCheatCode()
    {
       return $this->getProperty('cheatCode');
    }

    /**
    * Real or fictional location of the game (or part of game).
    * @param PostalAddress|string|Place|array $value
    * @return $this
    * @deprecated use setGameLocation
    */
    public function gameLocation($value)
    {
        $this->setProperty('gameLocation', $value);
        return $this;
    }
   /**
    * @param PostalAddress|string|Place|array $value
    * @return $this
    */
    public function setGameLocation($value)
    {
        $this->setProperty('gameLocation', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getGameLocation()
    {
       return $this->getProperty('gameLocation');
    }

    /**
    * The composer of the soundtrack.
    * @param Person|MusicGroup|array|string $value
    * @return $this
    * @deprecated use setMusicBy
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
   /**
    * @param Person|MusicGroup|array|string $value
    * @return $this
    */
    public function setMusicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMusicBy()
    {
       return $this->getProperty('musicBy');
    }

    /**
    * A season that is part of the media series.
    * @param CreativeWorkSeason|array|string $value
    * @return $this
    * @deprecated use setContainsSeason
    */
    public function containsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array|string $value
    * @return $this
    */
    public function setContainsSeason($value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getContainsSeason()
    {
       return $this->getProperty('containsSeason');
    }

    /**
    * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setDirectors
    */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirectors()
    {
       return $this->getProperty('directors');
    }

    /**
    * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
    * @param Thing|array|string $value
    * @return $this
    * @deprecated use setQuest
    */
    public function quest($value)
    {
        $this->setProperty('quest', $value);
        return $this;
    }
   /**
    * @param Thing|array|string $value
    * @return $this
    */
    public function setQuest($value)
    {
        $this->setProperty('quest', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getQuest()
    {
       return $this->getProperty('quest');
    }

    /**
    * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
    * @param GamePlayMode|array|string $value
    * @return $this
    * @deprecated use setPlayMode
    */
    public function playMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }
   /**
    * @param GamePlayMode|array|string $value
    * @return $this
    */
    public function setPlayMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPlayMode()
    {
       return $this->getProperty('playMode');
    }

    /**
    * The number of seasons in this series.
    * @param int|array|string $value
    * @return $this
    * @deprecated use setNumberOfSeasons
    */
    public function numberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }
   /**
    * @param int|array|string $value
    * @return $this
    */
    public function setNumberOfSeasons($value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfSeasons()
    {
       return $this->getProperty('numberOfSeasons');
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setDirector
    */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDirector()
    {
       return $this->getProperty('director');
    }

    /**
    * The production company or studio responsible for the item e.g. series, video game, episode etc.
    * @param Organization|array|string $value
    * @return $this
    * @deprecated use setProductionCompany
    */
    public function productionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }
   /**
    * @param Organization|array|string $value
    * @return $this
    */
    public function setProductionCompany($value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProductionCompany()
    {
       return $this->getProperty('productionCompany');
    }

    /**
    * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
    * @param Thing|array|string $value
    * @return $this
    * @deprecated use setCharacterAttribute
    */
    public function characterAttribute($value)
    {
        $this->setProperty('characterAttribute', $value);
        return $this;
    }
   /**
    * @param Thing|array|string $value
    * @return $this
    */
    public function setCharacterAttribute($value)
    {
        $this->setProperty('characterAttribute', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCharacterAttribute()
    {
       return $this->getProperty('characterAttribute');
    }

    /**
    * Indicate how many people can play this game (minimum, maximum, or range).
    * @param QuantitativeValue|array|string $value
    * @return $this
    * @deprecated use setNumberOfPlayers
    */
    public function numberOfPlayers($value)
    {
        $this->setProperty('numberOfPlayers', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array|string $value
    * @return $this
    */
    public function setNumberOfPlayers($value)
    {
        $this->setProperty('numberOfPlayers', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getNumberOfPlayers()
    {
       return $this->getProperty('numberOfPlayers');
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person|array|string $value
    * @return $this
    * @deprecated use setActors
    */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
   /**
    * @param Person|array|string $value
    * @return $this
    */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getActors()
    {
       return $this->getProperty('actors');
    }

    /**
    * An episode of a tv, radio or game media within a series or season.
    * @param Episode|array|string $value
    * @return $this
    * @deprecated use setEpisode
    */
    public function episode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }
   /**
    * @param Episode|array|string $value
    * @return $this
    */
    public function setEpisode($value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEpisode()
    {
       return $this->getProperty('episode');
    }


}
