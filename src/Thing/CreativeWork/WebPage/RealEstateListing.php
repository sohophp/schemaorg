<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage;

/**
* A [[RealEstateListing]] is a listing that describes one or more real-estate
 * [[Offer]]s (whose [[businessFunction]] is typically to lease out, or to
 * sell).
 *   The [[RealEstateListing]] type itself represents the overall listing, as
 * manifested in some [[WebPage]].
* @see schema:RealEstateListing
* @package Sohophp\SchemaOrg\Thing\CreativeWork\WebPage
*/
class RealEstateListing extends WebPage
{


    /**
        * Publication date of an online listing.
        * @param array|string|mixed $value
    * @return $this
    */
    public function datePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDatePosted($value)
    {
        $this->setProperty('datePosted', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDatePosted()
    {
       return $this->getProperty('datePosted');
    }


    /**
        * Length of the lease for some [[Accommodation]], either particular to some
 * [[Offer]] or in some cases intrinsic to the property.
        * @param array|string|mixed $value
    * @return $this
    */
    public function leaseLength($value)
    {
        $this->setProperty('leaseLength', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLeaseLength($value)
    {
        $this->setProperty('leaseLength', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLeaseLength()
    {
       return $this->getProperty('leaseLength');
    }


}
