<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ShippingService;
  use Sohophp\SchemaOrg\Thing\Intangible\MemberProgramTier;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Quantity\Distance;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ShippingDeliveryTime;
  use Sohophp\SchemaOrg\Quantity\Mass;
  use Sohophp\SchemaOrg\Thing\Place\DefinedRegion;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ShippingRateSettings;

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
      * Specification of a shipping service offered by the organization.
    * @param ShippingService|array $value
  * @return $this
  */
  public function hasShippingService($value)
  {
  $this->setProperty('hasShippingService', $value);
  return $this;
  }

  /**
  * @param ShippingService|array $value
  * @return $this
  */
  public function setHasShippingService($value)
  {
  $this->setProperty('hasShippingService', $value);
  return $this;
  }

  /**
  * @param ShippingService $value
  * @return $this
  */
  public function addHasShippingService($value)
  {
  $current = $this->getProperty('hasShippingService');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('hasShippingService', $current);
  return $this;
  }

  /**
  * @return ShippingService|array
  */
  public function getHasShippingService()
  {
  return $this->getProperty('hasShippingService');
  }


  /**
      * The membership program tier(s) an Offer (or a PriceSpecification,
 * OfferShippingDetails, or MerchantReturnPolicy under an Offer) is valid for.
    * @param MemberProgramTier|array $value
  * @return $this
  */
  public function validForMemberTier($value)
  {
  $this->setProperty('validForMemberTier', $value);
  return $this;
  }

  /**
  * @param MemberProgramTier|array $value
  * @return $this
  */
  public function setValidForMemberTier($value)
  {
  $this->setProperty('validForMemberTier', $value);
  return $this;
  }

  /**
  * @param MemberProgramTier $value
  * @return $this
  */
  public function addValidForMemberTier($value)
  {
  $current = $this->getProperty('validForMemberTier');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('validForMemberTier', $current);
  return $this;
  }

  /**
  * @return MemberProgramTier|array
  */
  public function getValidForMemberTier()
  {
  return $this->getProperty('validForMemberTier');
  }


  /**
      * Label to match an [[OfferShippingDetails]] with a [[DeliveryTimeSettings]]
 * (within the context of a [[shippingSettingsLink]] cross-reference).
    * @param string|array $value
  * @return $this
  */
  public function transitTimeLabel($value)
  {
  $this->setProperty('transitTimeLabel', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTransitTimeLabel($value)
  {
  $this->setProperty('transitTimeLabel', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTransitTimeLabel($value)
  {
  $current = $this->getProperty('transitTimeLabel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('transitTimeLabel', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTransitTimeLabel()
  {
  return $this->getProperty('transitTimeLabel');
  }


  /**
      * Indicates when shipping to a particular [[shippingDestination]] is not
 * available.
    * @param bool|array $value
  * @return $this
  */
  public function doesNotShip($value)
  {
  $this->setProperty('doesNotShip', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setDoesNotShip($value)
  {
  $this->setProperty('doesNotShip', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addDoesNotShip($value)
  {
  $current = $this->getProperty('doesNotShip');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('doesNotShip', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getDoesNotShip()
  {
  return $this->getProperty('doesNotShip');
  }


  /**
      * The width of the item.
    * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function width($value)
  {
  $this->setProperty('width', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function setWidth($value)
  {
  $this->setProperty('width', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance $value
  * @return $this
  */
  public function addWidth($value)
  {
  $current = $this->getProperty('width');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('width', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Distance|array
  */
  public function getWidth()
  {
  return $this->getProperty('width');
  }


  /**
      * The total delay between the receipt of the order and the goods reaching the
 * final customer.
    * @param ShippingDeliveryTime|array $value
  * @return $this
  */
  public function deliveryTime($value)
  {
  $this->setProperty('deliveryTime', $value);
  return $this;
  }

  /**
  * @param ShippingDeliveryTime|array $value
  * @return $this
  */
  public function setDeliveryTime($value)
  {
  $this->setProperty('deliveryTime', $value);
  return $this;
  }

  /**
  * @param ShippingDeliveryTime $value
  * @return $this
  */
  public function addDeliveryTime($value)
  {
  $current = $this->getProperty('deliveryTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('deliveryTime', $current);
  return $this;
  }

  /**
  * @return ShippingDeliveryTime|array
  */
  public function getDeliveryTime()
  {
  return $this->getProperty('deliveryTime');
  }


  /**
      * The depth of the item.
    * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function depth($value)
  {
  $this->setProperty('depth', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function setDepth($value)
  {
  $this->setProperty('depth', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance $value
  * @return $this
  */
  public function addDepth($value)
  {
  $current = $this->getProperty('depth');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('depth', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Distance|array
  */
  public function getDepth()
  {
  return $this->getProperty('depth');
  }


  /**
      * The weight of the product or person.
    * @param QuantitativeValue|Mass|array $value
  * @return $this
  */
  public function weight($value)
  {
  $this->setProperty('weight', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Mass|array $value
  * @return $this
  */
  public function setWeight($value)
  {
  $this->setProperty('weight', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Mass $value
  * @return $this
  */
  public function addWeight($value)
  {
  $current = $this->getProperty('weight');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('weight', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Mass|array
  */
  public function getWeight()
  {
  return $this->getProperty('weight');
  }


  /**
      * Indicates the origin of a shipment, i.e. where it should be coming from.
    * @param DefinedRegion|array $value
  * @return $this
  */
  public function shippingOrigin($value)
  {
  $this->setProperty('shippingOrigin', $value);
  return $this;
  }

  /**
  * @param DefinedRegion|array $value
  * @return $this
  */
  public function setShippingOrigin($value)
  {
  $this->setProperty('shippingOrigin', $value);
  return $this;
  }

  /**
  * @param DefinedRegion $value
  * @return $this
  */
  public function addShippingOrigin($value)
  {
  $current = $this->getProperty('shippingOrigin');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('shippingOrigin', $current);
  return $this;
  }

  /**
  * @return DefinedRegion|array
  */
  public function getShippingOrigin()
  {
  return $this->getProperty('shippingOrigin');
  }


  /**
      * The shipping rate is the cost of shipping to the specified destination.
 * Typically, the maxValue and currency values (of the [[MonetaryAmount]]) are
 * most appropriate.
    * @param MonetaryAmount|ShippingRateSettings|array $value
  * @return $this
  */
  public function shippingRate($value)
  {
  $this->setProperty('shippingRate', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|ShippingRateSettings|array $value
  * @return $this
  */
  public function setShippingRate($value)
  {
  $this->setProperty('shippingRate', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|ShippingRateSettings $value
  * @return $this
  */
  public function addShippingRate($value)
  {
  $current = $this->getProperty('shippingRate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('shippingRate', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|ShippingRateSettings|array
  */
  public function getShippingRate()
  {
  return $this->getProperty('shippingRate');
  }


  /**
      * indicates (possibly multiple) shipping destinations. These can be defined in
 * several ways, e.g. postalCode ranges.
    * @param DefinedRegion|array $value
  * @return $this
  */
  public function shippingDestination($value)
  {
  $this->setProperty('shippingDestination', $value);
  return $this;
  }

  /**
  * @param DefinedRegion|array $value
  * @return $this
  */
  public function setShippingDestination($value)
  {
  $this->setProperty('shippingDestination', $value);
  return $this;
  }

  /**
  * @param DefinedRegion $value
  * @return $this
  */
  public function addShippingDestination($value)
  {
  $current = $this->getProperty('shippingDestination');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('shippingDestination', $current);
  return $this;
  }

  /**
  * @return DefinedRegion|array
  */
  public function getShippingDestination()
  {
  return $this->getProperty('shippingDestination');
  }


  /**
      * Link to a page containing [[ShippingRateSettings]] and
 * [[DeliveryTimeSettings]] details.
    * @param string|array $value
  * @return $this
  */
  public function shippingSettingsLink($value)
  {
  $this->setProperty('shippingSettingsLink', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setShippingSettingsLink($value)
  {
  $this->setProperty('shippingSettingsLink', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addShippingSettingsLink($value)
  {
  $current = $this->getProperty('shippingSettingsLink');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('shippingSettingsLink', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getShippingSettingsLink()
  {
  return $this->getProperty('shippingSettingsLink');
  }


  /**
      * Label to match an [[OfferShippingDetails]] with a [[ShippingRateSettings]]
 * (within the context of a [[shippingSettingsLink]] cross-reference).
    * @param string|array $value
  * @return $this
  */
  public function shippingLabel($value)
  {
  $this->setProperty('shippingLabel', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setShippingLabel($value)
  {
  $this->setProperty('shippingLabel', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addShippingLabel($value)
  {
  $current = $this->getProperty('shippingLabel');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('shippingLabel', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getShippingLabel()
  {
  return $this->getProperty('shippingLabel');
  }


  /**
      * The height of the item.
    * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function height($value)
  {
  $this->setProperty('height', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance|array $value
  * @return $this
  */
  public function setHeight($value)
  {
  $this->setProperty('height', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|Distance $value
  * @return $this
  */
  public function addHeight($value)
  {
  $current = $this->getProperty('height');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('height', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|Distance|array
  */
  public function getHeight()
  {
  return $this->getProperty('height');
  }


}
