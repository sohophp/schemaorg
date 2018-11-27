<?php

namespace Sohophp\SchemaOrg;

use Sohophp\SchemaOrg\DataType\Text\Url;

class Thing extends BaseType
{
    /**
     * @param string|URL $value
     * @return $this
     */

    public function additionalType($value)
    {
        $this->setProperty('additionalType', $value);
        return $this;
    }

    /**
     *
     * @param string $value
     * @return $this
     */
    public function alternateName(string $value)
    {
        $this->setProperty('alternateName', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function description(string $value)
    {
        return $this->setProperty('description', $value);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function disambiguatingDescription(string $value)
    {
        $this->setProperty('disambiguatingDescription', $value);
        return $this;
    }

    /**
     * @param string|Url|? $value
     * @return $this
     */
    public function identifier($value)
    {
        $this->setProperty('identifier', $value);
        return $this;
    }

    /**
     * @param ImageObject|Url|string|Array $value
     * @return $this
     */
    public function image($value)
    {
        $this->setProperty("image", $value);
        return $this;
    }

    /**
     * @param CreativeWork|URL|string $value
     * @return $this
     */
    public function mainEntityOfPage($value)
    {
        $this->setProperty("mainEntityOfPage", $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function name($value)
    {
        $this->setProperty('name', $value);
        return $this;
    }

    public function potentialAction($value)
    {

    }


    public function sameAs($value)
    {
        $this->setProperty('sameAs',$value);
        return $this;
    }

    public function subjectOf()
    {

    }

    public function url($value)
    {
        $this->setProperty('url', $value);
        return $this;
    }

}
