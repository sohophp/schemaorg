<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\WebContent;

use Sohophp\SchemaOrg\Thing\CreativeWork\WebContent;

/**
* [[HealthTopicContent]] is [[WebContent]] that is about some aspect of a health topic, e.g. a condition, its symptoms or treatments. Such content may be comprised of several parts or sections and use different types of media. Multiple instances of [[WebContent]] (and hence [[HealthTopicContent]]) can be related using [[hasPart]] / [[isPartOf]] where there is some kind of content hierarchy, and their content described with [[about]] and [[mentions]] e.g. building upon the existing [[MedicalCondition]] vocabulary.
  
* @see schema:HealthTopicContent
* @package Sohophp\SchemaOrg\Thing\CreativeWork\WebContent
*/
class HealthTopicContent extends WebContent
{
   /**
        * Indicates the aspect or aspects specifically addressed in some [[HealthTopicContent]]. For example, that the content is an overview, or that it talks about treatment, self-care, treatments or their side-effects.
        */
    protected $hasHealthAspect = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setHasHealthAspect($value)
    {
        $this->setProperty('hasHealthAspect', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getHasHealthAspect()
    {
       return $this->getProperty('hasHealthAspect');
    }


}
