<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A Certification is an official and authoritative statement about a subject, for example a product, service, person, or organization. A certification is typically issued by an indendent certification body, for example a professional organization or government. It formally attests certain characteristics about the subject, for example Organizations can be ISO certified, Food products can be certified Organic or Vegan, a Person can be a certified professional, a Place can be certified for food processing. There are certifications for many domains: regulatory, organizational, recycling, food, efficiency, educational, ecological, etc. A certification is a form of credential, as are accreditations and licenses. Mapped from the [gs1:CertificationDetails](https://www.gs1.org/voc/CertificationDetails) class in the GS1 Web Vocabulary.
* @see schema:Certification
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Certification extends CreativeWork
{
   /**
        * The organization issuing the item, for example a [[Permit]], [[Ticket]], or [[Certification]].
        */
    protected $issuedBy = null;

   /**
        * The subject matter of the content.
        */
    protected $about = null;

   /**
        * A measurement of an item, For example, the inseam of pants, the wheel size of a bicycle, the gauge of a screw, or the carbon footprint measured for certification by an authority. Usually an exact measurement, but can also be a range of measurements for adjustable products, for example belts and ski bindings.
        */
    protected $hasMeasurement = null;

   /**
        * The date when the item becomes valid.
        */
    protected $validFrom = null;

   /**
        * Rating of a certification instance (as defined by an independent certification body). Typically this rating can be used to rate the level to which the requirements of the certification instance are fulfilled. See also [gs1:certificationValue](https://www.gs1.org/voc/certificationValue).
        */
    protected $certificationRating = null;

   /**
        * An associated logo.
        */
    protected $logo = null;

   /**
        * Indicates the current status of a certification: active or inactive. See also  [gs1:certificationStatus](https://www.gs1.org/voc/certificationStatus).
        */
    protected $certificationStatus = null;

   /**
        * Identifier of a certification instance (as registered with an independent certification body). Typically this identifier can be used to consult and verify the certification instance. See also [gs1:certificationIdentification](https://www.gs1.org/voc/certificationIdentification).
        */
    protected $certificationIdentification = null;

   /**
        * The geographic area where the item is valid. Applies for example to a [[Permit]], a [[Certification]], or an [[EducationalOccupationalCredential]]. 
        */
    protected $validIn = null;

   /**
        * Date when a certification was last audited. See also  [gs1:certificationAuditDate](https://www.gs1.org/voc/certificationAuditDate).
        */
    protected $auditDate = null;

   /**
        * Date the content expires and is no longer useful or available. For example a [[VideoObject]] or [[NewsArticle]] whose availability or relevance is time-limited, a [[ClaimReview]] fact check whose publisher wants to indicate that it may no longer be relevant (or helpful to highlight) after some date, or a [[Certification]] the validity has expired.
        */
    protected $expires = null;

   /**
        * Date of first publication or broadcast. For example the date a [[CreativeWork]] was broadcast or a [[Certification]] was issued.
        */
    protected $datePublished = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setIssuedBy($value)
    {
        $this->setProperty('issuedBy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getIssuedBy()
    {
       return $this->getProperty('issuedBy');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAbout($value)
    {
        $this->setProperty('about', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAbout()
    {
       return $this->getProperty('about');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasMeasurement($value)
    {
        $this->setProperty('hasMeasurement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasMeasurement()
    {
       return $this->getProperty('hasMeasurement');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setValidFrom($value)
    {
        $this->setProperty('validFrom', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidFrom()
    {
       return $this->getProperty('validFrom');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCertificationRating($value)
    {
        $this->setProperty('certificationRating', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCertificationRating()
    {
       return $this->getProperty('certificationRating');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLogo($value)
    {
        $this->setProperty('logo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLogo()
    {
       return $this->getProperty('logo');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCertificationStatus($value)
    {
        $this->setProperty('certificationStatus', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCertificationStatus()
    {
       return $this->getProperty('certificationStatus');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCertificationIdentification($value)
    {
        $this->setProperty('certificationIdentification', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCertificationIdentification()
    {
       return $this->getProperty('certificationIdentification');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setValidIn($value)
    {
        $this->setProperty('validIn', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getValidIn()
    {
       return $this->getProperty('validIn');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAuditDate($value)
    {
        $this->setProperty('auditDate', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAuditDate()
    {
       return $this->getProperty('auditDate');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setExpires($value)
    {
        $this->setProperty('expires', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getExpires()
    {
       return $this->getProperty('expires');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDatePublished($value)
    {
        $this->setProperty('datePublished', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDatePublished()
    {
       return $this->getProperty('datePublished');
    }


}
