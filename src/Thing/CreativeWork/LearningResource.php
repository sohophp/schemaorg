<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* The LearningResource type can be used to indicate [[CreativeWork]]s (whether physical or digital) that have a particular and explicit orientation towards learning, education, skill acquisition, and other educational purposes.

[[LearningResource]] is expected to be used as an addition to a primary type such as [[Book]], [[VideoObject]], [[Product]] etc.

[[EducationEvent]] serves a similar purpose for event-like things (e.g. a [[Trip]]). A [[LearningResource]] may be created as a result of an [[EducationEvent]], for example by recording one.
* @see schema:LearningResource
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class LearningResource extends CreativeWork
{
   /**
        * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
        */
    protected $educationalUse = null;

   /**
        * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
        */
    protected $teaches = null;

   /**
        * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something such as earn an Educational Occupational Credential or understand a LearningResource.
        */
    protected $competencyRequired = null;

   /**
        * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
        */
    protected $learningResourceType = null;

   /**
        * An alignment to an established educational framework.

This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
        */
    protected $educationalAlignment = null;

   /**
        * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
        */
    protected $educationalLevel = null;

   /**
        * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
        */
    protected $assesses = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setEducationalUse($value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalUse()
    {
       return $this->getProperty('educationalUse');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setTeaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTeaches()
    {
       return $this->getProperty('teaches');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCompetencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCompetencyRequired()
    {
       return $this->getProperty('competencyRequired');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setLearningResourceType($value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getLearningResourceType()
    {
       return $this->getProperty('learningResourceType');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEducationalAlignment($value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalAlignment()
    {
       return $this->getProperty('educationalAlignment');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setEducationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalLevel()
    {
       return $this->getProperty('educationalLevel');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setAssesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssesses()
    {
       return $this->getProperty('assesses');
    }


}
