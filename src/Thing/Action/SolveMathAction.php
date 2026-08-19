<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
 * The action that takes in a math expression and directs users to a page potentially capable of solving/simplifying that expression.
 * @see https://schema.org/SolveMathAction
 * @package Sohophp\SchemaOrg\Thing\Action
 */
class SolveMathAction extends Action
{
    /**
     * For questions that are part of learning resources (e.g. Quiz), eduQuestionType indicates the format of question being given. Example: "Multiple choice", "Open ended", "Flashcard".
     * @see https://schema.org/eduQuestionType
     * @param string|array $value
     * @return $this
     */
    public function eduQuestionType($value)
    {
        $this->setProperty('eduQuestionType', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setEduQuestionType($value)
    {
        $this->setProperty('eduQuestionType', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addEduQuestionType($value)
    {
        $current = $this->getProperty('eduQuestionType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eduQuestionType', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getEduQuestionType()
    {
        return $this->getProperty('eduQuestionType');
    }
}
