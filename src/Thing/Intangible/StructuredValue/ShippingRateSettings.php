<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification\DeliveryChargeSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\Place\DefinedRegion;

/**
  * A ShippingRateSettings represents re-usable pieces of shipping information.
 * It is designed for publication on an URL that may be referenced via the
 * [[shippingSettingsLink]] property of an [[OfferShippingDetails]]. Several
 * occurrences can be published, distinguished and matched (i.e.
 * identified/referenced) by their different values for [[shippingLabel]].
  * @see schema:ShippingRateSettings
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ShippingRateSettings extends StructuredValue
{


  /**
      * Value representing the fraction of the value of the order that is charged as
 * shipping cost. Example: 0.10 would mean shipping rate is 10% of the total
 * order value.
    * @param mixed $value
  * @return $this
  */
  public function orderPercentage($value)
  {
  $this->setProperty('orderPercentage', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setOrderPercentage($value)
  {
  $this->setProperty('orderPercentage', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addOrderPercentage($value)
  {
  $current = $this->getProperty('orderPercentage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderPercentage', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getOrderPercentage()
  {
  return $this->getProperty('orderPercentage');
  }


  /**
      * A monetary value above (or at) which the shipping rate becomes free. Intended
 * to be used via an [[OfferShippingDetails]] with [[shippingSettingsLink]]
 * matching this [[ShippingRateSettings]].
    * @param DeliveryChargeSpecification|MonetaryAmount|array $value
  * @return $this
  */
  public function freeShippingThreshold($value)
  {
  $this->setProperty('freeShippingThreshold', $value);
  return $this;
  }

  /**
  * @param DeliveryChargeSpecification|MonetaryAmount|array $value
  * @return $this
  */
  public function setFreeShippingThreshold($value)
  {
  $this->setProperty('freeShippingThreshold', $value);
  return $this;
  }

  /**
  * @param DeliveryChargeSpecification|MonetaryAmount $value
  * @return $this
  */
  public function addFreeShippingThreshold($value)
  {
  $current = $this->getProperty('freeShippingThreshold');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('freeShippingThreshold', $current);
  return $this;
  }

  /**
  * @return DeliveryChargeSpecification|MonetaryAmount|array
  */
  public function getFreeShippingThreshold()
  {
  return $this->getProperty('freeShippingThreshold');
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
      * This can be marked 'true' to indicate that some published
 * [[DeliveryTimeSettings]] or [[ShippingRateSettings]] are intended to apply to
 * all [[OfferShippingDetails]] published by the same merchant, when referenced
 * by a [[shippingSettingsLink]] in those settings. It is not meaningful to use
 * a 'true' value for this property alongside a transitTimeLabel (for
 * [[DeliveryTimeSettings]]) or shippingLabel (for [[ShippingRateSettings]]),
 * since this property is for use with unlabelled settings.
    * @param bool|array $value
  * @return $this
  */
  public function isUnlabelledFallback($value)
  {
  $this->setProperty('isUnlabelledFallback', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setIsUnlabelledFallback($value)
  {
  $this->setProperty('isUnlabelledFallback', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addIsUnlabelledFallback($value)
  {
  $current = $this->getProperty('isUnlabelledFallback');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isUnlabelledFallback', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getIsUnlabelledFallback()
  {
  return $this->getProperty('isUnlabelledFallback');
  }


  /**
      * Value representing the fraction of the weight that is used to compute the
 * shipping price. Example: 0.10 and a shipping weight of 15kg would add $1.5 to
 * the order price, where the $ is the currency of the order.
    * @param mixed $value
  * @return $this
  */
  public function weightPercentage($value)
  {
  $this->setProperty('weightPercentage', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setWeightPercentage($value)
  {
  $this->setProperty('weightPercentage', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addWeightPercentage($value)
  {
  $current = $this->getProperty('weightPercentage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('weightPercentage', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getWeightPercentage()
  {
  return $this->getProperty('weightPercentage');
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


}
