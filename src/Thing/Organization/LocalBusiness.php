<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
/**
* A particular physical business or branch of an organization. Examples of LocalBusiness include a restaurant, a particular branch of a restaurant chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
* @see http://schema.org/LocalBusiness
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class LocalBusiness extends Organization
{

     
     /**
     * The price range of the business, for example <code>$$$</code>.
     * @param string $value
     * @return $this
     */

     public function priceRange(?string $value):self
     {
        $this->setProperty("priceRange",$value);
        return $this;
     }

     
     /**
     * The larger organization that this local business is a branch of, if any. Not to be confused with (anatomical)<a class="localLink" href="http://schema.org/branch">branch</a>.
     * @param Organization $value
     * @return $this
     */

     public function branchOf(?Organization $value):self
     {
        $this->setProperty("branchOf",$value);
        return $this;
     }

     
     /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     * @param string $value
     * @return $this
     */

     public function paymentAccepted(?string $value):self
     {
        $this->setProperty("paymentAccepted",$value);
        return $this;
     }

     
     /**
     * The currency accepted.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
     * @param string $value
     * @return $this
     */

     public function currenciesAccepted(?string $value):self
     {
        $this->setProperty("currenciesAccepted",$value);
        return $this;
     }

     
}

