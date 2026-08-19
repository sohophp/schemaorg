<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;

use Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\GamePlayMode;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup;
use Sohophp\SchemaOrg\Thing\Intangible\GameServer;
use Sohophp\SchemaOrg\Thing\Organization\PerformingGroup\MusicGroup;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\VideoObject;

/**
 * A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device.
 * @see https://schema.org/VideoGame
 * @package Sohophp\SchemaOrg\Thing\CreativeWork\SoftwareApplication
 */
class VideoGame extends SoftwareApplication
{
    /**
     * Indicates whether this game is multi-player, co-op or single-player. The game can be marked as multi-player, co-op and single-player at the same time.
     * @see https://schema.org/playMode
     * @param GamePlayMode|array $value
     * @return $this
     */
    public function playMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }

    /**
     * @param GamePlayMode|array $value
     * @return $this
     */
    public function setPlayMode($value)
    {
        $this->setProperty('playMode', $value);
        return $this;
    }

    /**
     * @param GamePlayMode $value
     * @return $this
     */
    public function addPlayMode($value)
    {
        $current = $this->getProperty('playMode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('playMode', $current);
        return $this;
    }

    /**
     * @return GamePlayMode|array
     */
    public function getPlayMode()
    {
        return $this->getProperty('playMode');
    }
    /**
     * Links to tips, tactics, etc.
     * @see https://schema.org/gameTip
     * @param CreativeWork|array $value
     * @return $this
     */
    public function gameTip($value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setGameTip($value)
    {
        $this->setProperty('gameTip', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addGameTip($value)
    {
        $current = $this->getProperty('gameTip');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gameTip', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getGameTip()
    {
        return $this->getProperty('gameTip');
    }
    /**
     * The electronic systems used to play [video games](http://en.wikipedia.org/wiki/Category:Video_game_platforms).
     * @see https://schema.org/gamePlatform
     * @param string|Thing|array $value
     * @return $this
     */
    public function gamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }

    /**
     * @param string|Thing|array $value
     * @return $this
     */
    public function setGamePlatform($value)
    {
        $this->setProperty('gamePlatform', $value);
        return $this;
    }

    /**
     * @param string|Thing $value
     * @return $this
     */
    public function addGamePlatform($value)
    {
        $current = $this->getProperty('gamePlatform');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gamePlatform', $current);
        return $this;
    }

    /**
     * @return string|Thing|array
     */
    public function getGamePlatform()
    {
        return $this->getProperty('gamePlatform');
    }
    /**
     * An actor (individual or a group), e.g. in TV, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/actor
     * @param Person|PerformingGroup|array $value
     * @return $this
     */
    public function actor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
     * @param Person|PerformingGroup|array $value
     * @return $this
     */
    public function setActor($value)
    {
        $this->setProperty('actor', $value);
        return $this;
    }

    /**
     * @param Person|PerformingGroup $value
     * @return $this
     */
    public function addActor($value)
    {
        $current = $this->getProperty('actor');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actor', $current);
        return $this;
    }

    /**
     * @return Person|PerformingGroup|array
     */
    public function getActor()
    {
        return $this->getProperty('actor');
    }
    /**
     * The server on which it is possible to play the game.
     * @see https://schema.org/gameServer
     * @param GameServer|array $value
     * @return $this
     */
    public function gameServer($value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }

    /**
     * @param GameServer|array $value
     * @return $this
     */
    public function setGameServer($value)
    {
        $this->setProperty('gameServer', $value);
        return $this;
    }

    /**
     * @param GameServer $value
     * @return $this
     */
    public function addGameServer($value)
    {
        $current = $this->getProperty('gameServer');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gameServer', $current);
        return $this;
    }

    /**
     * @return GameServer|array
     */
    public function getGameServer()
    {
        return $this->getProperty('gameServer');
    }
    /**
     * A director of e.g. TV, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/directors
     * @param Person|array $value
     * @return $this
     */
    public function directors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setDirectors($value)
    {
        $this->setProperty('directors', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addDirectors($value)
    {
        $current = $this->getProperty('directors');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('directors', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getDirectors()
    {
        return $this->getProperty('directors');
    }
    /**
     * Cheat codes to the game.
     * @see https://schema.org/cheatCode
     * @param CreativeWork|array $value
     * @return $this
     */
    public function cheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }

    /**
     * @param CreativeWork|array $value
     * @return $this
     */
    public function setCheatCode($value)
    {
        $this->setProperty('cheatCode', $value);
        return $this;
    }

    /**
     * @param CreativeWork $value
     * @return $this
     */
    public function addCheatCode($value)
    {
        $current = $this->getProperty('cheatCode');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('cheatCode', $current);
        return $this;
    }

    /**
     * @return CreativeWork|array
     */
    public function getCheatCode()
    {
        return $this->getProperty('cheatCode');
    }
    /**
     * The edition of a video game.
     * @see https://schema.org/gameEdition
     * @param string|array $value
     * @return $this
     */
    public function gameEdition($value)
    {
        $this->setProperty('gameEdition', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setGameEdition($value)
    {
        $this->setProperty('gameEdition', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addGameEdition($value)
    {
        $current = $this->getProperty('gameEdition');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('gameEdition', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getGameEdition()
    {
        return $this->getProperty('gameEdition');
    }
    /**
     * An actor, e.g. in TV, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/actors
     * @param Person|array $value
     * @return $this
     */
    public function actors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setActors($value)
    {
        $this->setProperty('actors', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addActors($value)
    {
        $current = $this->getProperty('actors');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actors', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getActors()
    {
        return $this->getProperty('actors');
    }
    /**
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     * @see https://schema.org/director
     * @param Person|array $value
     * @return $this
     */
    public function director($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setDirector($value)
    {
        $this->setProperty('director', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addDirector($value)
    {
        $current = $this->getProperty('director');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('director', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getDirector()
    {
        return $this->getProperty('director');
    }
    /**
     * The composer of the soundtrack.
     * @see https://schema.org/musicBy
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
     * @param Person|MusicGroup $value
     * @return $this
     */
    public function addMusicBy($value)
    {
        $current = $this->getProperty('musicBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('musicBy', $current);
        return $this;
    }

    /**
     * @return Person|MusicGroup|array
     */
    public function getMusicBy()
    {
        return $this->getProperty('musicBy');
    }
    /**
     * The trailer of a movie or TV/radio series, season, episode, etc.
     * @see https://schema.org/trailer
     * @param VideoObject|array $value
     * @return $this
     */
    public function trailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
     * @param VideoObject|array $value
     * @return $this
     */
    public function setTrailer($value)
    {
        $this->setProperty('trailer', $value);
        return $this;
    }

    /**
     * @param VideoObject $value
     * @return $this
     */
    public function addTrailer($value)
    {
        $current = $this->getProperty('trailer');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('trailer', $current);
        return $this;
    }

    /**
     * @return VideoObject|array
     */
    public function getTrailer()
    {
        return $this->getProperty('trailer');
    }
}
