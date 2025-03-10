<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An intangible item that describes an alignment between a learning resource
 * and a node in an educational framework.
* @see http://schema.org/AlignmentObject
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class AlignmentObject extends Intangible
{


    /**
        * The description of a node in an established educational framework.
        * @param string|array|mixed $value
    * @return $this
    */
    public function targetDescription($value)
    {
        $this->setProperty('targetDescription', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setTargetDescription($value)
    {
        $this->setProperty('targetDescription', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTargetDescription()
    {
       return $this->getProperty('targetDescription');
    }


    /**
        * A category of alignment between the learning resource and the framework node.
 * Recommended values include: 'assesses', 'teaches', 'requires',
 * 'textComplexity', 'readingLevel', 'educationalSubject', and
 * 'educationalLevel'.
        * @param string|array|mixed $value
    * @return $this
    */
    public function alignmentType($value)
    {
        $this->setProperty('alignmentType', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setAlignmentType($value)
    {
        $this->setProperty('alignmentType', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAlignmentType()
    {
       return $this->getProperty('alignmentType');
    }


    /**
        * The URL of a node in an established educational framework.
        * @param string|array|mixed $value
    * @return $this
    */
    public function targetUrl($value)
    {
        $this->setProperty('targetUrl', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setTargetUrl($value)
    {
        $this->setProperty('targetUrl', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTargetUrl()
    {
       return $this->getProperty('targetUrl');
    }


    /**
        * The name of a node in an established educational framework.
        * @param string|array|mixed $value
    * @return $this
    */
    public function targetName($value)
    {
        $this->setProperty('targetName', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setTargetName($value)
    {
        $this->setProperty('targetName', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTargetName()
    {
       return $this->getProperty('targetName');
    }


    /**
        * The framework to which the resource being described is aligned.
        * @param string|array|mixed $value
    * @return $this
    */
    public function educationalFramework($value)
    {
        $this->setProperty('educationalFramework', $value);
        return $this;
    }

    /**
    * @param string|array|mixed $value
    * @return $this
    */
    public function setEducationalFramework($value)
    {
        $this->setProperty('educationalFramework', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEducationalFramework()
    {
       return $this->getProperty('educationalFramework');
    }


}
