<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\Intangible\DefinedTerm;
use Sohophp\SchemaOrg\Thing\Intangible\AlignmentObject;

/**
 * The LearningResource type can be used to indicate [[CreativeWork]]s (whether physical or digital) that have a particular and explicit orientation towards learning, education, skill acquisition, and other educational purposes. [[LearningResource]] is expected to be used as an addition to a primary type such as [[Book]], [[VideoObject]], [[Product]] etc. [[EducationEvent]] serves a similar purpose for event-like things (e.g. a [[Trip]]). A [[LearningResource]] may be created as a result of an [[EducationEvent]], for example by recording one.
 * @see https://schema.org/LearningResource
 * @package Sohophp\SchemaOrg\Thing\CreativeWork
 */
class LearningResource extends CreativeWork
{
    /**
     * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
     * @see https://schema.org/educationalUse
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function educationalUse($value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setEducationalUse($value)
    {
        $this->setProperty('educationalUse', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addEducationalUse($value)
    {
        $current = $this->getProperty('educationalUse');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalUse', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getEducationalUse()
    {
        return $this->getProperty('educationalUse');
    }
    /**
     * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
     * @see https://schema.org/learningResourceType
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function learningResourceType($value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setLearningResourceType($value)
    {
        $this->setProperty('learningResourceType', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addLearningResourceType($value)
    {
        $current = $this->getProperty('learningResourceType');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('learningResourceType', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getLearningResourceType()
    {
        return $this->getProperty('learningResourceType');
    }
    /**
     * Knowledge, skill, ability or personal attribute that must be demonstrated by a person or other entity in order to do something such as earn an Educational Occupational Credential or understand a LearningResource.
     * @see https://schema.org/competencyRequired
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function competencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setCompetencyRequired($value)
    {
        $this->setProperty('competencyRequired', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addCompetencyRequired($value)
    {
        $current = $this->getProperty('competencyRequired');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('competencyRequired', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getCompetencyRequired()
    {
        return $this->getProperty('competencyRequired');
    }
    /**
     * An alignment to an established educational framework. This property should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
     * @see https://schema.org/educationalAlignment
     * @param AlignmentObject|array $value
     * @return $this
     */
    public function educationalAlignment($value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
     * @param AlignmentObject|array $value
     * @return $this
     */
    public function setEducationalAlignment($value)
    {
        $this->setProperty('educationalAlignment', $value);
        return $this;
    }

    /**
     * @param AlignmentObject $value
     * @return $this
     */
    public function addEducationalAlignment($value)
    {
        $current = $this->getProperty('educationalAlignment');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalAlignment', $current);
        return $this;
    }

    /**
     * @return AlignmentObject|array
     */
    public function getEducationalAlignment()
    {
        return $this->getProperty('educationalAlignment');
    }
    /**
     * The item being described is intended to assess the competency or learning outcome defined by the referenced term.
     * @see https://schema.org/assesses
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function assesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setAssesses($value)
    {
        $this->setProperty('assesses', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addAssesses($value)
    {
        $current = $this->getProperty('assesses');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('assesses', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getAssesses()
    {
        return $this->getProperty('assesses');
    }
    /**
     * The item being described is intended to help a person learn the competency or learning outcome defined by the referenced term.
     * @see https://schema.org/teaches
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function teaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string|array $value
     * @return $this
     */
    public function setTeaches($value)
    {
        $this->setProperty('teaches', $value);
        return $this;
    }

    /**
     * @param DefinedTerm|string $value
     * @return $this
     */
    public function addTeaches($value)
    {
        $current = $this->getProperty('teaches');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('teaches', $current);
        return $this;
    }

    /**
     * @return DefinedTerm|string|array
     */
    public function getTeaches()
    {
        return $this->getProperty('teaches');
    }
    /**
     * The level in terms of progression through an educational or training context. Examples of educational levels include 'beginner', 'intermediate' or 'advanced', and formal sets of level indicators.
     * @see https://schema.org/educationalLevel
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function educationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm|array $value
     * @return $this
     */
    public function setEducationalLevel($value)
    {
        $this->setProperty('educationalLevel', $value);
        return $this;
    }

    /**
     * @param string|DefinedTerm $value
     * @return $this
     */
    public function addEducationalLevel($value)
    {
        $current = $this->getProperty('educationalLevel');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('educationalLevel', $current);
        return $this;
    }

    /**
     * @return string|DefinedTerm|array
     */
    public function getEducationalLevel()
    {
        return $this->getProperty('educationalLevel');
    }
}
