<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * The act of expressing a preference from a fixed/finite/structured set of choices/options.
 * @see https://schema.org/VoteAction
 * @package Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction
 */
class VoteAction extends ChooseAction
{
    /**
     * A sub property of object. The candidate subject of this action.
     * @see https://schema.org/candidate
     * @param Person|array $value
     * @return $this
     */
    public function candidate($value)
    {
        $this->setProperty('candidate', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setCandidate($value)
    {
        $this->setProperty('candidate', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addCandidate($value)
    {
        $current = $this->getProperty('candidate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('candidate', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getCandidate()
    {
        return $this->getProperty('candidate');
    }
}
