<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle;

/**
* A scholarly article in the medical domain.
* @see schema:MedicalScholarlyArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article\ScholarlyArticle
*/
class MedicalScholarlyArticle extends ScholarlyArticle
{
   /**
        * The type of the medical article, taken from the US NLM MeSH publication type catalog. See also [MeSH documentation](http://www.nlm.nih.gov/mesh/pubtypes.html).
        */
    protected $publicationType = null;


    /**
    * @param array|string $value
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
