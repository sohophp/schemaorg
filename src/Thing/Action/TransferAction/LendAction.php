<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
* The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/BorrowAction">BorrowAction</a>: Reciprocal of LendAction.</li>
</ul>

* @see http://schema.org/LendAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction

*
*/
class LendAction extends TransferAction
{

    /**
    * A sub property of participant. The person that borrows the object being lent.
    * @param Person|array $value
    * @return $this
    */
    public function borrower(?Person $value)
    {
        $this->setProperty('borrower', $value);
        return $this;
    }
   /**
    * @param Person|array $value
    * @return $this
    */
    public function setBorrower(?Person $value)
    {
        $this->setProperty('borrower', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getBorrower()
    {
       return $this->getProperty('borrower');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TransferAction\\LendAction','Thing\\LendAction');

