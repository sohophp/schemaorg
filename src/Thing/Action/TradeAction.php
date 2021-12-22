<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PriceSpecification;

/**
* The act of participating in an exchange of goods and services for monetary compensation. An agent trades an object, product or service with a participant in exchange for a one time or periodic payment.
* @see http://schema.org/TradeAction
* @package Sohophp\SchemaOrg\Thing\Action

*
*/
class TradeAction extends Action
{

    /**
    * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
    * @param PriceSpecification|array $value
    * @return $this
    */
    public function priceSpecification(?PriceSpecification $value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }
   /**
    * @param PriceSpecification|array $value
    * @return $this
    */
    public function setPriceSpecification(?PriceSpecification $value)
    {
        $this->setProperty('priceSpecification', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPriceSpecification()
    {
       return $this->getProperty('priceSpecification');
    }

    /**
    * The currency of the price, or a price component when attached to <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> and its subtypes.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string|array $value
    * @return $this
    */
    public function priceCurrency(?string $value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPriceCurrency(?string $value)
    {
        $this->setProperty('priceCurrency', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPriceCurrency()
    {
       return $this->getProperty('priceCurrency');
    }

    /**
    * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.<br/><br/>

Usage guidelines:<br/><br/>

<ul>
<li>Use the <a class="localLink" href="http://schema.org/priceCurrency">priceCurrency</a> property (with standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR") instead of including <a href="http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign">ambiguous symbols</a> such as '$' in the value.</li>
<li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
<li>Note that both <a href="http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute">RDFa</a> and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.</li>
<li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
</ul>

    * @param string|array $value
    * @return $this
    */
    public function price(?string $value)
    {
        $this->setProperty('price', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPrice(?string $value)
    {
        $this->setProperty('price', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPrice()
    {
       return $this->getProperty('price');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\TradeAction','Thing\\TradeAction');

