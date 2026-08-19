<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AchieveAction;

use Sohophp\SchemaOrg\Thing\Action\AchieveAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * The act of being defeated in a competitive activity.
 * @see https://schema.org/LoseAction
 * @package Sohophp\SchemaOrg\Thing\Action\AchieveAction
 */
class LoseAction extends AchieveAction
{
    /**
     * A sub property of participant. The winner of the action.
     * @see https://schema.org/winner
     * @param Person|array $value
     * @return $this
     */
    public function winner($value)
    {
        $this->setProperty('winner', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setWinner($value)
    {
        $this->setProperty('winner', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addWinner($value)
    {
        $current = $this->getProperty('winner');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('winner', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getWinner()
    {
        return $this->getProperty('winner');
    }
}
