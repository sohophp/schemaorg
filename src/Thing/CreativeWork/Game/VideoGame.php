<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Game;

use Sohophp\SchemaOrg\Thing\CreativeWork\Game;
use Sohophp\SchemaOrg\Thing\Intangible\GameServer;
use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
 * A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device.
 *
 * @see http://schema.org/VideoGame
 */
class VideoGame extends Game
{
    /**
     * The server on which  it is possible to play the game.
     *
     * @param GameServer $value
     *
     * @return $this
     */
    public function gameServer(?GameServer $value): self
    {
        $this->setProperty('gameServer', $value);

        return $this;
    }

    /**
     * Links to tips, tactics, etc.
     *
     * @param CreativeWork $value
     *
     * @return $this
     */
    public function gameTip(?CreativeWork $value): self
    {
        $this->setProperty('gameTip', $value);

        return $this;
    }
}
