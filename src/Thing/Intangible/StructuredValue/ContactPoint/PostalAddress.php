<?php

namespace Sohophp\StruacturedData\Thing\Intangible\StructuredValue\ContactPoint;

use Sohophp\StruacturedData\Thing\ThingAbstract;
use Sohophp\StruacturedData\Thing\ThingInterface;

/**
 * The mailing address.
 * Class PostalAddress
 * @package Sohophp\StruacturedData\Thing\Intangible\StructureedValue\ContactPoint
 * @see https://schema.org/PostalAddress
 */
class PostalAddress extends ThingAbstract implements ThingInterface
{
    protected $type = 'PostalAddress';

    /**
     * The country. For example, USA.
     * You can also provide the two-letter ISO 3166-1 alpha-2 country code.
     * @link http://en.wikipedia.org/wiki/ISO_3166-1
     * @param string $addressCountry
     * @return PostalAddress
     */
    public function addressCountry(string $addressCountry)
    {
        return $this->setProperty('addressCountry', $addressCountry);
    }

    /**
     * The locality. For example, Mountain View.
     * @param string $addressLocality
     * @return PostalAddress
     */

    public function addressLocality(string $addressLocality)
    {
        return $this->setProperty('addressLocality', $addressLocality);
    }

    /**
     * The region. For example, CA.
     * @param string $addressRegion
     * @return PostalAddress
     */
    public function addressRegion(string $addressRegion)
    {
        return $this->setProperty('addressRegion', $addressRegion);
    }

    /**
     * The post office box number for PO box addresses.
     * @param $postOfficeBoxNumber
     * @return PostalAddress
     */
    public function postOfficeBoxNumber(string $postOfficeBoxNumber)
    {
        return $this->setProperty('postOfficeBoxNumber', $postOfficeBoxNumber);
    }

    /**
     * The postal code. For example, 94043.
     * @param $postalCode
     * @return PostalAddress
     */
    public function postalCode(string $postalCode)
    {
        return $this->setProperty('postalCode', $postalCode);
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * @param $streetAddress
     * @return PostalAddress
     */
    public function streetAddress(string $streetAddress)
    {
        return $this->setProperty('streetAddress', $streetAddress);
    }
}
