<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Person;

/**
 * The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction. Related actions: * [[BorrowAction]]: Reciprocal of LendAction.
 * @see https://schema.org/LendAction
 * @package Sohophp\SchemaOrg\Thing\Action\TransferAction
 */
class LendAction extends TransferAction
{
    /**
     * A sub property of participant. The person that borrows the object being lent.
     * @see https://schema.org/borrower
     * @param Person|array $value
     * @return $this
     */
    public function borrower($value)
    {
        $this->setProperty('borrower', $value);
        return $this;
    }

    /**
     * @param Person|array $value
     * @return $this
     */
    public function setBorrower($value)
    {
        $this->setProperty('borrower', $value);
        return $this;
    }

    /**
     * @param Person $value
     * @return $this
     */
    public function addBorrower($value)
    {
        $current = $this->getProperty('borrower');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('borrower', $current);
        return $this;
    }

    /**
     * @return Person|array
     */
    public function getBorrower()
    {
        return $this->getProperty('borrower');
    }
}
