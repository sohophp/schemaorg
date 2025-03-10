<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* The LearningResource type can be used to indicate [[CreativeWork]]s (whether
 * physical or digital) that have a particular and explicit orientation towards
 * learning, education, skill acquisition, and other educational purposes.
 * 
 * [[LearningResource]] is expected to be used as an addition to a primary type
 * such as [[Book]], [[VideoObject]], [[Product]] etc.
 * 
 * [[EducationEvent]] serves a similar purpose for event-like things (e.g. a
 * [[Trip]]). A [[LearningResource]] may be created as a result of an
 * [[EducationEvent]], for example by recording one.
* @see schema:LearningResource
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class LearningResource extends CreativeWork
{


    /**
        * The purpose of a work in the context of education; for example, 'assignment',
 * 'group work'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationalUse($value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The item being described is intended to help a person learn the competency or
 * learning outcome defined by the referenced term.
        * @param array|string|mixed $value
    * @return $this
    */
    public function teaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * Knowledge, skill, ability or personal attribute that must be demonstrated by
 * a person or other entity in order to do something such as earn an Educational
 * Occupational Credential or understand a LearningResource.
        * @param array|string|mixed $value
    * @return $this
    */
    public function competencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The predominant type or kind characterizing the learning resource. For
 * example, 'presentation', 'handout'.
        * @param array|string|mixed $value
    * @return $this
    */
    public function learningResourceType($value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * An alignment to an established educational framework.
 * 
 * This property should not be used where the nature of the alignment can be
 * described using a simple property, for example to express that a resource
 * [[teaches]] or [[assesses]] a competency.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationalAlignment($value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The level in terms of progression through an educational or training context.
 * Examples of educational levels include 'beginner', 'intermediate' or
 * 'advanced', and formal sets of level indicators.
        * @param array|string|mixed $value
    * @return $this
    */
    public function educationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
        * The item being described is intended to assess the competency or learning
 * outcome defined by the referenced term.
        * @param array|string|mixed $value
    * @return $this
    */
    public function assesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
