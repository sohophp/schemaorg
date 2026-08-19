<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\DeliveryMethod;
  use Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod;

/**
  * The costs of settling the payment using a particular payment method.
  * @see schema:PaymentChargeSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification
*/
class PaymentChargeSpecification extends PriceSpecification
{


  /**
      * The delivery method(s) to which the delivery charge or payment charge
 * specification applies.
    * @param DeliveryMethod|array $value
  * @return $this
  */
  public function appliesToDeliveryMethod($value)
  {
  $this->setProperty('appliesToDeliveryMethod', $value);
  return $this;
  }

  /**
  * @param DeliveryMethod|array $value
  * @return $this
  */
  public function setAppliesToDeliveryMethod($value)
  {
  $this->setProperty('appliesToDeliveryMethod', $value);
  return $this;
  }

  /**
  * @param DeliveryMethod $value
  * @return $this
  */
  public function addAppliesToDeliveryMethod($value)
  {
  $current = $this->getProperty('appliesToDeliveryMethod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('appliesToDeliveryMethod', $current);
  return $this;
  }

  /**
  * @return DeliveryMethod|array
  */
  public function getAppliesToDeliveryMethod()
  {
  return $this->getProperty('appliesToDeliveryMethod');
  }


  /**
      * The payment method(s) to which the payment charge specification applies.
    * @param PaymentMethod|array $value
  * @return $this
  */
  public function appliesToPaymentMethod($value)
  {
  $this->setProperty('appliesToPaymentMethod', $value);
  return $this;
  }

  /**
  * @param PaymentMethod|array $value
  * @return $this
  */
  public function setAppliesToPaymentMethod($value)
  {
  $this->setProperty('appliesToPaymentMethod', $value);
  return $this;
  }

  /**
  * @param PaymentMethod $value
  * @return $this
  */
  public function addAppliesToPaymentMethod($value)
  {
  $current = $this->getProperty('appliesToPaymentMethod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('appliesToPaymentMethod', $current);
  return $this;
  }

  /**
  * @return PaymentMethod|array
  */
  public function getAppliesToPaymentMethod()
  {
  return $this->getProperty('appliesToPaymentMethod');
  }


}
