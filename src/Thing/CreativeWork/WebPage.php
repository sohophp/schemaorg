<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\SpeakableSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\BreadcrumbList;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPageElement;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty;

/**
* A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the various properties about that webpage, such as <code>breadcrumb</code> may be used. We recommend explicit declaration if these properties are specified, but if they are found outside of an itemscope, they will be assumed to be about the page.
* @see http://schema.org/WebPage
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class WebPage extends CreativeWork
{

    /**
    * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.<br/><br/>

The <em>speakable</em> property can be repeated an arbitrary number of times, with three kinds of possible 'content-locator' values:<br/><br/>

1.) <em>id-value</em> URL references - uses <em>id-value</em> of an element in the page being annotated. The simplest use of <em>speakable</em> has (potentially relative) URL values, referencing identified sections of the document concerned.<br/><br/>

2.) CSS Selectors - addresses content in the annotated page, eg. via class attribute. Use the <a class="localLink" href="http://schema.org/cssSelector">cssSelector</a> property.<br/><br/>

3.)  XPaths - addresses content via XPaths (assuming an XML view of the content). Use the <a class="localLink" href="http://schema.org/xpath">xpath</a> property.<br/><br/>

For more sophisticated markup of speakable sections beyond simple ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this
we define a supporting type, <a class="localLink" href="http://schema.org/SpeakableSpecification">SpeakableSpecification</a>  which is defined to be a possible value of the <em>speakable</em> property.
    * @param SpeakableSpecification|string $value
    * @return $this
    */
    public function speakable($value)
    {
        $this->setProperty('speakable', $value);
        return $this;
    }

    /**
    * A set of links that can help a user understand and navigate a website hierarchy.
    * @param string|BreadcrumbList $value
    * @return $this
    */
    public function breadcrumb($value)
    {
        $this->setProperty('breadcrumb', $value);
        return $this;
    }

    /**
    * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
    * @param string $value
    * @return $this
    */
    public function significantLink(?string $value)
    {
        $this->setProperty('significantLink', $value);
        return $this;
    }

    /**
    * A link related to this web page, for example to other related web pages.
    * @param string $value
    * @return $this
    */
    public function relatedLink(?string $value)
    {
        $this->setProperty('relatedLink', $value);
        return $this;
    }

    /**
    * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
    * @param  $value
    * @return $this
    */
    public function lastReviewed($value)
    {
        $this->setProperty('lastReviewed', $value);
        return $this;
    }

    /**
    * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
    * @param Person|Organization $value
    * @return $this
    */
    public function reviewedBy($value)
    {
        $this->setProperty('reviewedBy', $value);
        return $this;
    }

    /**
    * Indicates the main image on the page.
    * @param ImageObject $value
    * @return $this
    */
    public function primaryImageOfPage(?ImageObject $value)
    {
        $this->setProperty('primaryImageOfPage', $value);
        return $this;
    }

    /**
    * Indicates if this web page element is the main subject of the page.
    * @param WebPageElement $value
    * @return $this
    */
    public function mainContentOfPage(?WebPageElement $value)
    {
        $this->setProperty('mainContentOfPage', $value);
        return $this;
    }

    /**
    * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
    * @param string $value
    * @return $this
    */
    public function significantLinks(?string $value)
    {
        $this->setProperty('significantLinks', $value);
        return $this;
    }

    /**
    * One of the domain specialities to which this web page's content applies.
    * @param Specialty $value
    * @return $this
    */
    public function specialty(?Specialty $value)
    {
        $this->setProperty('specialty', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\WebPage','Thing\\WebPage');

