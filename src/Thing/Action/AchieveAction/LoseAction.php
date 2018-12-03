<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AchieveAction;

use Sohophp\SchemaOrg\Thing\Action\AchieveAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * The act of being defeated in a competitive activity.
 *
 * @see http://schema.org/LoseAction
 */
class LoseAction extends AchieveAction
{
    /**
     * A sub property of participant. The winner of the action.
     *
     * @param Person $value
     *
     * @return $this
     */
    public function winner(?Person $value): self
    {
        $this->setProperty('winner', $value);

        return $this;
    }
}
