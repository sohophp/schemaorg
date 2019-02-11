<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;

/**
* The Game type represents things which are games. These are typically rule-governed recreational activities, e.g. role-playing games in which players assume the role of characters in a fictional setting.
* @see http://schema.org/Game
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Game extends CreativeWork
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


}

