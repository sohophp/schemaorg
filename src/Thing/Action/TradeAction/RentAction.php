<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TradeAction;

use Sohophp\SchemaOrg\Thing\Action\TradeAction;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Place\LocalBusiness\RealEstateAgent;

/**
 * The act of giving money in return for temporary use, but not ownership, of an object such as a vehicle or property. For example, an agent rents a property from a landlord in exchange for a periodic payment.
 * @see https://schema.org/RentAction
 * @package Sohophp\SchemaOrg\Thing\Action\TradeAction
 */
class RentAction extends TradeAction
{
    /**
     * A sub property of participant. The owner of the real estate property.
     * @see https://schema.org/landlord
     * @param Organization|Person|array $value
     * @return $this
     */
    public function landlord($value)
    {
        $this->setProperty('landlord', $value);
        return $this;
    }

    /**
     * @param Organization|Person|array $value
     * @return $this
     */
    public function setLandlord($value)
    {
        $this->setProperty('landlord', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function addLandlord($value)
    {
        $current = $this->getProperty('landlord');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('landlord', $current);
        return $this;
    }

    /**
     * @return Organization|Person|array
     */
    public function getLandlord()
    {
        return $this->getProperty('landlord');
    }
    /**
     * A sub property of participant. The real estate agent involved in the action.
     * @see https://schema.org/realEstateAgent
     * @param RealEstateAgent|array $value
     * @return $this
     */
    public function realEstateAgent($value)
    {
        $this->setProperty('realEstateAgent', $value);
        return $this;
    }

    /**
     * @param RealEstateAgent|array $value
     * @return $this
     */
    public function setRealEstateAgent($value)
    {
        $this->setProperty('realEstateAgent', $value);
        return $this;
    }

    /**
     * @param RealEstateAgent $value
     * @return $this
     */
    public function addRealEstateAgent($value)
    {
        $current = $this->getProperty('realEstateAgent');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('realEstateAgent', $current);
        return $this;
    }

    /**
     * @return RealEstateAgent|array
     */
    public function getRealEstateAgent()
    {
        return $this->getProperty('realEstateAgent');
    }
}
