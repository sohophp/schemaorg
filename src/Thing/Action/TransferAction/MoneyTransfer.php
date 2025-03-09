<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;

/**
* The act of transferring money from one place to another place. This may occur electronically or physically.
* @see schema:MoneyTransfer
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class MoneyTransfer extends TransferAction
{
   /**
        * The amount of money.
        */
    protected $amount = null;

   /**
        * A bank or bank’s branch, financial institution or international financial institution operating the beneficiary’s bank account or releasing funds for the beneficiary.
        */
    protected $beneficiaryBank = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
