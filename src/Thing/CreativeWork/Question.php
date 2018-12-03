<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
use Sohophp\SchemaOrg\Thing\CreativeWork\Comment\Answer;

/**
 * A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked Questions (FAQ) document.
 *
 * @see http://schema.org/Question
 */
class Question extends CreativeWork
{
    /**
     * The number of answers this question has received.
     *
     * @param int $value
     *
     * @return $this
     */
    public function answerCount(?int $value): self
    {
        $this->setProperty('answerCount', $value);

        return $this;
    }

    /**
     * The answer(s) that has been accepted as best, typically on a Question/Answer site. Sites vary in their selection mechanisms, e.g. drawing on community opinion and/or the view of the Question author.
     *
     * @param ItemList|Answer $value
     *
     * @return $this
     */
    public function acceptedAnswer($value): self
    {
        $this->setProperty('acceptedAnswer', $value);

        return $this;
    }

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
     *
     * @param ItemList|Answer $value
     *
     * @return $this
     */
    public function suggestedAnswer($value): self
    {
        $this->setProperty('suggestedAnswer', $value);

        return $this;
    }
}
