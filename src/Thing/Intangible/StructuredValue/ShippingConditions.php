<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Quantity\Distance;
  use Sohophp\SchemaOrg\Quantity\Mass;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\Place\DefinedRegion;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ServicePeriod;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ShippingRateSettings;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OpeningHoursSpecification;

/**
  * ShippingConditions represent a set of constraints and information about the
 * conditions of shipping a product. Such conditions may apply to only a subset
 * of the products being shipped, depending on aspects of the product like
 * weight, size, price, destination, and others. All the specified conditions
 * must be met for this ShippingConditions to apply.
  * @see schema:ShippingConditions
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue
*/
class ShippingConditions extends StructuredValue
{


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
      * Minimum and maximum order value for which these shipping conditions are
 * valid.
    * @param MonetaryAmount|array $value
  * @return $this
  */
  public function orderValue($value)
  {
  $this->setProperty('orderValue', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|array $value
  * @return $this
  */
  public function setOrderValue($value)
  {
  $this->setProperty('orderValue', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount $value
  * @return $this
  */
  public function addOrderValue($value)
  {
  $current = $this->getProperty('orderValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderValue', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|array
  */
  public function getOrderValue()
  {
  return $this->getProperty('orderValue');
  }


  /**
      * Limits the number of items being shipped for which these conditions apply.
    * @param QuantitativeValue|array $value
  * @return $this
  */
  public function numItems($value)
  {
  $this->setProperty('numItems', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|array $value
  * @return $this
  */
  public function setNumItems($value)
  {
  $this->setProperty('numItems', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue $value
  * @return $this
  */
  public function addNumItems($value)
  {
  $current = $this->getProperty('numItems');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('numItems', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|array
  */
  public function getNumItems()
  {
  return $this->getProperty('numItems');
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
      * The typical delay the order has been sent for delivery and the goods reach
 * the final customer.
 * 
 *   In the context of [[ShippingDeliveryTime]], use the [[QuantitativeValue]].
 * Typical properties: minValue, maxValue, unitCode (d for DAY).
 * 
 *   In the context of [[ShippingConditions]], use the [[ServicePeriod]]. It has
 * a duration (as a [[QuantitativeValue]]) and also business days and a cut-off
 * time.
    * @param QuantitativeValue|ServicePeriod|array $value
  * @return $this
  */
  public function transitTime($value)
  {
  $this->setProperty('transitTime', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|ServicePeriod|array $value
  * @return $this
  */
  public function setTransitTime($value)
  {
  $this->setProperty('transitTime', $value);
  return $this;
  }

  /**
  * @param QuantitativeValue|ServicePeriod $value
  * @return $this
  */
  public function addTransitTime($value)
  {
  $current = $this->getProperty('transitTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('transitTime', $current);
  return $this;
  }

  /**
  * @return QuantitativeValue|ServicePeriod|array
  */
  public function getTransitTime()
  {
  return $this->getProperty('transitTime');
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
      * Limited period during which these shipping conditions apply.
    * @param OpeningHoursSpecification|array $value
  * @return $this
  */
  public function seasonalOverride($value)
  {
  $this->setProperty('seasonalOverride', $value);
  return $this;
  }

  /**
  * @param OpeningHoursSpecification|array $value
  * @return $this
  */
  public function setSeasonalOverride($value)
  {
  $this->setProperty('seasonalOverride', $value);
  return $this;
  }

  /**
  * @param OpeningHoursSpecification $value
  * @return $this
  */
  public function addSeasonalOverride($value)
  {
  $current = $this->getProperty('seasonalOverride');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seasonalOverride', $current);
  return $this;
  }

  /**
  * @return OpeningHoursSpecification|array
  */
  public function getSeasonalOverride()
  {
  return $this->getProperty('seasonalOverride');
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
