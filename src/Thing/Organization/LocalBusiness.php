<?php declare(strict_types=1);
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
    public function priceRange(?string $value)
    {
        $this->setProperty('priceRange', $value);
        return $this;
    }

    /**
    * The currency accepted.<br/><br/>

Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
    * @param string $value
    * @return $this
    */
    public function currenciesAccepted(?string $value)
    {
        $this->setProperty('currenciesAccepted', $value);
        return $this;
    }

    /**
    * The larger organization that this local business is a branch of, if any. Not to be confused with (anatomical)<a class="localLink" href="http://schema.org/branch">branch</a>.
    * @param Organization $value
    * @return $this
    */
    public function branchOf(?Organization $value)
    {
        $this->setProperty('branchOf', $value);
        return $this;
    }

    /**
    * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
    * @param string $value
    * @return $this
    */
    public function paymentAccepted(?string $value)
    {
        $this->setProperty('paymentAccepted', $value);
        return $this;
    }

    /**
    * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.<br/><br/>

<ul>
<li>Days are specified using the following two-letter combinations: <code>Mo</code>, <code>Tu</code>, <code>We</code>, <code>Th</code>, <code>Fr</code>, <code>Sa</code>, <code>Su</code>.</li>
<li>Times are specified using 24:00 time. For example, 3pm is specified as <code>15:00</code>. </li>
<li>Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.</li>
<li>If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot; datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.</li>
</ul>

    * @param string $value
    * @return $this
    */
    public function openingHours(?string $value)
    {
        $this->setProperty('openingHours', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\LocalBusiness','Thing\\LocalBusiness');

