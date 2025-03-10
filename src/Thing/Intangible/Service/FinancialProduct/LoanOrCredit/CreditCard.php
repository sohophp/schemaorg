<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A card payment method of a particular brand or name.  Used to mark up a
 * particular payment method and/or the financial product/service that supplies
 * the card account.
 * 
 * Commonly used values:
 * 
 * * http://purl.org/goodrelations/v1#AmericanExpress
 * * http://purl.org/goodrelations/v1#DinersClub
 * * http://purl.org/goodrelations/v1#Discover
 * * http://purl.org/goodrelations/v1#JCB
 * * http://purl.org/goodrelations/v1#MasterCard
 * * http://purl.org/goodrelations/v1#VISA
* @see http://schema.org/CreditCard
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit
*/
class CreditCard extends LoanOrCredit
{


    /**
        * The minimum payment is the lowest amount of money that one is required to pay
 * on a credit card statement each month.
        * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function monthlyMinimumRepaymentAmount($value)
    {
        $this->setProperty('monthlyMinimumRepaymentAmount', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function setMonthlyMinimumRepaymentAmount($value)
    {
        $this->setProperty('monthlyMinimumRepaymentAmount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMonthlyMinimumRepaymentAmount()
    {
       return $this->getProperty('monthlyMinimumRepaymentAmount');
    }


}
