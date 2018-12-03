<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\PaymentStatusType;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
 * A statement of the money due for goods or services; a bill.
 *
 * @see http://schema.org/Invoice
 */
class Invoice extends Intangible
{
    /**
     * The time interval used to compute the invoice.
     *
     * @param Duration $value
     *
     * @return $this
     */
    public function billingPeriod(?Duration $value): self
    {
        $this->setProperty('billingPeriod', $value);

        return $this;
    }

    /**
     * The date the invoice is scheduled to be paid.
     *
     * @param \DateTimeInterface $value
     *
     * @return $this
     */
    public function scheduledPaymentDate(?\DateTimeInterface $value): self
    {
        $this->setProperty('scheduledPaymentDate', $value);

        return $this;
    }

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     * @param PaymentStatusType|string $value
     *
     * @return $this
     */
    public function paymentStatus($value): self
    {
        $this->setProperty('paymentStatus', $value);

        return $this;
    }

    /**
     * The minimum payment required at this time.
     *
     * @param PriceSpecification|MonetaryAmount $value
     *
     * @return $this
     */
    public function minimumPaymentDue($value): self
    {
        $this->setProperty('minimumPaymentDue', $value);

        return $this;
    }

    /**
     * The total amount due.
     *
     * @param MonetaryAmount|PriceSpecification $value
     *
     * @return $this
     */
    public function totalPaymentDue($value): self
    {
        $this->setProperty('totalPaymentDue', $value);

        return $this;
    }

    /**
     * The identifier for the account the payment will be applied to.
     *
     * @param string $value
     *
     * @return $this
     */
    public function accountId(?string $value): self
    {
        $this->setProperty('accountId', $value);

        return $this;
    }

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
     *
     * @param Order $value
     *
     * @return $this
     */
    public function referencesOrder(?Order $value): self
    {
        $this->setProperty('referencesOrder', $value);

        return $this;
    }
}
