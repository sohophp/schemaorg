<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

/**
* A scholarly article in the medical domain.
* @see http://schema.org/MedicalScholarlyArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle
*/
class MedicalScholarlyArticle extends ScholarlyArticle
{


    /**
        * The type of the medical article, taken from the US NLM MeSH publication type
 * catalog. See also [MeSH
 * documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
        * @param string|array|mixed $value
    * @return $this
    */
    public function publicationType($value)
    {
        $this->setProperty('publicationType', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setPublicationType($value)
    {
        $this->setProperty('publicationType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getPublicationType()
    {
       return $this->getProperty('publicationType');
    }


}
