<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
/**
* Organization: A business corporation.
* @see http://schema.org/Corporation
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class Corporation extends Organization
{

     
     /**
     * The exchange traded instrument associated with a Corporation object. The tickerSymbol is expressed as an exchange and an instrument name separated by a space character. For the exchange component of the tickerSymbol attribute, we recommend using the controlled vocabulary of Market Identifier Codes (MIC) specified in ISO15022.
     * @param string $value
     * @return $this
     */

     public function tickerSymbol(?string $value):self
     {
        $this->setProperty("tickerSymbol",$value);
        return $this;
     }

     
}

