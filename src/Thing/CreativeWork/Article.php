<?php

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\DataType\Text\Url;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\SpeakableSpecification;

class Article extends CreativeWork
{
    /**
     * @param string $value
     * @return $this
     */
    public function articleBody(string $value)
    {
        $this->setProperty('articleBody', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function articleSection(string $value)
    {
        $this->setProperty('articleSection', $value);
        return $this;
    }


    /**
     * @param string|CreativeWork $value
     * @return $this
     */
    public function backstory($value)
    {
        $this->setProperty('backstory', $value);
        return $this;
    }

    /**
     * @param integer|string $value
     * @return $this
     */
    public function pageEnd($value)
    {
        $this->setProperty('pageEnd', $value);
        return $this;
    }

    /**
     * @param integer|string $value
     * @return $this
     */
    public function pageStart($value)
    {
        $this->setProperty('pageStart', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function pagination(string $value)
    {
        $this->setProperty('pagination', $value);
        return $this;
    }

    /**
     * @param string|SpeakableSpecification|Url $value
     * @return $this
     */
    public function speakable($value)
    {
        $this->setProperty('speakable', $value);
        return $this;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function wordCount(int $value)
    {
        $this->setProperty('wordCount', $value);
        return $this;
    }
}
