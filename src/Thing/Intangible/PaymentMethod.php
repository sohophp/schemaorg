<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethodType;

/**
  * A payment method is a standardized procedure for transferring the monetary
 * amount for a purchase. Payment methods are characterized by the legal and
 * technical structures used, and by the organization or group carrying out the
 * transaction. The following legacy values should be accepted: 
 * 
 * * http://purl.org/goodrelations/v1#ByBankTransferInAdvance
 * * http://purl.org/goodrelations/v1#ByInvoice
 * * http://purl.org/goodrelations/v1#Cash
 * * http://purl.org/goodrelations/v1#CheckInAdvance
 * * http://purl.org/goodrelations/v1#COD
 * * http://purl.org/goodrelations/v1#DirectDebit
 * * http://purl.org/goodrelations/v1#GoogleCheckout
 * * http://purl.org/goodrelations/v1#PayPal
 * * http://purl.org/goodrelations/v1#PaySwarm
 * 
 * Structured values, or [UNCE payment
 * means](https://vocabulary.uncefact.org/PaymentMeans) are recommended or for
 * newer annotations.
  * @see schema:PaymentMethod
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class PaymentMethod extends Intangible
{


  /**
      * The type of a payment method.
    * @param PaymentMethodType|array $value
  * @return $this
  */
  public function paymentMethodType($value)
  {
  $this->setProperty('paymentMethodType', $value);
  return $this;
  }

  /**
  * @param PaymentMethodType|array $value
  * @return $this
  */
  public function setPaymentMethodType($value)
  {
  $this->setProperty('paymentMethodType', $value);
  return $this;
  }

  /**
  * @param PaymentMethodType $value
  * @return $this
  */
  public function addPaymentMethodType($value)
  {
  $current = $this->getProperty('paymentMethodType');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('paymentMethodType', $current);
  return $this;
  }

  /**
  * @return PaymentMethodType|array
  */
  public function getPaymentMethodType()
  {
  return $this->getProperty('paymentMethodType');
  }


}
