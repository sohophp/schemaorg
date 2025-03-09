<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* A payment method is a standardized procedure for transferring the monetary amount for a purchase. Payment methods are characterized by the legal and technical structures used, and by the organization or group carrying out the transaction. The following legacy values should be accepted:
    \n\n* http://purl.org/goodrelations/v1#ByBankTransferInAdvance\n* http://purl.org/goodrelations/v1#ByInvoice\n* http://purl.org/goodrelations/v1#Cash\n* http://purl.org/goodrelations/v1#CheckInAdvance\n* http://purl.org/goodrelations/v1#COD\n* http://purl.org/goodrelations/v1#DirectDebit\n* http://purl.org/goodrelations/v1#GoogleCheckout\n* http://purl.org/goodrelations/v1#PayPal\n* http://purl.org/goodrelations/v1#PaySwarm\n\nStructured values are recommended for newer payment methods.
* @see schema:PaymentMethod
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class PaymentMethod extends Intangible
{
   /**
        * The type of a payment method.
        */
    protected $paymentMethodType = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setPaymentMethodType($value)
    {
        $this->setProperty('paymentMethodType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPaymentMethodType()
    {
       return $this->getProperty('paymentMethodType');
    }


}
