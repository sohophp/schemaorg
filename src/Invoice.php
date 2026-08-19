<?php
namespace Sohophp\SchemaOrg;

  use Sohophp\SchemaOrg\BaseType;
  use Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod;
  use Sohophp\SchemaOrg\Quantity\Duration;
  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PhysicalActivityCategory;
  use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm\CategoryCode;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
  use Sohophp\SchemaOrg\Order;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\PaymentStatusType;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;

/**
  * A statement of the money due for goods or services; a bill.
  * @see schema:Invoice
* @package Sohophp\SchemaOrg
*/
class Invoice extends BaseType
{


  /**
      * The name of the credit card or other method of payment for the order.
    * @param string|PaymentMethod|array $value
  * @return $this
  */
  public function paymentMethod($value)
  {
  $this->setProperty('paymentMethod', $value);
  return $this;
  }

  /**
  * @param string|PaymentMethod|array $value
  * @return $this
  */
  public function setPaymentMethod($value)
  {
  $this->setProperty('paymentMethod', $value);
  return $this;
  }

  /**
  * @param string|PaymentMethod $value
  * @return $this
  */
  public function addPaymentMethod($value)
  {
  $current = $this->getProperty('paymentMethod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('paymentMethod', $current);
  return $this;
  }

  /**
  * @return string|PaymentMethod|array
  */
  public function getPaymentMethod()
  {
  return $this->getProperty('paymentMethod');
  }


  /**
      * The time interval used to compute the invoice.
    * @param Duration|array $value
  * @return $this
  */
  public function billingPeriod($value)
  {
  $this->setProperty('billingPeriod', $value);
  return $this;
  }

  /**
  * @param Duration|array $value
  * @return $this
  */
  public function setBillingPeriod($value)
  {
  $this->setProperty('billingPeriod', $value);
  return $this;
  }

  /**
  * @param Duration $value
  * @return $this
  */
  public function addBillingPeriod($value)
  {
  $current = $this->getProperty('billingPeriod');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('billingPeriod', $current);
  return $this;
  }

  /**
  * @return Duration|array
  */
  public function getBillingPeriod()
  {
  return $this->getProperty('billingPeriod');
  }


  /**
      * The identifier for the account the payment will be applied to.
    * @param string|array $value
  * @return $this
  */
  public function accountId($value)
  {
  $this->setProperty('accountId', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setAccountId($value)
  {
  $this->setProperty('accountId', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addAccountId($value)
  {
  $current = $this->getProperty('accountId');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('accountId', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getAccountId()
  {
  return $this->getProperty('accountId');
  }


  /**
      * A category for the item. Greater signs or slashes can be used to informally
 * indicate a category hierarchy.
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
      * The total amount due.
    * @param MonetaryAmount|PriceSpecification|array $value
  * @return $this
  */
  public function totalPaymentDue($value)
  {
  $this->setProperty('totalPaymentDue', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|PriceSpecification|array $value
  * @return $this
  */
  public function setTotalPaymentDue($value)
  {
  $this->setProperty('totalPaymentDue', $value);
  return $this;
  }

  /**
  * @param MonetaryAmount|PriceSpecification $value
  * @return $this
  */
  public function addTotalPaymentDue($value)
  {
  $current = $this->getProperty('totalPaymentDue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('totalPaymentDue', $current);
  return $this;
  }

  /**
  * @return MonetaryAmount|PriceSpecification|array
  */
  public function getTotalPaymentDue()
  {
  return $this->getProperty('totalPaymentDue');
  }


  /**
      * An identifier for the method of payment used (e.g. the last 4 digits of the
 * credit card).
    * @param string|array $value
  * @return $this
  */
  public function paymentMethodId($value)
  {
  $this->setProperty('paymentMethodId', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPaymentMethodId($value)
  {
  $this->setProperty('paymentMethodId', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPaymentMethodId($value)
  {
  $current = $this->getProperty('paymentMethodId');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('paymentMethodId', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPaymentMethodId()
  {
  return $this->getProperty('paymentMethodId');
  }


  /**
      * The date the invoice is scheduled to be paid.
    * @param mixed $value
  * @return $this
  */
  public function scheduledPaymentDate($value)
  {
  $this->setProperty('scheduledPaymentDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setScheduledPaymentDate($value)
  {
  $this->setProperty('scheduledPaymentDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addScheduledPaymentDate($value)
  {
  $current = $this->getProperty('scheduledPaymentDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('scheduledPaymentDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getScheduledPaymentDate()
  {
  return $this->getProperty('scheduledPaymentDate');
  }


  /**
      * The Order(s) related to this Invoice. One or more Orders may be combined into
 * a single Invoice.
    * @param Order|array $value
  * @return $this
  */
  public function referencesOrder($value)
  {
  $this->setProperty('referencesOrder', $value);
  return $this;
  }

  /**
  * @param Order|array $value
  * @return $this
  */
  public function setReferencesOrder($value)
  {
  $this->setProperty('referencesOrder', $value);
  return $this;
  }

  /**
  * @param Order $value
  * @return $this
  */
  public function addReferencesOrder($value)
  {
  $current = $this->getProperty('referencesOrder');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('referencesOrder', $current);
  return $this;
  }

  /**
  * @return Order|array
  */
  public function getReferencesOrder()
  {
  return $this->getProperty('referencesOrder');
  }


  /**
      * The status of payment; whether the invoice has been paid or not.
    * @param string|PaymentStatusType|array $value
  * @return $this
  */
  public function paymentStatus($value)
  {
  $this->setProperty('paymentStatus', $value);
  return $this;
  }

  /**
  * @param string|PaymentStatusType|array $value
  * @return $this
  */
  public function setPaymentStatus($value)
  {
  $this->setProperty('paymentStatus', $value);
  return $this;
  }

  /**
  * @param string|PaymentStatusType $value
  * @return $this
  */
  public function addPaymentStatus($value)
  {
  $current = $this->getProperty('paymentStatus');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('paymentStatus', $current);
  return $this;
  }

  /**
  * @return string|PaymentStatusType|array
  */
  public function getPaymentStatus()
  {
  return $this->getProperty('paymentStatus');
  }


  /**
      * The date that payment is due.
    * @param mixed $value
  * @return $this
  */
  public function paymentDueDate($value)
  {
  $this->setProperty('paymentDueDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setPaymentDueDate($value)
  {
  $this->setProperty('paymentDueDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addPaymentDueDate($value)
  {
  $current = $this->getProperty('paymentDueDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('paymentDueDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getPaymentDueDate()
  {
  return $this->getProperty('paymentDueDate');
  }


  /**
      * Party placing the order or paying the invoice.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function customer($value)
  {
  $this->setProperty('customer', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setCustomer($value)
  {
  $this->setProperty('customer', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addCustomer($value)
  {
  $current = $this->getProperty('customer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('customer', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getCustomer()
  {
  return $this->getProperty('customer');
  }


  /**
      * The date that payment is due.
    * @param mixed $value
  * @return $this
  */
  public function paymentDue($value)
  {
  $this->setProperty('paymentDue', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setPaymentDue($value)
  {
  $this->setProperty('paymentDue', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addPaymentDue($value)
  {
  $current = $this->getProperty('paymentDue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('paymentDue', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getPaymentDue()
  {
  return $this->getProperty('paymentDue');
  }


  /**
      * The service provider, service operator, or service performer; the goods
 * producer. Another party (a seller) may offer those services or goods on
 * behalf of the provider. A provider may also serve as the seller.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function provider($value)
  {
  $this->setProperty('provider', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setProvider($value)
  {
  $this->setProperty('provider', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addProvider($value)
  {
  $current = $this->getProperty('provider');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('provider', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getProvider()
  {
  return $this->getProperty('provider');
  }


  /**
      * A number that confirms the given order or payment has been received.
    * @param string|array $value
  * @return $this
  */
  public function confirmationNumber($value)
  {
  $this->setProperty('confirmationNumber', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setConfirmationNumber($value)
  {
  $this->setProperty('confirmationNumber', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addConfirmationNumber($value)
  {
  $current = $this->getProperty('confirmationNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('confirmationNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getConfirmationNumber()
  {
  return $this->getProperty('confirmationNumber');
  }


  /**
      * An entity that arranges for an exchange between a buyer and a seller.  In
 * most cases a broker never acquires or releases ownership of a product or
 * service involved in an exchange.  If it is not clear whether an entity is a
 * broker, seller, or buyer, the latter two terms are preferred.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function broker($value)
  {
  $this->setProperty('broker', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setBroker($value)
  {
  $this->setProperty('broker', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addBroker($value)
  {
  $current = $this->getProperty('broker');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('broker', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getBroker()
  {
  return $this->getProperty('broker');
  }


  /**
      * The minimum payment required at this time.
    * @param PriceSpecification|MonetaryAmount|array $value
  * @return $this
  */
  public function minimumPaymentDue($value)
  {
  $this->setProperty('minimumPaymentDue', $value);
  return $this;
  }

  /**
  * @param PriceSpecification|MonetaryAmount|array $value
  * @return $this
  */
  public function setMinimumPaymentDue($value)
  {
  $this->setProperty('minimumPaymentDue', $value);
  return $this;
  }

  /**
  * @param PriceSpecification|MonetaryAmount $value
  * @return $this
  */
  public function addMinimumPaymentDue($value)
  {
  $current = $this->getProperty('minimumPaymentDue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('minimumPaymentDue', $current);
  return $this;
  }

  /**
  * @return PriceSpecification|MonetaryAmount|array
  */
  public function getMinimumPaymentDue()
  {
  return $this->getProperty('minimumPaymentDue');
  }


}
