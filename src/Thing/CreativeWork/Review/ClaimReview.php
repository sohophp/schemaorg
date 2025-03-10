<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Review;

use Sohophp\SchemaOrg\Thing\CreativeWork\Review;

/**
* A fact-checking review of claims made (or reported) in some creative work
 * (referenced via itemReviewed).
* @see schema:ClaimReview
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Review
*/
class ClaimReview extends Review
{


    /**
        * A short summary of the specific claims reviewed in a ClaimReview.
        * @param array|string|mixed $value
    * @return $this
    */
    public function claimReviewed($value)
    {
        $this->setProperty('claimReviewed', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setClaimReviewed($value)
    {
        $this->setProperty('claimReviewed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getClaimReviewed()
    {
       return $this->getProperty('claimReviewed');
    }


}
