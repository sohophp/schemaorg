<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * An agent approves/certifies/likes/supports/sanctions an object.
 * @see https://schema.org/EndorseAction
 * @package Sohophp\SchemaOrg\Thing\Action\AssessAction\ReactAction
 */
class EndorseAction extends ReactAction
{
    /**
     * A sub property of participant. The person/organization being supported.
     * @see https://schema.org/endorsee
     * @param Organization|Person|array $value
     * @return $this
     */
    public function endorsee($value)
    {
        $this->setProperty('endorsee', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setEndorsee($value)
    {
        $this->setProperty('endorsee', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addEndorsee($value)
    {
        $current = $this->getProperty('endorsee');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('endorsee', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getEndorsee()
    {
        return $this->getProperty('endorsee');
    }
}
