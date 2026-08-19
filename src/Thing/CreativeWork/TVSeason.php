<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea\Country;
use Sohophp\SchemaOrg\Thing\Intangible\Series\CreativeWorkSeries\TVSeries;

/**
 * Season dedicated to TV broadcast and associated online delivery.
 * @see https://schema.org/TVSeason
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class TVSeason extends CreativeWork
{
    /**
     * The country of origin of something, including products as well as creative works such as movie and TV content. In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable. In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     * @see https://schema.org/countryOfOrigin
     * @param Country|array $value
     * @return $this
     */
    public function countryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
     * @param Country|array $value
     * @return $this
     */
    public function setCountryOfOrigin($value)
    {
        $this->setProperty('countryOfOrigin', $value);
        return $this;
    }

    /**
     * @param Country $value
     * @return $this
     */
    public function addCountryOfOrigin($value)
    {
        $current = $this->getProperty('countryOfOrigin');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('countryOfOrigin', $current);
        return $this;
    }

    /**
     * @return Country|array
     */
    public function getCountryOfOrigin()
    {
        return $this->getProperty('countryOfOrigin');
    }
    /**
     * The TV series to which this episode or season belongs.
     * @see https://schema.org/partOfTVSeries
     * @param TVSeries|array $value
     * @return $this
     */
    public function partOfTVSeries($value)
    {
        $this->setProperty('partOfTVSeries', $value);
        return $this;
    }

    /**
     * @param TVSeries|array $value
     * @return $this
     */
    public function setPartOfTVSeries($value)
    {
        $this->setProperty('partOfTVSeries', $value);
        return $this;
    }

    /**
     * @param TVSeries $value
     * @return $this
     */
    public function addPartOfTVSeries($value)
    {
        $current = $this->getProperty('partOfTVSeries');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('partOfTVSeries', $current);
        return $this;
    }

    /**
     * @return TVSeries|array
     */
    public function getPartOfTVSeries()
    {
        return $this->getProperty('partOfTVSeries');
    }
    /**
     * An [EIDR](https://eidr.org/) (Entertainment Identifier Registry) [[identifier]] representing at the most general/abstract level, a work of film or television. For example, the motion picture known as "Ghostbusters" has a titleEIDR of "10.5240/7EC7-228A-510A-053E-CBB8-J". This title (or work) may have several variants, which EIDR calls "edits". See [[editEIDR]]. Since schema.org types like [[Movie]], [[TVEpisode]], [[TVSeason]], and [[TVSeries]] can be used for both works and their multiple expressions, it is possible to use [[titleEIDR]] alone (for a general description), or alongside [[editEIDR]] for a more edit-specific description.
     * @see https://schema.org/titleEIDR
     * @param string|array $value
     * @return $this
     */
    public function titleEIDR($value)
    {
        $this->setProperty('titleEIDR', $value);
        return $this;
    }

    /**
     * @param string|array $value
     * @return $this
     */
    public function setTitleEIDR($value)
    {
        $this->setProperty('titleEIDR', $value);
        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addTitleEIDR($value)
    {
        $current = $this->getProperty('titleEIDR');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('titleEIDR', $current);
        return $this;
    }

    /**
     * @return string|array
     */
    public function getTitleEIDR()
    {
        return $this->getProperty('titleEIDR');
    }
}
