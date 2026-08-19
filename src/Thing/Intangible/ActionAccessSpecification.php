<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
use Sohophp\SchemaOrg\Thing\Place;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\GeoShape;
use Sohophp\SchemaOrg\Thing\Intangible\MediaSubscription;

/**
 * A set of requirements that must be fulfilled in order to perform an Action.
 * @see https://schema.org/ActionAccessSpecification
 * @package Sohophp\SchemaOrg\Thing\Intangible
 */
class ActionAccessSpecification extends Intangible
{
    /**
     * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
     * @see https://schema.org/expectsAcceptanceOf
     * @param Offer|array $value
     * @return $this
     */
    public function expectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
     * @param Offer|array $value
     * @return $this
     */
    public function setExpectsAcceptanceOf($value)
    {
        $this->setProperty('expectsAcceptanceOf', $value);
        return $this;
    }

    /**
     * @param Offer $value
     * @return $this
     */
    public function addExpectsAcceptanceOf($value)
    {
        $current = $this->getProperty('expectsAcceptanceOf');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('expectsAcceptanceOf', $current);
        return $this;
    }

    /**
     * @return Offer|array
     */
    public function getExpectsAcceptanceOf()
    {
        return $this->getProperty('expectsAcceptanceOf');
    }
    /**
     * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
     * @see https://schema.org/category
     * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
     * @return $this
     */
    public function category($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
     * @param string|Thing|PhysicalActivityCategory|CategoryCode|array $value
     * @return $this
     */
    public function setCategory($value)
    {
        $this->setProperty('category', $value);
        return $this;
    }

    /**
     * @param string|Thing|PhysicalActivityCategory|CategoryCode $value
     * @return $this
     */
    public function addCategory($value)
    {
        $current = $this->getProperty('category');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('category', $current);
        return $this;
    }

    /**
     * @return string|Thing|PhysicalActivityCategory|CategoryCode|array
     */
    public function getCategory()
    {
        return $this->getProperty('category');
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid. See also [[ineligibleRegion]].
     * @see https://schema.org/eligibleRegion
     * @param Place|string|GeoShape|array $value
     * @return $this
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
     * @param Place|string|GeoShape $value
     * @return $this
     */
    public function addEligibleRegion($value)
    {
        $current = $this->getProperty('eligibleRegion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('eligibleRegion', $current);
        return $this;
    }

    /**
     * @return Place|string|GeoShape|array
     */
    public function getEligibleRegion()
    {
        return $this->getProperty('eligibleRegion');
    }
    /**
     * The beginning of the availability of the product or service included in the offer.
     * @see https://schema.org/availabilityStarts
     * @param mixed $value
     * @return $this
     */
    public function availabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setAvailabilityStarts($value)
    {
        $this->setProperty('availabilityStarts', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addAvailabilityStarts($value)
    {
        $current = $this->getProperty('availabilityStarts');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availabilityStarts', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailabilityStarts()
    {
        return $this->getProperty('availabilityStarts');
    }
    /**
     * Indicates if use of the media require a subscription (either paid or free). Allowed values are ```true``` or ```false``` (note that an earlier version had 'yes', 'no').
     * @see https://schema.org/requiresSubscription
     * @param MediaSubscription|bool|array $value
     * @return $this
     */
    public function requiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
     * @param MediaSubscription|bool|array $value
     * @return $this
     */
    public function setRequiresSubscription($value)
    {
        $this->setProperty('requiresSubscription', $value);
        return $this;
    }

    /**
     * @param MediaSubscription|bool $value
     * @return $this
     */
    public function addRequiresSubscription($value)
    {
        $current = $this->getProperty('requiresSubscription');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('requiresSubscription', $current);
        return $this;
    }

    /**
     * @return MediaSubscription|bool|array
     */
    public function getRequiresSubscription()
    {
        return $this->getProperty('requiresSubscription');
    }
    /**
     * The end of the availability of the product or service included in the offer.
     * @see https://schema.org/availabilityEnds
     * @param mixed $value
     * @return $this
     */
    public function availabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setAvailabilityEnds($value)
    {
        $this->setProperty('availabilityEnds', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addAvailabilityEnds($value)
    {
        $current = $this->getProperty('availabilityEnds');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('availabilityEnds', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailabilityEnds()
    {
        return $this->getProperty('availabilityEnds');
    }
    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed. See also [[eligibleRegion]].
     * @see https://schema.org/ineligibleRegion
     * @param Place|string|GeoShape|array $value
     * @return $this
     */
    public function ineligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
     * @param Place|string|GeoShape|array $value
     * @return $this
     */
    public function setIneligibleRegion($value)
    {
        $this->setProperty('ineligibleRegion', $value);
        return $this;
    }

    /**
     * @param Place|string|GeoShape $value
     * @return $this
     */
    public function addIneligibleRegion($value)
    {
        $current = $this->getProperty('ineligibleRegion');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ineligibleRegion', $current);
        return $this;
    }

    /**
     * @return Place|string|GeoShape|array
     */
    public function getIneligibleRegion()
    {
        return $this->getProperty('ineligibleRegion');
    }
}
