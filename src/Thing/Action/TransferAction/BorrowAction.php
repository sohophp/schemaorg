<?php
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;

/**
* The act of obtaining an object under an agreement to return it at a later
 * date. Reciprocal of LendAction.
 * 
 * Related actions:
 * 
 * * [[LendAction]]: Reciprocal of BorrowAction.
* @see schema:BorrowAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction
*/
class BorrowAction extends TransferAction
{


    /**
        * A sub property of participant. The person that lends the object being
 * borrowed.
        * @param array|string|mixed $value
    * @return $this
    */
    public function lender($value)
    {
        $this->setProperty('lender', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setLender($value)
    {
        $this->setProperty('lender', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLender()
    {
       return $this->getProperty('lender');
    }


}
