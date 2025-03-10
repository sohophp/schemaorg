<?php
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;

/**
* Organization: A business corporation.
* @see schema:Corporation
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class Corporation extends Organization
{


    /**
        * The exchange traded instrument associated with a Corporation object. The
 * tickerSymbol is expressed as an exchange and an instrument name separated by
 * a space character. For the exchange component of the tickerSymbol attribute,
 * we recommend using the controlled vocabulary of Market Identifier Codes (MIC)
 * specified in ISO 15022.
        * @param array|string|mixed $value
    * @return $this
    */
    public function tickerSymbol($value)
    {
        $this->setProperty('tickerSymbol', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTickerSymbol($value)
    {
        $this->setProperty('tickerSymbol', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTickerSymbol()
    {
       return $this->getProperty('tickerSymbol');
    }


}
