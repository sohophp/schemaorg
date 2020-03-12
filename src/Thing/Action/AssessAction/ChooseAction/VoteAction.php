<?php declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * The act of expressing a preference from a fixed/finite/structured set of choices/options.
 * @see http://schema.org/VoteAction
 * @package Sohophp\SchemaOrg\Thing\Action\AssessAction\ChooseAction
 *
 */
class VoteAction extends ChooseAction
{

    /**
     * A sub property of object. The candidate subject of this action.
     * @param Person|array $value
     * @return $this
     */
    public function candidate(?Person $value)
    {
        $this->setProperty('candidate', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setCandidate(?Person $value)
    {
        $this->setProperty('candidate', $value);
        return $this;
    }

    /**
     * @return $this|string|array
     */
    public function getCandidate()
    {
        return $this->getProperty('candidate');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\AssessAction\\ChooseAction\\VoteAction', 'Thing\\VoteAction');

