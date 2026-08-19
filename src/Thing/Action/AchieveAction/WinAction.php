<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AchieveAction;

use Sohophp\SchemaOrg\Thing\Action\AchieveAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * The act of achieving victory in a competitive activity.
 * @see https://schema.org/WinAction
 * @package Sohophp\SchemaOrg\Thing\Action\AchieveAction
 */
class WinAction extends AchieveAction
{
    /**
     * A sub property of participant. The loser of the action.
     * @see https://schema.org/loser
     * @param Person|array $value
     * @return $this
     */
    public function loser($value)
    {
        $this->setProperty('loser', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setLoser($value)
    {
        $this->setProperty('loser', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addLoser($value)
    {
        $current = $this->getProperty('loser');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('loser', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getLoser()
    {
        return $this->getProperty('loser');
    }
}
