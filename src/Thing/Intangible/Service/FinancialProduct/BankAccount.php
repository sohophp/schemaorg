<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;

use Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;

/**
* A product or service offered by a bank whereby one may deposit, withdraw or transfer money and in some cases be paid interest.
* @see http://schema.org/BankAccount
* @package Sohophp\SchemaOrg\Thing\Intangible\Service\FinancialProduct
*/
class BankAccount extends FinancialProduct
{

    /**
    * The type of a bank account.
    * @param string|string $value
    * @return $this
    */
    public function bankAccountType($value)
    {
        $this->setProperty('bankAccountType', $value);
        return $this;
    }

    /**
    * An overdraft is an extension of credit from a lending institution when an account reaches zero. An overdraft allows the individual to continue withdrawing money even if the account has no funds in it. Basically the bank allows people to borrow a set amount of money.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function accountOverdraftLimit(?MonetaryAmount $value)
    {
        $this->setProperty('accountOverdraftLimit', $value);
        return $this;
    }

    /**
    * A minimum amount that has to be paid in every month.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function accountMinimumInflow(?MonetaryAmount $value)
    {
        $this->setProperty('accountMinimumInflow', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\Service\\FinancialProduct\\BankAccount','Thing\\BankAccount');

