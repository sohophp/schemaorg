<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;

use Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment\Question;

/**
 * The act of posing a question / favor to someone. Related actions: * [[ReplyAction]]: Appears generally as a response to AskAction.
 * @see https://schema.org/AskAction
 * @package Sohophp\SchemaOrg\Thing\Action\InteractAction\CommunicateAction
 */
class AskAction extends CommunicateAction
{
    /**
     * A sub property of object. A question.
     * @see https://schema.org/question
     * @param Question|array $value
     * @return $this
     */
    public function question($value)
    {
        $this->setProperty('question', $value);
        return $this;
    }

    /**
     * @param Question|array $value
     * @return $this
     */
    public function setQuestion($value)
    {
        $this->setProperty('question', $value);
        return $this;
    }

    /**
     * @param Question $value
     * @return $this
     */
    public function addQuestion($value)
    {
        $current = $this->getProperty('question');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('question', $current);
        return $this;
    }

    /**
     * @return Question|array
     */
    public function getQuestion()
    {
        return $this->getProperty('question');
    }
}
