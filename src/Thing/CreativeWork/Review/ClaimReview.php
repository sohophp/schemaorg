<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Review;

use Sohophp\SchemaOrg\Thing\CreativeWork\Review;

/**
* A fact-checking review of claims made (or reported) in some creative work (referenced via itemReviewed).
* @see http://schema.org/ClaimReview
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Review

*
*/
class ClaimReview extends Review
{

    /**
    * A short summary of the specific claims reviewed in a ClaimReview.
    * @param string|array $value
    * @return $this
    * @deprecated use setClaimReviewed
    */
    public function claimReviewed($value)
    {
        $this->setProperty('claimReviewed', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setClaimReviewed($value)
    {
        $this->setProperty('claimReviewed', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getClaimReviewed()
    {
       return $this->getProperty('claimReviewed');
    }


}
