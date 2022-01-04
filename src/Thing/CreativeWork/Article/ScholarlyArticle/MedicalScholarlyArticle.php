<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

/**
* A scholarly article in the medical domain.
* @see http://schema.org/MedicalScholarlyArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle

*
*/
class MedicalScholarlyArticle extends ScholarlyArticle
{

    /**
    * The type of the medical article, taken from the US NLM MeSH publication type catalog. See also <a href="http://www.nlm.nih.gov/mesh/pubtypes.html">MeSH documentation</a>.
    * @param string|array $value
    * @return $this
    * @deprecated use setPublicationType
    */
    public function publicationType($value)
    {
        $this->setProperty('publicationType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPublicationType($value)
    {
        $this->setProperty('publicationType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getPublicationType()
    {
       return $this->getProperty('publicationType');
    }


}
