<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

/**
* OfferShippingDetails represents information about shipping destinations.
 * 
 * Multiple of these entities can be used to represent different shipping rates
 * for different destinations:
 * 
 * One entity for Alaska/Hawaii. A different one for continental US. A different
 * one for all France.
 * 
 * Multiple of these entities can be used to represent different shipping costs
 * and delivery times.
 * 
 * Two entities that are identical but differ in rate and time:
 * 
 * E.g. Cheaper and slower: $5 in 5-7 days
 * or Fast and expensive: $15 in 1-2 days.
* @see schema:OfferShippingDetails
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class OfferShippingDetails extends StructuredValue
{


    /**
        * The height of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function height($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setHeight($value)
    {
        $this->setProperty('height', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHeight()
    {
       return $this->getProperty('height');
    }


    /**
        * The width of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function width($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setWidth($value)
    {
        $this->setProperty('width', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWidth()
    {
       return $this->getProperty('width');
    }


    /**
        * The depth of the item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function depth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDepth($value)
    {
        $this->setProperty('depth', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDepth()
    {
       return $this->getProperty('depth');
    }


    /**
        * Indicates when shipping to a particular [[shippingDestination]] is not
 * available.
        * @param array|string|mixed $value
    * @return $this
    */
    public function doesNotShip($value)
    {
        $this->setProperty('doesNotShip', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDoesNotShip($value)
    {
        $this->setProperty('doesNotShip', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDoesNotShip()
    {
       return $this->getProperty('doesNotShip');
    }


    /**
        * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]]
 * (within the context of a [[shippingSettingsLink]] cross-reference).
        * @param array|string|mixed $value
    * @return $this
    */
    public function transitTimeLabel($value)
    {
        $this->setProperty('transitTimeLabel', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTransitTimeLabel($value)
    {
        $this->setProperty('transitTimeLabel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTransitTimeLabel()
    {
       return $this->getProperty('transitTimeLabel');
    }


    /**
        * indicates (possibly multiple) shipping destinations. These can be defined in
 * several ways, e.g. postalCode ranges.
        * @param array|string|mixed $value
    * @return $this
    */
    public function shippingDestination($value)
    {
        $this->setProperty('shippingDestination', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setShippingDestination($value)
    {
        $this->setProperty('shippingDestination', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingDestination()
    {
       return $this->getProperty('shippingDestination');
    }


    /**
        * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]]
 * (within the context of a [[shippingSettingsLink]] cross-reference).
        * @param array|string|mixed $value
    * @return $this
    */
    public function shippingLabel($value)
    {
        $this->setProperty('shippingLabel', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setShippingLabel($value)
    {
        $this->setProperty('shippingLabel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingLabel()
    {
       return $this->getProperty('shippingLabel');
    }


    /**
        * The shipping rate is the cost of shipping to the specified destination.
 * Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are
 * most appropriate.
        * @param array|string|mixed $value
    * @return $this
    */
    public function shippingRate($value)
    {
        $this->setProperty('shippingRate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setShippingRate($value)
    {
        $this->setProperty('shippingRate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingRate()
    {
       return $this->getProperty('shippingRate');
    }


    /**
        * The weight of the product or person.
        * @param array|string|mixed $value
    * @return $this
    */
    public function weight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setWeight($value)
    {
        $this->setProperty('weight', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getWeight()
    {
       return $this->getProperty('weight');
    }


    /**
        * The total delay between the receipt of the order and the goods reaching the
 * final customer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function deliveryTime($value)
    {
        $this->setProperty('deliveryTime', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setDeliveryTime($value)
    {
        $this->setProperty('deliveryTime', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDeliveryTime()
    {
       return $this->getProperty('deliveryTime');
    }


    /**
        * Indicates the origin of a shipment, i.e. where it should be coming from.
        * @param array|string|mixed $value
    * @return $this
    */
    public function shippingOrigin($value)
    {
        $this->setProperty('shippingOrigin', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setShippingOrigin($value)
    {
        $this->setProperty('shippingOrigin', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingOrigin()
    {
       return $this->getProperty('shippingOrigin');
    }


    /**
        * The membership program tier an Offer (or a PriceSpecification,
 * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
        * @param array|string|mixed $value
    * @return $this
    */
    public function validForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setValidForMemberTier($value)
    {
        $this->setProperty('validForMemberTier', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidForMemberTier()
    {
       return $this->getProperty('validForMemberTier');
    }


    /**
        * Link to a page containing [[ShippingRateSettings]] and
 * [[DeliveryTimeSettings]] details.
        * @param array|string|mixed $value
    * @return $this
    */
    public function shippingSettingsLink($value)
    {
        $this->setProperty('shippingSettingsLink', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setShippingSettingsLink($value)
    {
        $this->setProperty('shippingSettingsLink', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getShippingSettingsLink()
    {
       return $this->getProperty('shippingSettingsLink');
    }


}
