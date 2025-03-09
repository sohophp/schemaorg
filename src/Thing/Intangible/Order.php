<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.
* @see schema:Order
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Order extends Intangible
{
   /**
        * Code used to redeem a discount.
        */
    protected $discountCode = null;

   /**
        * The billing address for the order.
        */
    protected $billingAddress = null;

   /**
        * The URL for sending a payment.
        */
    protected $paymentUrl = null;

   /**
        * The order is being paid as part of the referenced Invoice.
        */
    protected $partOfInvoice = null;

   /**
        * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
        */
    protected $paymentMethodId = null;

   /**
        * The name of the credit card or other method of payment for the order.
        */
    protected $paymentMethod = null;

   /**
        * The current status of the order.
        */
    protected $orderStatus = null;

   /**
        * A number that confirms the given order or payment has been received.
        */
    protected $confirmationNumber = null;

   /**
        * The date that payment is due.
        */
    protected $paymentDue = null;

   /**
        * The currency of the discount.\n\nUse standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types, e.g. "Ithaca HOUR".
        */
    protected $discountCurrency = null;

   /**
        * Indicates whether the offer was accepted as a gift for someone other than the buyer.
        */
    protected $isGift = null;

   /**
        * The date that payment is due.
        */
    protected $paymentDueDate = null;

   /**
        * The delivery of the parcel related to this order or order item.
        */
    protected $orderDelivery = null;

   /**
        * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
        */
    protected $acceptedOffer = null;

   /**
        * Date order was placed.
        */
    protected $orderDate = null;

   /**
        * 'merchant' is an out-dated term for 'seller'.
        */
    protected $merchant = null;

   /**
        * The identifier of the transaction.
        */
    protected $orderNumber = null;

   /**
        * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
        */
    protected $broker = null;

   /**
        * The item ordered.
        */
    protected $orderedItem = null;

   /**
        * Any discount applied (to an Order).
        */
    protected $discount = null;

   /**
        * Party placing the order or paying the invoice.
        */
    protected $customer = null;

   /**
        * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
        */
    protected $seller = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setDiscountCode($value)
    {
        $this->setProperty('discountCode', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiscountCode()
    {
       return $this->getProperty('discountCode');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBillingAddress($value)
    {
        $this->setProperty('billingAddress', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBillingAddress()
    {
       return $this->getProperty('billingAddress');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPaymentUrl($value)
    {
        $this->setProperty('paymentUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentUrl()
    {
       return $this->getProperty('paymentUrl');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPartOfInvoice($value)
    {
        $this->setProperty('partOfInvoice', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPartOfInvoice()
    {
       return $this->getProperty('partOfInvoice');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPaymentMethodId($value)
    {
        $this->setProperty('paymentMethodId', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentMethodId()
    {
       return $this->getProperty('paymentMethodId');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPaymentMethod($value)
    {
        $this->setProperty('paymentMethod', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentMethod()
    {
       return $this->getProperty('paymentMethod');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderStatus($value)
    {
        $this->setProperty('orderStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderStatus()
    {
       return $this->getProperty('orderStatus');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setConfirmationNumber($value)
    {
        $this->setProperty('confirmationNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getConfirmationNumber()
    {
       return $this->getProperty('confirmationNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPaymentDue($value)
    {
        $this->setProperty('paymentDue', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentDue()
    {
       return $this->getProperty('paymentDue');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDiscountCurrency($value)
    {
        $this->setProperty('discountCurrency', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiscountCurrency()
    {
       return $this->getProperty('discountCurrency');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setIsGift($value)
    {
        $this->setProperty('isGift', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIsGift()
    {
       return $this->getProperty('isGift');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setPaymentDueDate($value)
    {
        $this->setProperty('paymentDueDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentDueDate()
    {
       return $this->getProperty('paymentDueDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderDelivery($value)
    {
        $this->setProperty('orderDelivery', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderDelivery()
    {
       return $this->getProperty('orderDelivery');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAcceptedOffer($value)
    {
        $this->setProperty('acceptedOffer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAcceptedOffer()
    {
       return $this->getProperty('acceptedOffer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderDate($value)
    {
        $this->setProperty('orderDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderDate()
    {
       return $this->getProperty('orderDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setMerchant($value)
    {
        $this->setProperty('merchant', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMerchant()
    {
       return $this->getProperty('merchant');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderNumber($value)
    {
        $this->setProperty('orderNumber', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderNumber()
    {
       return $this->getProperty('orderNumber');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setBroker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBroker()
    {
       return $this->getProperty('broker');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setOrderedItem($value)
    {
        $this->setProperty('orderedItem', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOrderedItem()
    {
       return $this->getProperty('orderedItem');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDiscount($value)
    {
        $this->setProperty('discount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiscount()
    {
       return $this->getProperty('discount');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCustomer($value)
    {
        $this->setProperty('customer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCustomer()
    {
       return $this->getProperty('customer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setSeller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSeller()
    {
       return $this->getProperty('seller');
    }


}
