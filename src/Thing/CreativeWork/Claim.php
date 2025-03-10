<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A [[Claim]] in Schema.org represents a specific, factually-oriented claim
 * that could be the [[itemReviewed]] in a [[ClaimReview]]. The content of a
 * claim can be summarized with the [[text]] property. Variations on well known
 * claims can have their common identity indicated via [[sameAs]] links, and
 * summarized with a [[name]]. Ideally, a [[Claim]] description includes enough
 * contextual information to minimize the risk of ambiguity or inclarity. In
 * practice, many claims are better understood in the context in which they
 * appear or the interpretations provided by claim reviews.
 * 
 * Beyond [[ClaimReview]], the Claim type can be associated with related
 * creative works - for example a [[ScholaryArticle]] or [[Question]] might be
 * [[about]] some [[Claim]].
 * 
 * At this time, Schema.org does not define any types of relationship between
 * claims. This is a natural area for future exploration.
* @see http://schema.org/Claim
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Claim extends CreativeWork
{


    /**
        * Indicates the first known occurence of a [[Claim]] in some [[CreativeWork]].
        * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function firstAppearance($value)
    {
        $this->setProperty('firstAppearance', $value);
        return $this;
    }

    /**
    * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function setFirstAppearance($value)
    {
        $this->setProperty('firstAppearance', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getFirstAppearance()
    {
       return $this->getProperty('firstAppearance');
    }


    /**
        * Indicates an occurence of a [[Claim]] in some [[CreativeWork]].
        * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function appearance($value)
    {
        $this->setProperty('appearance', $value);
        return $this;
    }

    /**
    * @param CreativeWork|array|string|mixed $value
    * @return $this
    */
    public function setAppearance($value)
    {
        $this->setProperty('appearance', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAppearance()
    {
       return $this->getProperty('appearance');
    }


}
