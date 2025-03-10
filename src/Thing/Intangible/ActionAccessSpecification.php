<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A set of requirements that must be fulfilled in order to perform an Action.
* @see schema:ActionAccessSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class ActionAccessSpecification extends Intangible
{


    /**
        * The end of the availability of the product or service included in the offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailabilityEnds()
    {
       return $this->getProperty('availabilityEnds');
    }


    /**
        * An Offer which must be accepted before the user can perform the Action. For
 * example, the user may need to buy a movie before being able to watch it.
        * @param array|string|mixed $value
    * @return $this
    */
    public function expectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setExpectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpectsAcceptanceOf()
    {
       return $this->getProperty('expectsAcceptanceOf');
    }


    /**
        * A category for the item. Greater signs or slashes can be used to informally
 * indicate a category hierarchy.
        * @param array|string|mixed $value
    * @return $this
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }


    /**
        * The beginning of the availability of the product or service included in the
 * offer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function availabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAvailabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAvailabilityStarts()
    {
       return $this->getProperty('availabilityStarts');
    }


    /**
        * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
 * GeoShape for the geo-political region(s) for which the offer or delivery
 * charge specification is valid.
 * 
 * See also [[ineligibleRegion]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function eligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setEligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEligibleRegion()
    {
       return $this->getProperty('eligibleRegion');
    }


    /**
        * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
 * GeoShape for the geo-political region(s) for which the offer or delivery
 * charge specification is not valid, e.g. a region where the transaction is not
 * allowed.
 * 
 * See also [[eligibleRegion]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function ineligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setIneligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIneligibleRegion()
    {
       return $this->getProperty('ineligibleRegion');
    }


    /**
        * Indicates if use of the media require a subscription  (either paid or free).
 * Allowed values are ```true``` or ```false``` (note that an earlier version
 * had 'yes', 'no').
        * @param array|string|mixed $value
    * @return $this
    */
    public function requiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setRequiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getRequiresSubscription()
    {
       return $this->getProperty('requiresSubscription');
    }


}
