<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\TransferAction;

use Sohophp\SchemaOrg\Thing\Action\TransferAction;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;

/**
 * The act of obtaining an object under an agreement to return it at a later date. Reciprocal of LendAction. Related actions: * [[LendAction]]: Reciprocal of BorrowAction.
 * @see https://schema.org/BorrowAction
 * @package Sohophp\SchemaOrg\Thing\Action\TransferAction
 */
class BorrowAction extends TransferAction
{
    /**
     * A sub property of participant. The person that lends the object being borrowed.
     * @see https://schema.org/lender
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
     * @param Person|Organization $value
     * @return $this
     */
    public function addLender($value)
    {
        $current = $this->getProperty('lender');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('lender', $current);
        return $this;
    }

    /**
     * @return Person|Organization|array
     */
    public function getLender()
    {
        return $this->getProperty('lender');
    }
}
