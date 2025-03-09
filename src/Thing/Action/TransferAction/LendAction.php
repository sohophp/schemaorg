<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;

/**
* The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction.\n\nRelated actions:\n\n* [[BorrowAction]]: Reciprocal of LendAction.
* @see schema:LendAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class LendAction extends TransferAction
{
   /**
        * A sub property of participant. The person that borrows the object being lent.
        */
    protected $borrower = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setBorrower($value)
    {
        $this->setProperty('borrower', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getBorrower()
    {
       return $this->getProperty('borrower');
    }


}
