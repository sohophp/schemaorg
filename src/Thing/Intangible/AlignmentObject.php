<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An intangible item that describes an alignment between a learning resource and a node in an educational framework.

Should not be used where the nature of the alignment can be described using a simple property, for example to express that a resource [[teaches]] or [[assesses]] a competency.
* @see schema:AlignmentObject
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class AlignmentObject extends Intangible
{
   /**
        * The description of a node in an established educational framework.
        */
    protected $targetDescription = null;

   /**
        * The URL of a node in an established educational framework.
        */
    protected $targetUrl = null;

   /**
        * The name of a node in an established educational framework.
        */
    protected $targetName = null;

   /**
        * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
        */
    protected $alignmentType = null;

   /**
        * The framework to which the resource being described is aligned.
        */
    protected $educationalFramework = null;


    /**
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
    * @param array|string $value
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
