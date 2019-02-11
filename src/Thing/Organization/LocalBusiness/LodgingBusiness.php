<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;

use Sohophp\SchemaOrg\Thing\Organization\LocalBusiness;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Intangible\Language;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;

/**
* A lodging business, such as a motel, hotel, or inn.
* @see http://schema.org/LodgingBusiness
* @package Sohophp\SchemaOrg\Thing\Organization\LocalBusiness
*/
class LodgingBusiness extends LocalBusiness
{

    /**
    * An intended audience, i.e. a group for whom something was created.
    * @param Audience $value
    * @return $this
    */
    public function audience(?Audience $value)
    {
        $this->setProperty('audience', $value);
        return $this;
    }

    /**
    * The earliest someone may check into a lodging establishment.
    * @param  $value
    * @return $this
    */
    public function checkinTime($value)
    {
        $this->setProperty('checkinTime', $value);
        return $this;
    }

    /**
    * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
    * @param string|bool $value
    * @return $this
    */
    public function petsAllowed($value)
    {
        $this->setProperty('petsAllowed', $value);
        return $this;
    }

    /**
    * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="http://schema.org/inLanguage">inLanguage</a>
    * @param Language|string $value
    * @return $this
    */
    public function availableLanguage($value)
    {
        $this->setProperty('availableLanguage', $value);
        return $this;
    }

    /**
    * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
    * @param LocationFeatureSpecification $value
    * @return $this
    */
    public function amenityFeature(?LocationFeatureSpecification $value)
    {
        $this->setProperty('amenityFeature', $value);
        return $this;
    }

    /**
    * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
    * @param Rating $value
    * @return $this
    */
    public function starRating(?Rating $value)
    {
        $this->setProperty('starRating', $value);
        return $this;
    }

    /**
    * The latest someone may check out of a lodging establishment.
    * @param  $value
    * @return $this
    */
    public function checkoutTime($value)
    {
        $this->setProperty('checkoutTime', $value);
        return $this;
    }


}

