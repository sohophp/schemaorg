<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ShippingDeliveryTime;
  use Sohophp\SchemaOrg\Thing\Place\DefinedRegion;

/**
  * A DeliveryTimeSettings represents re-usable pieces of shipping information,
 * relating to timing. It is designed for publication on an URL that may be
 * referenced via the [[shippingSettingsLink]] property of an
 * [[OfferShippingDetails]]. Several occurrences can be published, distinguished
 * (and identified/referenced) by their different values for
 * [[transitTimeLabel]].
  * @see schema:DeliveryTimeSettings
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class DeliveryTimeSettings extends StructuredValue
{


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


}
