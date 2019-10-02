<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness\FinancialService\BankOrCreditUnion;

/**
* The act of transferring money from one place to another place. This may occur electronically or physically.
* @see http://schema.org/MoneyTransfer
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class MoneyTransfer extends TransferAction
{

    /**
    * The amount of money.
    * @param MonetaryAmount $value
    * @return $this
    */
    public function amount(?MonetaryAmount $value)
    {
        $this->setProperty('amount', $value);
        return $this;
    }

    /**
    * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the beneficiary
    * @param BankOrCreditUnion|string $value
    * @return $this
    */
    public function beneficiaryBank($value)
    {
        $this->setProperty('beneficiaryBank', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TransferAction\\MoneyTransfer','Thing\\MoneyTransfer');

