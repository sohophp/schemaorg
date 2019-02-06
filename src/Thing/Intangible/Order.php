<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus;
use Sohophp\SchemaOrg\Thing\Intangible\Invoice;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\OrderItem;
use Sohophp\SchemaOrg\Thing\Product;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentMethod;
use Sohophp\SchemaOrg\Thing\Intangible\ParcelDelivery;
use Sohophp\SchemaOrg\Thing\Intangible\Offer;
/**
* An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.
* @see http://schema.org/Order
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Order extends Intangible
{

     
     /**
     * Date order was placed.
     * @param  $value
     * @return $this
     */

     public function orderDate( $value):self
     {
        $this->setProperty("orderDate",$value);
        return $this;
     }

     
     /**
     * The date that payment is due.
     * @param  $value
     * @return $this
     */

     public function paymentDue( $value):self
     {
        $this->setProperty("paymentDue",$value);
        return $this;
     }

     
     /**
     * The identifier of the transaction.
     * @param string $value
     * @return $this
     */

     public function orderNumber(?string $value):self
     {
        $this->setProperty("orderNumber",$value);
        return $this;
     }

     
     /**
     * The URL for sending a payment.
     * @param string $value
     * @return $this
     */

     public function paymentUrl(?string $value):self
     {
        $this->setProperty("paymentUrl",$value);
        return $this;
     }

     
     /**
     * The current status of the order.
     * @param OrderStatus $value
     * @return $this
     */

     public function orderStatus(?OrderStatus $value):self
     {
        $this->setProperty("orderStatus",$value);
        return $this;
     }

     
     /**
     * The order is being paid as part of the referenced Invoice.
     * @param Invoice $value
     * @return $this
     */

     public function partOfInvoice(?Invoice $value):self
     {
        $this->setProperty("partOfInvoice",$value);
        return $this;
     }

     
     /**
     * A number that confirms the given order or payment has been received.
     * @param string $value
     * @return $this
     */

     public function confirmationNumber(?string $value):self
     {
        $this->setProperty("confirmationNumber",$value);
        return $this;
     }

     
     /**
     * Party placing the order or paying the invoice.
     * @param Person|Organization $value
     * @return $this
     */

     public function customer( $value):self
     {
        $this->setProperty("customer",$value);
        return $this;
     }

     
     /**
     * 'merchant' is an out-dated term for 'seller'.
     * @param Organization|Person $value
     * @return $this
     */

     public function merchant( $value):self
     {
        $this->setProperty("merchant",$value);
        return $this;
     }

     
     /**
     * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.
     * @param Organization|Person $value
     * @return $this
     */

     public function broker( $value):self
     {
        $this->setProperty("broker",$value);
        return $this;
     }

     
     /**
     * The item ordered.
     * @param OrderItem|Product $value
     * @return $this
     */

     public function orderedItem( $value):self
     {
        $this->setProperty("orderedItem",$value);
        return $this;
     }

     
     /**
     * Was the offer accepted as a gift for someone other than the buyer.
     * @param bool $value
     * @return $this
     */

     public function isGift(?bool $value):self
     {
        $this->setProperty("isGift",$value);
        return $this;
     }

     
     /**
     * The billing address for the order.
     * @param PostalAddress $value
     * @return $this
     */

     public function billingAddress(?PostalAddress $value):self
     {
        $this->setProperty("billingAddress",$value);
        return $this;
     }

     
     /**
     * The name of the credit card or other method of payment for the order.
     * @param PaymentMethod $value
     * @return $this
     */

     public function paymentMethod(?PaymentMethod $value):self
     {
        $this->setProperty("paymentMethod",$value);
        return $this;
     }

     
     /**
     * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider.
     * @param Organization|Person $value
     * @return $this
     */

     public function seller( $value):self
     {
        $this->setProperty("seller",$value);
        return $this;
     }

     
     /**
     * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
     * @param string $value
     * @return $this
     */

     public function paymentMethodId(?string $value):self
     {
        $this->setProperty("paymentMethodId",$value);
        return $this;
     }

     
     /**
     * Any discount applied (to an Order).
     * @param string $value
     * @return $this
     */

     public function discount(?string $value):self
     {
        $this->setProperty("discount",$value);
        return $this;
     }

     
     /**
     * The delivery of the parcel related to this order or order item.
     * @param ParcelDelivery $value
     * @return $this
     */

     public function orderDelivery(?ParcelDelivery $value):self
     {
        $this->setProperty("orderDelivery",$value);
        return $this;
     }

     
     /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     * @param Offer $value
     * @return $this
     */

     public function acceptedOffer(?Offer $value):self
     {
        $this->setProperty("acceptedOffer",$value);
        return $this;
     }

     
     /**
     * The currency of the discount.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     * @param string $value
     * @return $this
     */

     public function discountCurrency(?string $value):self
     {
        $this->setProperty("discountCurrency",$value);
        return $this;
     }

     
     /**
     * The date that payment is due.
     * @param  $value
     * @return $this
     */

     public function paymentDueDate( $value):self
     {
        $this->setProperty("paymentDueDate",$value);
        return $this;
     }

     
     /**
     * Code used to redeem a discount.
     * @param string $value
     * @return $this
     */

     public function discountCode(?string $value):self
     {
        $this->setProperty("discountCode",$value);
        return $this;
     }

     
}

