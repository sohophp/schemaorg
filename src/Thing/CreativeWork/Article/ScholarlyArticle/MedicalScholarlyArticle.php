<?php declare(strict_types=1);
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
    */
    public function publicationType(?string $value)
    {
        $this->setProperty('publicationType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setPublicationType(?string $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Article\\ScholarlyArticle\\MedicalScholarlyArticle','Thing\\MedicalScholarlyArticle');

