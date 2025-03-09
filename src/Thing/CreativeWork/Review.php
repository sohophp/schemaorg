<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A review of an item - for example, of a restaurant, movie, or store.
* @see schema:Review
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Review extends CreativeWork
{
   /**
        * Provides negative considerations regarding something, most typically in pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry 

In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described. Since product descriptions 
tend to emphasise positive claims, it may be relatively unusual to find [[negativeNotes]] used in this way. Nevertheless for the sake of symmetry, [[negativeNotes]] can be used on [[Product]].

The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most negative is at the beginning of the list).
        */
    protected $negativeNotes = null;

   /**
        * The rating given in this review. Note that reviews can themselves be rated. The ```reviewRating``` applies to rating given by the review. The [[aggregateRating]] property applies to the review itself, as a creative work.
        */
    protected $reviewRating = null;

   /**
        * An associated [[Review]].
        */
    protected $associatedReview = null;

   /**
        * An associated [[ClaimReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
        */
    protected $associatedClaimReview = null;

   /**
        * This Review or Rating is relevant to this part or facet of the itemReviewed.
        */
    protected $reviewAspect = null;

   /**
        * Provides positive considerations regarding something, for example product highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.

In the case of a [[Review]], the property describes the [[itemReviewed]] from the perspective of the review; in the case of a [[Product]], the product itself is being described.

The property values can be expressed either as unstructured text (repeated as necessary), or if ordered, as a list (in which case the most positive is at the beginning of the list).
        */
    protected $positiveNotes = null;

   /**
        * An associated [[MediaReview]], related by specific common content, topic or claim. The expectation is that this property would be most typically used in cases where a single activity is conducting both claim reviews and media reviews, in which case [[relatedMediaReview]] would commonly be used on a [[ClaimReview]], while [[relatedClaimReview]] would be used on [[MediaReview]].
        */
    protected $associatedMediaReview = null;

   /**
        * The item that is being reviewed/rated.
        */
    protected $itemReviewed = null;

   /**
        * The actual body of the review.
        */
    protected $reviewBody = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setNegativeNotes($value)
    {
        $this->setProperty('negativeNotes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNegativeNotes()
    {
       return $this->getProperty('negativeNotes');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReviewRating($value)
    {
        $this->setProperty('reviewRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviewRating()
    {
       return $this->getProperty('reviewRating');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAssociatedReview($value)
    {
        $this->setProperty('associatedReview', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedReview()
    {
       return $this->getProperty('associatedReview');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAssociatedClaimReview($value)
    {
        $this->setProperty('associatedClaimReview', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedClaimReview()
    {
       return $this->getProperty('associatedClaimReview');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReviewAspect($value)
    {
        $this->setProperty('reviewAspect', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviewAspect()
    {
       return $this->getProperty('reviewAspect');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPositiveNotes($value)
    {
        $this->setProperty('positiveNotes', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPositiveNotes()
    {
       return $this->getProperty('positiveNotes');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAssociatedMediaReview($value)
    {
        $this->setProperty('associatedMediaReview', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedMediaReview()
    {
       return $this->getProperty('associatedMediaReview');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setItemReviewed($value)
    {
        $this->setProperty('itemReviewed', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getItemReviewed()
    {
       return $this->getProperty('itemReviewed');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReviewBody($value)
    {
        $this->setProperty('reviewBody', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReviewBody()
    {
       return $this->getProperty('reviewBody');
    }


}
