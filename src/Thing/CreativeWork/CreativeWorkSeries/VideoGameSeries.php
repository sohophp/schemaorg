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
    * @param Thing|array $value
    * @return $this
    */
    public function gameItem(?Thing $value)
    {
        $this->setProperty('gameItem', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setGameItem(?Thing $value)
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
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function seasons(?CreativeWorkSeason $value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function setSeasons(?CreativeWorkSeason $value)
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
    * @param Person|array $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActor(?Person $value)
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
    * @param int|array $value
    * @return $this
    */
    public function numberOfEpisodes(?int $value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setNumberOfEpisodes(?int $value)
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
    * @param VideoObject|array $value
    * @return $this
    */
    public function trailer(?VideoObject $value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }
   /**
    * @param VideoObject|array $value
    * @return $this
    */
    public function setTrailer(?VideoObject $value)
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
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function season(?CreativeWorkSeason $value)
    {
        $this->setProperty('season', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function setSeason(?CreativeWorkSeason $value)
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
    * @param Episode|array $value
    * @return $this
    */
    public function episodes(?Episode $value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }
   /**
    * @param Episode|array $value
    * @return $this
    */
    public function setEpisodes(?Episode $value)
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
    * @param CreativeWork|array $value
    * @return $this
    */
    public function cheatCode(?CreativeWork $value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setCheatCode(?CreativeWork $value)
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
    * @param Person|MusicGroup|array $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }
   /**
    * @param Person|MusicGroup|array $value
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
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function containsSeason(?CreativeWorkSeason $value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }
   /**
    * @param CreativeWorkSeason|array $value
    * @return $this
    */
    public function setContainsSeason(?CreativeWorkSeason $value)
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
    * @param Person|array $value
    * @return $this
    */
    public function directors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirectors(?Person $value)
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
    * @param Thing|array $value
    * @return $this
    */
    public function quest(?Thing $value)
    {
        $this->setProperty('quest', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setQuest(?Thing $value)
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
    * @param GamePlayMode|array $value
    * @return $this
    */
    public function playMode(?GamePlayMode $value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }
   /**
    * @param GamePlayMode|array $value
    * @return $this
    */
    public function setPlayMode(?GamePlayMode $value)
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
    * @param int|array $value
    * @return $this
    */
    public function numberOfSeasons(?int $value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setNumberOfSeasons(?int $value)
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
    * @param Person|array $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setDirector(?Person $value)
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
    * @param Organization|array $value
    * @return $this
    */
    public function productionCompany(?Organization $value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }
   /**
    * @param Organization|array $value
    * @return $this
    */
    public function setProductionCompany(?Organization $value)
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
    * @param Thing|array $value
    * @return $this
    */
    public function characterAttribute(?Thing $value)
    {
        $this->setProperty('characterAttribute', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setCharacterAttribute(?Thing $value)
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
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function numberOfPlayers(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfPlayers', $value);
        return $this;
    }
   /**
    * @param QuantitativeValue|array $value
    * @return $this
    */
    public function setNumberOfPlayers(?QuantitativeValue $value)
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
    * @param Person|array $value
    * @return $this
    */
    public function actors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setActors(?Person $value)
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
    * @param Episode|array $value
    * @return $this
    */
    public function episode(?Episode $value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }
   /**
    * @param Episode|array $value
    * @return $this
    */
    public function setEpisode(?Episode $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\CreativeWorkSeries\\VideoGameSeries','Thing\\VideoGameSeries');

