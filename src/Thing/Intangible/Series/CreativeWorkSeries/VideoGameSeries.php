<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;

use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\CreativeWork\CreativeWorkSeason;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\Episode;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GamePlayMode;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* A video game series.
* @see http://schema.org/VideoGameSeries
* @package Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries
*/
class VideoGameSeries extends CreativeWorkSeries
{

    /**
    * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
    * @param Thing $value
    * @return $this
    */
    public function gameItem(?Thing $value)
    {
        $this->setProperty('gameItem', $value);
        return $this;
    }

    /**
    * A season in a media series.
    * @param CreativeWorkSeason $value
    * @return $this
    */
    public function seasons(?CreativeWorkSeason $value)
    {
        $this->setProperty('seasons', $value);
        return $this;
    }

    /**
    * The electronic systems used to play <a href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video games</a>.
    * @param string|Thing|string $value
    * @return $this
    */
    public function gamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function actor(?Person $value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
    * The number of episodes in this season or series.
    * @param int $value
    * @return $this
    */
    public function numberOfEpisodes(?int $value)
    {
        $this->setProperty('numberOfEpisodes', $value);
        return $this;
    }

    /**
    * The trailer of a movie or tv/radio series, season, episode, etc.
    * @param VideoObject $value
    * @return $this
    */
    public function trailer(?VideoObject $value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
    * A season in a media series.
    * @param CreativeWorkSeason $value
    * @return $this
    */
    public function season(?CreativeWorkSeason $value)
    {
        $this->setProperty('season', $value);
        return $this;
    }

    /**
    * An episode of a TV/radio series or season.
    * @param Episode $value
    * @return $this
    */
    public function episodes(?Episode $value)
    {
        $this->setProperty('episodes', $value);
        return $this;
    }

    /**
    * Cheat codes to the game.
    * @param CreativeWork $value
    * @return $this
    */
    public function cheatCode(?CreativeWork $value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }

    /**
    * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
    * @param Thing $value
    * @return $this
    */
    public function characterAttribute(?Thing $value)
    {
        $this->setProperty('characterAttribute', $value);
        return $this;
    }

    /**
    * Real or fictional location of the game (or part of game).
    * @param Place|string|PostalAddress $value
    * @return $this
    */
    public function gameLocation($value)
    {
        $this->setProperty('gameLocation', $value);
        return $this;
    }

    /**
    * The composer of the soundtrack.
    * @param Person|MusicGroup $value
    * @return $this
    */
    public function musicBy($value)
    {
        $this->setProperty('musicBy', $value);
        return $this;
    }

    /**
    * A season that is part of the media series.
    * @param CreativeWorkSeason $value
    * @return $this
    */
    public function containsSeason(?CreativeWorkSeason $value)
    {
        $this->setProperty('containsSeason', $value);
        return $this;
    }

    /**
    * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function directors(?Person $value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
    * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
    * @param GamePlayMode $value
    * @return $this
    */
    public function playMode(?GamePlayMode $value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }

    /**
    * The number of seasons in this series.
    * @param int $value
    * @return $this
    */
    public function numberOfSeasons(?int $value)
    {
        $this->setProperty('numberOfSeasons', $value);
        return $this;
    }

    /**
    * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function director(?Person $value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
    * The production company or studio responsible for the item e.g. series, video game, episode etc.
    * @param Organization $value
    * @return $this
    */
    public function productionCompany(?Organization $value)
    {
        $this->setProperty('productionCompany', $value);
        return $this;
    }

    /**
    * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
    * @param Thing $value
    * @return $this
    */
    public function quest(?Thing $value)
    {
        $this->setProperty('quest', $value);
        return $this;
    }

    /**
    * Indicate how many people can play this game (minimum, maximum, or range).
    * @param QuantitativeValue $value
    * @return $this
    */
    public function numberOfPlayers(?QuantitativeValue $value)
    {
        $this->setProperty('numberOfPlayers', $value);
        return $this;
    }

    /**
    * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
    * @param Person $value
    * @return $this
    */
    public function actors(?Person $value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
    * An episode of a tv, radio or game media within a series or season.
    * @param Episode $value
    * @return $this
    */
    public function episode(?Episode $value)
    {
        $this->setProperty('episode', $value);
        return $this;
    }


}

