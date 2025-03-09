<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* [[Guide]] is a page or article that recommends specific products or services, or aspects of a thing for a user to consider. A [[Guide]] may represent a Buying Guide and detail aspects of products or services for a user to consider. A [[Guide]] may represent a Product Guide and recommend specific products or services. A [[Guide]] may represent a Ranked List and recommend specific products or services with ranking.
* @see schema:Guide
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Guide extends CreativeWork
{
   /**
        * This Review or Rating is relevant to this part or facet of the itemReviewed.
        */
    protected $reviewAspect = null;


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


}
