<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\OrderStatus;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress;

/**
 * An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.
 *
 * @see http://schema.org/Order
 */
class Order extends Intangible
{
    /**
     * Date order was placed.
     *
     * @param  $value
     *
     * @return $this
     */
    public function orderDate($value): self
    {
        $this->setProperty('orderDate', $value);

        return $this;
    }

    /**
     * The identifier of the transaction.
     *
     * @param string $value
     *
     * @return $this
     */
    public function orderNumber(?string $value): self
    {
        $this->setProperty('orderNumber', $value);

        return $this;
    }

    /**
     * The URL for sending a payment.
     *
     * @param string $value
     *
     * @return $this
     */
    public function paymentUrl(?string $value): self
    {
        $this->setProperty('paymentUrl', $value);

        return $this;
    }

    /**
     * The current status of the order.
     *
     * @param OrderStatus $value
     *
     * @return $this
     */
    public function orderStatus(?OrderStatus $value): self
    {
        $this->setProperty('orderStatus', $value);

        return $this;
    }

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     * @param Invoice $value
     *
     * @return $this
     */
    public function partOfInvoice(?Invoice $value): self
    {
        $this->setProperty('partOfInvoice', $value);

        return $this;
    }

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     * @param Organization|Person $value
     *
     * @return $this
     */
    public function merchant($value): self
    {
        $this->setProperty('merchant', $value);

        return $this;
    }

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     * @param bool $value
     *
     * @return $this
     */
    public function isGift(?bool $value): self
    {
        $this->setProperty('isGift', $value);

        return $this;
    }

    /**
     * The billing address for the order.
     *
     * @param PostalAddress $value
     *
     * @return $this
     */
    public function billingAddress(?PostalAddress $value): self
    {
        $this->setProperty('billingAddress', $value);

        return $this;
    }

    /**
     * Any discount applied (to an Order).
     *
     * @param string $value
     *
     * @return $this
     */
    public function discount(?string $value): self
    {
        $this->setProperty('discount', $value);

        return $this;
    }

    /**
     * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
     *
     * @param Offer $value
     *
     * @return $this
     */
    public function acceptedOffer(?Offer $value): self
    {
        $this->setProperty('acceptedOffer', $value);

        return $this;
    }

    /**
     * The currency of the discount.<br/><br/>.
Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     * @param string $value
     *
     * @return $this
     */
    public function discountCurrency(?string $value): self
    {
        $this->setProperty('discountCurrency', $value);

        return $this;
    }

    /**
     * Code used to redeem a discount.
     *
     * @param string $value
     *
     * @return $this
     */
    public function discountCode(?string $value): self
    {
        $this->setProperty('discountCode', $value);

        return $this;
    }
}
