<?php

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;

/**
 * Class CreativeWork
 * @package Sohophp\SchemaOrg\Thing
 * @see https://schema.org/CreativeWork
 */
class CreativeWork extends Thing
{
    public function about(Thing $value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    public function accessMode(string $value)
    {
        $this->setProperty('accessMode', $value);
        return $this;
    }

    public function accessModeSufficient(string $value)
    {

        $this->setProperty('accessModeSufficient', $value);
        return $this;

    }

    public function accessibilityAPI(string $value)
    {
        $this->setProperty('accessibilityAPI', $value);
        return $this;
    }

    public function accessibilityControl(string $value)
    {
        $this->setProperty('accessibilityControl', $value);
        return $this;
    }

    public function accessibilityFeature(string $value)
    {
        $this->setProperty('accessibilityFeature', $value);
        return $this;
    }

    public function accessibilityHazard(string $value)
    {
        $this->setProperty('accessibilityHazard', $value);
        return $this;
    }

    public function accessibilitySummary(string $value)
    {
        $this->setProperty('accessibilitySummary', $value);
        return $this;
    }

    public function accountablePerson(string $value)
    {
        $this->setProperty('accountablePerson', $value);
        return $this;
    }

    public function aggregateRating()
    {

    }

    public function alternativeHeadline()
    {

    }

    public function associatedMedia()
    {

    }

    public function audience()
    {

    }

    public function audio()
    {

    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function author($value)
    {
        $this->setProperty('author', $value);
        return $this;
    }

    public function award()
    {


    }

    public function character()
    {

    }

    public function citation()
    {

    }

    public function comment()
    {

    }

    public function commentCount()
    {

    }

    public function contentLocation()
    {

    }

    public function contentRating()
    {

    }

    public function contentReferenceTime()
    {

    }

    public function contributor()
    {

    }

    public function headline(string $value)
    {
        $this->setProperty('headline', $value);
        return $this;
    }

    public function dateCreated($value)
    {
        $this->setProperty('dateCreated', $value);
        return $this;
    }

    public function dateModified($value)
    {
        $this->setProperty('dateModified', $value);
        return $this;
    }

    public function datePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
     * @param Organization|Person $value
     * @return $this
     */
    public function publisher($value)
    {
        $this->setProperty('publisher', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function text(string $value)
    {
        $this->setProperty('text', $value);
        return $this;
    }

    public function mainEntity(Thing $value)
    {
        $this->setProperty('mainEntity', $value);
        return $this;
    }

}
