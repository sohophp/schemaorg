<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\Invoice;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\ParcelDelivery;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\OrderItem;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;

/**
* An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.
* @see http://schema.org/Order
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class Order extends Intangible
{

    /**
    * The date that payment is due.
    * @param |array $value
    * @return $this
    */
    public function paymentDue($value)
    {
        $this->setProperty('paymentDue', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setPaymentDue($value)
    {
        $this->setProperty('paymentDue', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPaymentDue()
    {
       return $this->getProperty('paymentDue');
    }

    /**
    * The identifier of the transaction.
    * @param string|array $value
    * @return $this
    */
    public function orderNumber(?string $value)
    {
        $this->setProperty('orderNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setOrderNumber(?string $value)
    {
        $this->setProperty('orderNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderNumber()
    {
       return $this->getProperty('orderNumber');
    }

    /**
    * The URL for sending a payment.
    * @param string|array $value
    * @return $this
    */
    public function paymentUrl(?string $value)
    {
        $this->setProperty('paymentUrl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPaymentUrl(?string $value)
    {
        $this->setProperty('paymentUrl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPaymentUrl()
    {
       return $this->getProperty('paymentUrl');
    }

    /**
    * The current status of the order.
    * @param OrderStatus|array $value
    * @return $this
    */
    public function orderStatus(?OrderStatus $value)
    {
        $this->setProperty('orderStatus', $value);
        return $this;
    }
   /**
    * @param OrderStatus|array $value
    * @return $this
    */
    public function setOrderStatus(?OrderStatus $value)
    {
        $this->setProperty('orderStatus', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderStatus()
    {
       return $this->getProperty('orderStatus');
    }

    /**
    * The billing address for the order.
    * @param PostalAddress|array $value
    * @return $this
    */
    public function billingAddress(?PostalAddress $value)
    {
        $this->setProperty('billingAddress', $value);
        return $this;
    }
   /**
    * @param PostalAddress|array $value
    * @return $this
    */
    public function setBillingAddress(?PostalAddress $value)
    {
        $this->setProperty('billingAddress', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBillingAddress()
    {
       return $this->getProperty('billingAddress');
    }

    /**
    * The order is being paid as part of the referenced Invoice.
    * @param Invoice|array $value
    * @return $this
    */
    public function partOfInvoice(?Invoice $value)
    {
        $this->setProperty('partOfInvoice', $value);
        return $this;
    }
   /**
    * @param Invoice|array $value
    * @return $this
    */
    public function setPartOfInvoice(?Invoice $value)
    {
        $this->setProperty('partOfInvoice', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPartOfInvoice()
    {
       return $this->getProperty('partOfInvoice');
    }

    /**
    * A number that confirms the given order or payment has been received.
    * @param string|array $value
    * @return $this
    */
    public function confirmationNumber(?string $value)
    {
        $this->setProperty('confirmationNumber', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setConfirmationNumber(?string $value)
    {
        $this->setProperty('confirmationNumber', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getConfirmationNumber()
    {
       return $this->getProperty('confirmationNumber');
    }

    /**
    * Date order was placed.
    * @param |array $value
    * @return $this
    */
    public function orderDate($value)
    {
        $this->setProperty('orderDate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setOrderDate($value)
    {
        $this->setProperty('orderDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderDate()
    {
       return $this->getProperty('orderDate');
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
    * @return $this|string|array
    */
    public function getCustomer()
    {
       return $this->getProperty('customer');
    }

    /**
    * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function broker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setBroker($value)
    {
        $this->setProperty('broker', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBroker()
    {
       return $this->getProperty('broker');
    }

    /**
    * Was the offer accepted as a gift for someone other than the buyer.
    * @param bool|array $value
    * @return $this
    */
    public function isGift(?bool $value)
    {
        $this->setProperty('isGift', $value);
        return $this;
    }
   /**
    * @param bool|array $value
    * @return $this
    */
    public function setIsGift(?bool $value)
    {
        $this->setProperty('isGift', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getIsGift()
    {
       return $this->getProperty('isGift');
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
    * @return $this|string|array
    */
    public function getMerchant()
    {
       return $this->getProperty('merchant');
    }

    /**
    * The name of the credit card or other method of payment for the order.
    * @param PaymentMethod|array $value
    * @return $this
    */
    public function paymentMethod(?PaymentMethod $value)
    {
        $this->setProperty('paymentMethod', $value);
        return $this;
    }
   /**
    * @param PaymentMethod|array $value
    * @return $this
    */
    public function setPaymentMethod(?PaymentMethod $value)
    {
        $this->setProperty('paymentMethod', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPaymentMethod()
    {
       return $this->getProperty('paymentMethod');
    }

    /**
    * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
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
    * @return $this|string|array
    */
    public function getSeller()
    {
       return $this->getProperty('seller');
    }

    /**
    * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
    * @param string|array $value
    * @return $this
    */
    public function paymentMethodId(?string $value)
    {
        $this->setProperty('paymentMethodId', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPaymentMethodId(?string $value)
    {
        $this->setProperty('paymentMethodId', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPaymentMethodId()
    {
       return $this->getProperty('paymentMethodId');
    }

    /**
    * Any discount applied (to an Order).
    * @param string|array $value
    * @return $this
    */
    public function discount(?string $value)
    {
        $this->setProperty('discount', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDiscount(?string $value)
    {
        $this->setProperty('discount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiscount()
    {
       return $this->getProperty('discount');
    }

    /**
    * The delivery of the parcel related to this order or order item.
    * @param ParcelDelivery|array $value
    * @return $this
    */
    public function orderDelivery(?ParcelDelivery $value)
    {
        $this->setProperty('orderDelivery', $value);
        return $this;
    }
   /**
    * @param ParcelDelivery|array $value
    * @return $this
    */
    public function setOrderDelivery(?ParcelDelivery $value)
    {
        $this->setProperty('orderDelivery', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderDelivery()
    {
       return $this->getProperty('orderDelivery');
    }

    /**
    * The item ordered.
    * @param Service|OrderItem|Product|array $value
    * @return $this
    */
    public function orderedItem($value)
    {
        $this->setProperty('orderedItem', $value);
        return $this;
    }
   /**
    * @param Service|OrderItem|Product|array $value
    * @return $this
    */
    public function setOrderedItem($value)
    {
        $this->setProperty('orderedItem', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOrderedItem()
    {
       return $this->getProperty('orderedItem');
    }

    /**
    * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
    * @param Offer|array $value
    * @return $this
    */
    public function acceptedOffer(?Offer $value)
    {
        $this->setProperty('acceptedOffer', $value);
        return $this;
    }
   /**
    * @param Offer|array $value
    * @return $this
    */
    public function setAcceptedOffer(?Offer $value)
    {
        $this->setProperty('acceptedOffer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAcceptedOffer()
    {
       return $this->getProperty('acceptedOffer');
    }

    /**
    * The currency of the discount.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string|array $value
    * @return $this
    */
    public function discountCurrency(?string $value)
    {
        $this->setProperty('discountCurrency', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDiscountCurrency(?string $value)
    {
        $this->setProperty('discountCurrency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiscountCurrency()
    {
       return $this->getProperty('discountCurrency');
    }

    /**
    * The date that payment is due.
    * @param |array $value
    * @return $this
    */
    public function paymentDueDate($value)
    {
        $this->setProperty('paymentDueDate', $value);
        return $this;
    }
   /**
    * @param |array $value
    * @return $this
    */
    public function setPaymentDueDate($value)
    {
        $this->setProperty('paymentDueDate', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPaymentDueDate()
    {
       return $this->getProperty('paymentDueDate');
    }

    /**
    * Code used to redeem a discount.
    * @param string|array $value
    * @return $this
    */
    public function discountCode(?string $value)
    {
        $this->setProperty('discountCode', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDiscountCode(?string $value)
    {
        $this->setProperty('discountCode', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDiscountCode()
    {
       return $this->getProperty('discountCode');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Order','Thing\\Order');

