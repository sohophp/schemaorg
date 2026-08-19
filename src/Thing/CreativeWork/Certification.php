<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\MediaObject\ImageObject;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\Enumeration\CertificationStatusEnumeration;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Intangible\Rating;
use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;

/**
 * A Certification is an official and authoritative statement about a subject, for example a product, service, person, or organization. A certification is typically issued by an indendent certification body, for example a professional organization or government. It formally attests certain characteristics about the subject, for example Organizations can be ISO certified, Food products can be certified Organic or Vegan, a Person can be a certified professional, a Place can be certified for food processing. There are certifications for many domains: regulatory, organizational, recycling, food, efficiency, educational, ecological, etc. A certification is a form of credential, as are accreditations and licenses. Mapped from the [gs1:CertificationDetails](https://www.gs1.org/voc/CertificationDetails) class in the GS1 Web Vocabulary.
 * @see https://schema.org/Certification
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class Certification extends CreativeWork
{
    /**
     * An associated logo.
     * @see https://schema.org/logo
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function logo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
     * @param string|ImageObject|array $value
     * @return $this
     */
    public function setLogo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
     * @param string|ImageObject $value
     * @return $this
     */
    public function addLogo($value)
    {
        $current = $this->getProperty('logo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('logo', $current);
        return $this;
    }

    /**
     * @return string|ImageObject|array
     */
    public function getLogo()
    {
        return $this->getProperty('logo');
    }
    /**
     * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date, or a [[Certification]] the validity has expired.
     * @see https://schema.org/expires
     * @param mixed $value
     * @return $this
     */
    public function expires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setExpires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addExpires($value)
    {
        $current = $this->getProperty('expires');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('expires', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpires()
    {
        return $this->getProperty('expires');
    }
    /**
     * Identifier of a certification instance (as registered with an independent certification body). Typically this identifier can be used to consult and verify the certification instance. See also [gs1:certificationIdentification](https://www.gs1.org/voc/certificationIdentification).
     * @see https://schema.org/certificationIdentification
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function certificationIdentification($value)
    {
        $this->setProperty('certificationIdentification', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setCertificationIdentification($value)
    {
        $this->setProperty('certificationIdentification', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addCertificationIdentification($value)
    {
        $current = $this->getProperty('certificationIdentification');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('certificationIdentification', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getCertificationIdentification()
    {
        return $this->getProperty('certificationIdentification');
    }
    /**
     * Date of first publication or broadcast. For example the date a [[CreativeWork]] was broadcast or a [[Certification]] was issued.
     * @see https://schema.org/datePublished
     * @param mixed $value
     * @return $this
     */
    public function datePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setDatePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addDatePublished($value)
    {
        $current = $this->getProperty('datePublished');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('datePublished', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDatePublished()
    {
        return $this->getProperty('datePublished');
    }
    /**
     * Date when a certification was last audited. See also [gs1:certificationAuditDate](https://www.gs1.org/voc/certificationAuditDate).
     * @see https://schema.org/auditDate
     * @param mixed $value
     * @return $this
     */
    public function auditDate($value)
    {
        $this->setProperty('auditDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setAuditDate($value)
    {
        $this->setProperty('auditDate', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addAuditDate($value)
    {
        $current = $this->getProperty('auditDate');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('auditDate', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuditDate()
    {
        return $this->getProperty('auditDate');
    }
    /**
     * The subject matter of an object.
     * @see https://schema.org/about
     * @param Thing|array $value
     * @return $this
     */
    public function about($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
     * @param Thing|array $value
     * @return $this
     */
    public function setAbout($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
     * @param Thing $value
     * @return $this
     */
    public function addAbout($value)
    {
        $current = $this->getProperty('about');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('about', $current);
        return $this;
    }

    /**
     * @return Thing|array
     */
    public function getAbout()
    {
        return $this->getProperty('about');
    }
    /**
     * The date when the item becomes valid.
     * @see https://schema.org/validFrom
     * @param mixed $value
     * @return $this
     */
    public function validFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function addValidFrom($value)
    {
        $current = $this->getProperty('validFrom');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validFrom', $current);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidFrom()
    {
        return $this->getProperty('validFrom');
    }
    /**
     * Indicates the current status of a certification: active or inactive. See also [gs1:certificationStatus](https://www.gs1.org/voc/certificationStatus).
     * @see https://schema.org/certificationStatus
     * @param CertificationStatusEnumeration|array $value
     * @return $this
     */
    public function certificationStatus($value)
    {
        $this->setProperty('certificationStatus', $value);
        return $this;
    }

    /**
     * @param CertificationStatusEnumeration|array $value
     * @return $this
     */
    public function setCertificationStatus($value)
    {
        $this->setProperty('certificationStatus', $value);
        return $this;
    }

    /**
     * @param CertificationStatusEnumeration $value
     * @return $this
     */
    public function addCertificationStatus($value)
    {
        $current = $this->getProperty('certificationStatus');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('certificationStatus', $current);
        return $this;
    }

    /**
     * @return CertificationStatusEnumeration|array
     */
    public function getCertificationStatus()
    {
        return $this->getProperty('certificationStatus');
    }
    /**
     * The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
     * @see https://schema.org/issuedBy
     * @param Organization|array $value
     * @return $this
     */
    public function issuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
     * @param Organization|array $value
     * @return $this
     */
    public function setIssuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
     * @param Organization $value
     * @return $this
     */
    public function addIssuedBy($value)
    {
        $current = $this->getProperty('issuedBy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('issuedBy', $current);
        return $this;
    }

    /**
     * @return Organization|array
     */
    public function getIssuedBy()
    {
        return $this->getProperty('issuedBy');
    }
    /**
     * Rating of a certification instance (as defined by an independent certification body). Typically this rating can be used to rate the level to which the requirements of the certification instance are fulfilled. See also [gs1:certificationValue](https://www.gs1.org/voc/certificationValue).
     * @see https://schema.org/certificationRating
     * @param Rating|array $value
     * @return $this
     */
    public function certificationRating($value)
    {
        $this->setProperty('certificationRating', $value);
        return $this;
    }

    /**
     * @param Rating|array $value
     * @return $this
     */
    public function setCertificationRating($value)
    {
        $this->setProperty('certificationRating', $value);
        return $this;
    }

    /**
     * @param Rating $value
     * @return $this
     */
    public function addCertificationRating($value)
    {
        $current = $this->getProperty('certificationRating');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('certificationRating', $current);
        return $this;
    }

    /**
     * @return Rating|array
     */
    public function getCertificationRating()
    {
        return $this->getProperty('certificationRating');
    }
    /**
     * A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
     * @see https://schema.org/hasMeasurement
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function hasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue|array $value
     * @return $this
     */
    public function setHasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
     * @param QuantitativeValue $value
     * @return $this
     */
    public function addHasMeasurement($value)
    {
        $current = $this->getProperty('hasMeasurement');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('hasMeasurement', $current);
        return $this;
    }

    /**
     * @return QuantitativeValue|array
     */
    public function getHasMeasurement()
    {
        return $this->getProperty('hasMeasurement');
    }
    /**
     * The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]].
     * @see https://schema.org/validIn
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function validIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea|array $value
     * @return $this
     */
    public function setValidIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
     * @param AdministrativeArea $value
     * @return $this
     */
    public function addValidIn($value)
    {
        $current = $this->getProperty('validIn');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('validIn', $current);
        return $this;
    }

    /**
     * @return AdministrativeArea|array
     */
    public function getValidIn()
    {
        return $this->getProperty('validIn');
    }
}
