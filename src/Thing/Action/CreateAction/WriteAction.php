<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Action\CreateAction;

use Sohophp\SchemaOrg\Thing\Action\CreateAction;
use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
 * The act of authoring written creative content.
 * @see https://schema.org/WriteAction
 * @package Sohophp\SchemaOrg\Thing\Action\CreateAction
 */
class WriteAction extends CreateAction
{
    /**
     * A sub property of instrument. The language used on this action.
     * @see https://schema.org/language
     * @param Language|array $value
     * @return $this
     */
    public function language($value)
    {
        $this->setProperty('language', $value);
        return $this;
    }

    /**
     * @param Language|array $value
     * @return $this
     */
    public function setLanguage($value)
    {
        $this->setProperty('language', $value);
        return $this;
    }

    /**
     * @param Language $value
     * @return $this
     */
    public function addLanguage($value)
    {
        $current = $this->getProperty('language');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('language', $current);
        return $this;
    }

    /**
     * @return Language|array
     */
    public function getLanguage()
    {
        return $this->getProperty('language');
    }
    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
     * @see https://schema.org/inLanguage
     * @param string|Language|array $value
     * @return $this
     */
    public function inLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language|array $value
     * @return $this
     */
    public function setInLanguage($value)
    {
        $this->setProperty('inLanguage', $value);
        return $this;
    }

    /**
     * @param string|Language $value
     * @return $this
     */
    public function addInLanguage($value)
    {
        $current = $this->getProperty('inLanguage');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('inLanguage', $current);
        return $this;
    }

    /**
     * @return string|Language|array
     */
    public function getInLanguage()
    {
        return $this->getProperty('inLanguage');
    }
}
