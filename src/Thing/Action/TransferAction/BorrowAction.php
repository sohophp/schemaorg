<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
* The act of obtaining an object under an agreement to return it at a later date. Reciprocal of LendAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/LendAction">LendAction</a>: Reciprocal of BorrowAction.</li>
</ul>

* @see http://schema.org/BorrowAction
* @package Sohophp\SchemaOrg\Thing\Action\TransferAction

*
*/
class BorrowAction extends TransferAction
{

    /**
    * A sub property of participant. The person that lends the object being borrowed.
    * @param Person|Organization|array $value
    * @return $this
    */
    public function lender($value)
    {
        $this->setProperty('lender', $value);
        return $this;
    }
   /**
    * @param Person|Organization|array $value
    * @return $this
    */
    public function setLender($value)
    {
        $this->setProperty('lender', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getLender()
    {
       return $this->getProperty('lender');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TransferAction\\BorrowAction','Thing\\BorrowAction');

