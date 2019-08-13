<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Review;

use Sohophp\SchemaOrg\Thing\CreativeWork\Review;

/**
* A fact-checking review of claims made (or reported) in some creative work (referenced via itemReviewed).
* @see http://schema.org/ClaimReview
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Review
*/
class ClaimReview extends Review
{

    /**
    * A short summary of the specific claims reviewed in a ClaimReview.
    * @param string $value
    * @return $this
    */
    public function claimReviewed(?string $value)
    {
        $this->setProperty('claimReviewed', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Review\\ClaimReview','Thing\\ClaimReview');

