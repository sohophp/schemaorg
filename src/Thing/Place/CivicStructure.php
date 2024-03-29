<?php
namespace Sohophp\SchemaOrg\Thing\Place;

use Sohophp\SchemaOrg\Thing\Place;

/**
* A public structure, such as a town hall or concert hall.
* @see http://schema.org/CivicStructure
* @package Sohophp\SchemaOrg\Thing\Place

*
*/
class CivicStructure extends Place
{

    /**
    * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.<br/><br/>

<ul>
<li>Days are specified using the following two-letter combinations: <code>Mo</code>, <code>Tu</code>, <code>We</code>, <code>Th</code>, <code>Fr</code>, <code>Sa</code>, <code>Su</code>.</li>
<li>Times are specified using 24:00 time. For example, 3pm is specified as <code>15:00</code>. </li>
<li>Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.</li>
<li>If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot; datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.</li>
</ul>

    * @param string|array $value
    * @return $this
    * @deprecated use setOpeningHours
    */
    public function openingHours($value)
    {
        $this->setProperty('openingHours', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setOpeningHours($value)
    {
        $this->setProperty('openingHours', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getOpeningHours()
    {
       return $this->getProperty('openingHours');
    }


}
