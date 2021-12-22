<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A card payment method of a particular brand or name.  Used to mark up a particular payment method and/or the financial product/service that supplies the card account.<br/><br/>

Commonly used values:<br/><br/>

<ul>
<li>http://purl.org/goodrelations/v1#AmericanExpress</li>
<li>http://purl.org/goodrelations/v1#DinersClub</li>
<li>http://purl.org/goodrelations/v1#Discover</li>
<li>http://purl.org/goodrelations/v1#JCB</li>
<li>http://purl.org/goodrelations/v1#MasterCard</li>
<li>http://purl.org/goodrelations/v1#VISA</li>
</ul>

* @see http://schema.org/CreditCard
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct\LoanOrCredit

*
*/
class CreditCard extends LoanOrCredit
{

    /**
    * The minimum payment is the lowest amount of money that one is required to pay on a credit card statement each month.
    * @param MonetaryAmount|array $value
    * @return $this
    */
    public function monthlyMinimumRepaymentAmount(?MonetaryAmount $value)
    {
        $this->setProperty('monthlyMinimumRepaymentAmount', $value);
        return $this;
    }
   /**
    * @param MonetaryAmount|array $value
    * @return $this
    */
    public function setMonthlyMinimumRepaymentAmount(?MonetaryAmount $value)
    {
        $this->setProperty('monthlyMinimumRepaymentAmount', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getMonthlyMinimumRepaymentAmount()
    {
       return $this->getProperty('monthlyMinimumRepaymentAmount');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\FinancialProduct\\LoanOrCredit\\CreditCard','Thing\\CreditCard');

