<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by
 * the customer.
* @see schema:Order
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Order extends Intangible
{


    /**
        * Code used to redeem a discount.
        * @param array|string|mixed $value
    * @return $this
    */
    public function discountCode($value)
    {
        $this->setProperty('discountCode', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The billing address for the order.
        * @param array|string|mixed $value
    * @return $this
    */
    public function billingAddress($value)
    {
        $this->setProperty('billingAddress', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The URL for sending a payment.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentUrl($value)
    {
        $this->setProperty('paymentUrl', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The order is being paid as part of the referenced Invoice.
        * @param array|string|mixed $value
    * @return $this
    */
    public function partOfInvoice($value)
    {
        $this->setProperty('partOfInvoice', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An identifier for the method of payment used (e.g. the last 4 digits of the
 * credit card).
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentMethodId($value)
    {
        $this->setProperty('paymentMethodId', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The name of the credit card or other method of payment for the order.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentMethod($value)
    {
        $this->setProperty('paymentMethod', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The current status of the order.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderStatus($value)
    {
        $this->setProperty('orderStatus', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * A number that confirms the given order or payment has been received.
        * @param array|string|mixed $value
    * @return $this
    */
    public function confirmationNumber($value)
    {
        $this->setProperty('confirmationNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The date that payment is due.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentDue($value)
    {
        $this->setProperty('paymentDue', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The currency of the discount.
 * 
 * Use standard formats: [ISO 4217 currency
 * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
 * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
 * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange Trading
 * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS)
 * and other currency types, e.g. "Ithaca HOUR".
        * @param array|string|mixed $value
    * @return $this
    */
    public function discountCurrency($value)
    {
        $this->setProperty('discountCurrency', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Indicates whether the offer was accepted as a gift for someone other than the
 * buyer.
        * @param array|string|mixed $value
    * @return $this
    */
    public function isGift($value)
    {
        $this->setProperty('isGift', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The date that payment is due.
        * @param array|string|mixed $value
    * @return $this
    */
    public function paymentDueDate($value)
    {
        $this->setProperty('paymentDueDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The delivery of the parcel related to this order or order item.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderDelivery($value)
    {
        $this->setProperty('orderDelivery', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The offer(s) -- e.g., product, quantity and price combinations -- included in
 * the order.
        * @param array|string|mixed $value
    * @return $this
    */
    public function acceptedOffer($value)
    {
        $this->setProperty('acceptedOffer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Date order was placed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderDate($value)
    {
        $this->setProperty('orderDate', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * 'merchant' is an out-dated term for 'seller'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function merchant($value)
    {
        $this->setProperty('merchant', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The identifier of the transaction.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderNumber($value)
    {
        $this->setProperty('orderNumber', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An entity that arranges for an exchange between a buyer and a seller.  In
 * most cases a broker never acquires or releases ownership of a product or
 * service involved in an exchange.  If it is not clear whether an entity is a
 * broker, seller, or buyer, the latter two terms are preferred.
        * @param array|string|mixed $value
    * @return $this
    */
    public function broker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The item ordered.
        * @param array|string|mixed $value
    * @return $this
    */
    public function orderedItem($value)
    {
        $this->setProperty('orderedItem', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Any discount applied (to an Order).
        * @param array|string|mixed $value
    * @return $this
    */
    public function discount($value)
    {
        $this->setProperty('discount', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Party placing the order or paying the invoice.
        * @param array|string|mixed $value
    * @return $this
    */
    public function customer($value)
    {
        $this->setProperty('customer', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An entity which offers (sells / leases / lends / loans) the services / goods.
 *  A seller may also be a provider.
        * @param array|string|mixed $value
    * @return $this
    */
    public function seller($value)
    {
        $this->setProperty('seller', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
