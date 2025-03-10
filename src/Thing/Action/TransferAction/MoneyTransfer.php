<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\FinancialService\BankOrCreditUnion;

/**
* The act of transferring money from one place to another place. This may occur
 * electronically or physically.
* @see http://schema.org/MoneyTransfer
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class MoneyTransfer extends TransferAction
{


    /**
        * The amount of money.
        * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function amount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * @param MonetaryAmount|array|string|mixed $value
    * @return $this
    */
    public function setAmount($value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAmount()
    {
       return $this->getProperty('amount');
    }


    /**
        * A bank or bank’s branch, financial institution or international financial
 * institution operating the beneficiary’s bank account or releasing funds for
 * the beneficiary
        * @param BankOrCreditUnion|string|array|mixed $value
    * @return $this
    */
    public function beneficiaryBank($value)
    {
        $this->setProperty('beneficiaryBank', $value);
        return $this;
    }

    /**
    * @param BankOrCreditUnion|string|array|mixed $value
    * @return $this
    */
    public function setBeneficiaryBank($value)
    {
        $this->setProperty('beneficiaryBank', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBeneficiaryBank()
    {
       return $this->getProperty('beneficiaryBank');
    }


}
