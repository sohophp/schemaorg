<?php
namespace Sohophp\SchemaOrg;

  use Sohophp\SchemaOrg\BaseType;
  use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\StatusEnumeration\OrderStatus;
  use Sohophp\SchemaOrg\Thing\Intangible\PaymentMethod;
  use Sohophp\SchemaOrg\Thing\Intangible\Offer;
  use Sohophp\SchemaOrg\Thing\Intangible\ParcelDelivery;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
  use Sohophp\SchemaOrg\Invoice;
  use Sohophp\SchemaOrg\Thing\Product;
  use Sohophp\SchemaOrg\Thing\Intangible\Service;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\OrderItem;

/**
  * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by
 * the customer.
  * @see schema:Order
* @package Sohophp\SchemaOrg
*/
class Order extends BaseType
{


  /**
      * The current status of the order.
    * @param OrderStatus|array $value
  * @return $this
  */
  public function orderStatus($value)
  {
  $this->setProperty('orderStatus', $value);
  return $this;
  }

  /**
  * @param OrderStatus|array $value
  * @return $this
  */
  public function setOrderStatus($value)
  {
  $this->setProperty('orderStatus', $value);
  return $this;
  }

  /**
  * @param OrderStatus $value
  * @return $this
  */
  public function addOrderStatus($value)
  {
  $current = $this->getProperty('orderStatus');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderStatus', $current);
  return $this;
  }

  /**
  * @return OrderStatus|array
  */
  public function getOrderStatus()
  {
  return $this->getProperty('orderStatus');
  }


  /**
      * The currency of the discount.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types, e.g. "Ithaca HOUR".
    * @param string|array $value
  * @return $this
  */
  public function discountCurrency($value)
  {
  $this->setProperty('discountCurrency', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setDiscountCurrency($value)
  {
  $this->setProperty('discountCurrency', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addDiscountCurrency($value)
  {
  $current = $this->getProperty('discountCurrency');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('discountCurrency', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getDiscountCurrency()
  {
  return $this->getProperty('discountCurrency');
  }


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
      * The offer(s) -- e.g., product, quantity and price combinations -- included in
 * the order.
    * @param Offer|array $value
  * @return $this
  */
  public function acceptedOffer($value)
  {
  $this->setProperty('acceptedOffer', $value);
  return $this;
  }

  /**
  * @param Offer|array $value
  * @return $this
  */
  public function setAcceptedOffer($value)
  {
  $this->setProperty('acceptedOffer', $value);
  return $this;
  }

  /**
  * @param Offer $value
  * @return $this
  */
  public function addAcceptedOffer($value)
  {
  $current = $this->getProperty('acceptedOffer');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('acceptedOffer', $current);
  return $this;
  }

  /**
  * @return Offer|array
  */
  public function getAcceptedOffer()
  {
  return $this->getProperty('acceptedOffer');
  }


  /**
      * Indicates whether the offer was accepted as a gift for someone other than the
 * buyer.
    * @param bool|array $value
  * @return $this
  */
  public function isGift($value)
  {
  $this->setProperty('isGift', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setIsGift($value)
  {
  $this->setProperty('isGift', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addIsGift($value)
  {
  $current = $this->getProperty('isGift');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('isGift', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getIsGift()
  {
  return $this->getProperty('isGift');
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
      * Date order was placed.
    * @param mixed $value
  * @return $this
  */
  public function orderDate($value)
  {
  $this->setProperty('orderDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setOrderDate($value)
  {
  $this->setProperty('orderDate', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addOrderDate($value)
  {
  $current = $this->getProperty('orderDate');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderDate', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getOrderDate()
  {
  return $this->getProperty('orderDate');
  }


  /**
      * The delivery of the parcel related to this order or order item.
    * @param ParcelDelivery|array $value
  * @return $this
  */
  public function orderDelivery($value)
  {
  $this->setProperty('orderDelivery', $value);
  return $this;
  }

  /**
  * @param ParcelDelivery|array $value
  * @return $this
  */
  public function setOrderDelivery($value)
  {
  $this->setProperty('orderDelivery', $value);
  return $this;
  }

  /**
  * @param ParcelDelivery $value
  * @return $this
  */
  public function addOrderDelivery($value)
  {
  $current = $this->getProperty('orderDelivery');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderDelivery', $current);
  return $this;
  }

  /**
  * @return ParcelDelivery|array
  */
  public function getOrderDelivery()
  {
  return $this->getProperty('orderDelivery');
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
      * The URL for sending a payment.
    * @param string|array $value
  * @return $this
  */
  public function paymentUrl($value)
  {
  $this->setProperty('paymentUrl', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPaymentUrl($value)
  {
  $this->setProperty('paymentUrl', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPaymentUrl($value)
  {
  $current = $this->getProperty('paymentUrl');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('paymentUrl', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPaymentUrl()
  {
  return $this->getProperty('paymentUrl');
  }


  /**
      * The identifier of the transaction.
    * @param string|array $value
  * @return $this
  */
  public function orderNumber($value)
  {
  $this->setProperty('orderNumber', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setOrderNumber($value)
  {
  $this->setProperty('orderNumber', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addOrderNumber($value)
  {
  $current = $this->getProperty('orderNumber');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderNumber', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getOrderNumber()
  {
  return $this->getProperty('orderNumber');
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
      * The billing address for the order.
    * @param PostalAddress|array $value
  * @return $this
  */
  public function billingAddress($value)
  {
  $this->setProperty('billingAddress', $value);
  return $this;
  }

  /**
  * @param PostalAddress|array $value
  * @return $this
  */
  public function setBillingAddress($value)
  {
  $this->setProperty('billingAddress', $value);
  return $this;
  }

  /**
  * @param PostalAddress $value
  * @return $this
  */
  public function addBillingAddress($value)
  {
  $current = $this->getProperty('billingAddress');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('billingAddress', $current);
  return $this;
  }

  /**
  * @return PostalAddress|array
  */
  public function getBillingAddress()
  {
  return $this->getProperty('billingAddress');
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
      * The order is being paid as part of the referenced Invoice.
    * @param Invoice|array $value
  * @return $this
  */
  public function partOfInvoice($value)
  {
  $this->setProperty('partOfInvoice', $value);
  return $this;
  }

  /**
  * @param Invoice|array $value
  * @return $this
  */
  public function setPartOfInvoice($value)
  {
  $this->setProperty('partOfInvoice', $value);
  return $this;
  }

  /**
  * @param Invoice $value
  * @return $this
  */
  public function addPartOfInvoice($value)
  {
  $current = $this->getProperty('partOfInvoice');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('partOfInvoice', $current);
  return $this;
  }

  /**
  * @return Invoice|array
  */
  public function getPartOfInvoice()
  {
  return $this->getProperty('partOfInvoice');
  }


  /**
      * 'merchant' is an out-dated term for 'seller'.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function merchant($value)
  {
  $this->setProperty('merchant', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setMerchant($value)
  {
  $this->setProperty('merchant', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addMerchant($value)
  {
  $current = $this->getProperty('merchant');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('merchant', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getMerchant()
  {
  return $this->getProperty('merchant');
  }


  /**
      * The item ordered.
    * @param Product|Service|OrderItem|array $value
  * @return $this
  */
  public function orderedItem($value)
  {
  $this->setProperty('orderedItem', $value);
  return $this;
  }

  /**
  * @param Product|Service|OrderItem|array $value
  * @return $this
  */
  public function setOrderedItem($value)
  {
  $this->setProperty('orderedItem', $value);
  return $this;
  }

  /**
  * @param Product|Service|OrderItem $value
  * @return $this
  */
  public function addOrderedItem($value)
  {
  $current = $this->getProperty('orderedItem');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('orderedItem', $current);
  return $this;
  }

  /**
  * @return Product|Service|OrderItem|array
  */
  public function getOrderedItem()
  {
  return $this->getProperty('orderedItem');
  }


  /**
      * An entity which offers (sells / leases / lends / loans) the services / goods.
 *  A seller may also be a provider.
    * @param Person|Organization|array $value
  * @return $this
  */
  public function seller($value)
  {
  $this->setProperty('seller', $value);
  return $this;
  }

  /**
  * @param Person|Organization|array $value
  * @return $this
  */
  public function setSeller($value)
  {
  $this->setProperty('seller', $value);
  return $this;
  }

  /**
  * @param Person|Organization $value
  * @return $this
  */
  public function addSeller($value)
  {
  $current = $this->getProperty('seller');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('seller', $current);
  return $this;
  }

  /**
  * @return Person|Organization|array
  */
  public function getSeller()
  {
  return $this->getProperty('seller');
  }


  /**
      * Any discount applied (to an Order).
    * @param string|array $value
  * @return $this
  */
  public function discount($value)
  {
  $this->setProperty('discount', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setDiscount($value)
  {
  $this->setProperty('discount', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addDiscount($value)
  {
  $current = $this->getProperty('discount');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('discount', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getDiscount()
  {
  return $this->getProperty('discount');
  }


  /**
      * Code used to redeem a discount.
    * @param string|array $value
  * @return $this
  */
  public function discountCode($value)
  {
  $this->setProperty('discountCode', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setDiscountCode($value)
  {
  $this->setProperty('discountCode', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addDiscountCode($value)
  {
  $current = $this->getProperty('discountCode');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('discountCode', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getDiscountCode()
  {
  return $this->getProperty('discountCode');
  }


}
