<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\AssessAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction;
use Sohophp\SchemaOrg\Thing\CreativeWork\Review;

/**
 * The act of producing a balanced opinion about the object for an audience. An agent reviews an object with participants resulting in a review.
 * @see https://schema.org/ReviewAction
 * @package Sohophp\SchemaOrg\Thing\Action\AssessAction
 */
class ReviewAction extends AssessAction
{
    /**
     * A sub property of result. The review that resulted in the performing of the action.
     * @see https://schema.org/resultReview
     * @param Review|array $value
     * @return $this
     */
    public function resultReview($value)
    {
        $this->setProperty('resultReview', $value);
        return $this;
    }

    /**
     * @param Review|array $value
     * @return $this
     */
    public function setResultReview($value)
    {
        $this->setProperty('resultReview', $value);
        return $this;
    }

    /**
     * @param Review $value
     * @return $this
     */
    public function addResultReview($value)
    {
        $current = $this->getProperty('resultReview');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('resultReview', $current);
        return $this;
    }

    /**
     * @return Review|array
     */
    public function getResultReview()
    {
        return $this->getProperty('resultReview');
    }
}
