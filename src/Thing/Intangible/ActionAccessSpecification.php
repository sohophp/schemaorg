<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\MediaSubscription;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;

/**
* A set of requirements that a must be fulfilled in order to perform an Action.
* @see http://schema.org/ActionAccessSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class ActionAccessSpecification extends Intangible
{

    /**
    * The beginning of the availability of the product or service included in the offer.
    * @param array|string $value
    * @return $this
    * @deprecated use setAvailabilityStarts
    */
    public function availabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setAvailabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailabilityStarts()
    {
       return $this->getProperty('availabilityStarts');
    }

    /**
    * Indicates if use of the media require a subscription  (either paid or free). Allowed values are <code>true</code> or <code>false</code> (note that an earlier version had 'yes', 'no').
    * @param MediaSubscription|bool|array|string $value
    * @return $this
    * @deprecated use setRequiresSubscription
    */
    public function requiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }
   /**
    * @param MediaSubscription|bool|array|string $value
    * @return $this
    */
    public function setRequiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getRequiresSubscription()
    {
       return $this->getProperty('requiresSubscription');
    }

    /**
    * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
    * @param string|PhysicalActivityCategory|Thing|array $value
    * @return $this
    * @deprecated use setCategory
    */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }
   /**
    * @param string|PhysicalActivityCategory|Thing|array $value
    * @return $this
    */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCategory()
    {
       return $this->getProperty('category');
    }

    /**
    * The end of the availability of the product or service included in the offer.
    * @param array|string $value
    * @return $this
    * @deprecated use setAvailabilityEnds
    */
    public function availabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }
   /**
    * @param array|string $value
    * @return $this
    */
    public function setAvailabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAvailabilityEnds()
    {
       return $this->getProperty('availabilityEnds');
    }

    /**
    * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
    * @param Offer|array|string $value
    * @return $this
    * @deprecated use setExpectsAcceptanceOf
    */
    public function expectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }
   /**
    * @param Offer|array|string $value
    * @return $this
    */
    public function setExpectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getExpectsAcceptanceOf()
    {
       return $this->getProperty('expectsAcceptanceOf');
    }

    /**
    * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br/><br/>

See also <a class="localLink" href="http://schema.org/ineligibleRegion">ineligibleRegion</a>.
    * @param Place|string|GeoShape|array $value
    * @return $this
    * @deprecated use setEligibleRegion
    */
    public function eligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }
   /**
    * @param Place|string|GeoShape|array $value
    * @return $this
    */
    public function setEligibleRegion($value)
    {
        $this->setProperty('eligibleRegion', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEligibleRegion()
    {
       return $this->getProperty('eligibleRegion');
    }


}
