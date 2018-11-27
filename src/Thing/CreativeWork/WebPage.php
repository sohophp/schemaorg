<?php

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\DataType\Date;
use Sohophp\SchemaOrg\DataType\Text;
use Sohophp\SchemaOrg\Thing\BreadcrumbList;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\SpeakableSpecification;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;

class WebPage extends CreativeWork
{
    /**
     * @param BreadcrumbList|Text|string $value
     * @return $this
     */
    public function breadcrumb($value)
    {
        $this->setProperty('breadcrumb', $value);
        return $this;
    }

    /**
     * @param Date $value
     * @return $this
     */
    public function lastReviewed(Date $value)
    {
        $this->setProperty('lastReviewed', $value);
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function mainContentOfPage($value)
    {
        $this->setProperty('mainContentOfPage', $value);
        return $this;
    }

    /**
     * @param CreativeWork\MediaObject\ImageObject $value
     * @return $this
     */
    public function primaryImageOfPage(CreativeWork\MediaObject\ImageObject $value)
    {
        $this->setProperty('primaryImageOfPage', $value);
        return $this;
    }


    /**
     * @param Text\Url $value
     * @return $this
     */
    public function relatedLink(Text\Url $value)
    {
        $this->setProperty('relatedLink', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function reviewedBy($value)
    {
        $this->setProperty('reviewedBy', $value);
        return $this;
    }

    /**
     * @param Text\Url $value
     * @return $this
     */
    public function significantLink(Text\Url $value)
    {
        $this->setProperty('significantLink', $value);
        return $this;
    }

    /**
     * @param SpeakableSpecification|Text\Url $value
     * @return $this
     */
    public function speakable($value)
    {
        $this->setProperty('speakable', $value);
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function specialty($value)
    {
        $this->setProperty('specialty', $value);
        return $this;
    }
}
