<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\ItemList\BreadcrumbList;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPageElement;
use Sohophp\SchemaOrg\Thing\Person;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\Specialty;
/**
* A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the various properties about that webpage, such as <code>breadcrumb</code> may be used. We recommend explicit declaration if these properties are specified, but if they are found outside of an itemscope, they will be assumed to be about the page.
* @see http://schema.org/WebPage
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class WebPage extends CreativeWork
{

     
     /**
     * A set of links that can help a user understand and navigate a website hierarchy.
     * @param BreadcrumbList|string $value
     * @return $this
     */

     public function breadcrumb( $value):self
     {
        $this->setProperty("breadcrumb",$value);
        return $this;
     }

     
     /**
     * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     * @param string $value
     * @return $this
     */

     public function significantLink(?string $value):self
     {
        $this->setProperty("significantLink",$value);
        return $this;
     }

     
     /**
     * A link related to this web page, for example to other related web pages.
     * @param string $value
     * @return $this
     */

     public function relatedLink(?string $value):self
     {
        $this->setProperty("relatedLink",$value);
        return $this;
     }

     
     /**
     * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
     * @param  $value
     * @return $this
     */

     public function lastReviewed( $value):self
     {
        $this->setProperty("lastReviewed",$value);
        return $this;
     }

     
     /**
     * Indicates if this web page element is the main subject of the page.
     * @param WebPageElement $value
     * @return $this
     */

     public function mainContentOfPage(?WebPageElement $value):self
     {
        $this->setProperty("mainContentOfPage",$value);
        return $this;
     }

     
     /**
     * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
     * @param Person|Organization $value
     * @return $this
     */

     public function reviewedBy( $value):self
     {
        $this->setProperty("reviewedBy",$value);
        return $this;
     }

     
     /**
     * Indicates the main image on the page.
     * @param ImageObject $value
     * @return $this
     */

     public function primaryImageOfPage(?ImageObject $value):self
     {
        $this->setProperty("primaryImageOfPage",$value);
        return $this;
     }

     
     /**
     * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
     * @param string $value
     * @return $this
     */

     public function significantLinks(?string $value):self
     {
        $this->setProperty("significantLinks",$value);
        return $this;
     }

     
     /**
     * One of the domain specialities to which this web page's content applies.
     * @param Specialty $value
     * @return $this
     */

     public function specialty(?Specialty $value):self
     {
        $this->setProperty("specialty",$value);
        return $this;
     }

     
}

