<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

/**
* A product or service offered by a bank whereby one may deposit, withdraw or
 * transfer money and in some cases be paid interest.
* @see schema:BankAccount
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
*/
class BankAccount extends FinancialProduct
{


    /**
        * An overdraft is an extension of credit from a lending institution when an
 * account reaches zero. An overdraft allows the individual to continue
 * withdrawing money even if the account has no funds in it. Basically the bank
 * allows people to borrow a set amount of money.
        * @param array|string|mixed $value
    * @return $this
    */
    public function accountOverdraftLimit($value)
    {
        $this->setProperty('accountOverdraftLimit', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccountOverdraftLimit($value)
    {
        $this->setProperty('accountOverdraftLimit', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccountOverdraftLimit()
    {
       return $this->getProperty('accountOverdraftLimit');
    }


    /**
        * A minimum amount that has to be paid in every month.
        * @param array|string|mixed $value
    * @return $this
    */
    public function accountMinimumInflow($value)
    {
        $this->setProperty('accountMinimumInflow', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAccountMinimumInflow($value)
    {
        $this->setProperty('accountMinimumInflow', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAccountMinimumInflow()
    {
       return $this->getProperty('accountMinimumInflow');
    }


    /**
        * The type of a bank account.
        * @param array|string|mixed $value
    * @return $this
    */
    public function bankAccountType($value)
    {
        $this->setProperty('bankAccountType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setBankAccountType($value)
    {
        $this->setProperty('bankAccountType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBankAccountType()
    {
       return $this->getProperty('bankAccountType');
    }


}
