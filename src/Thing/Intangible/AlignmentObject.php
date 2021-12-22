<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An intangible item that describes an alignment between a learning resource and a node in an educational framework.
* @see http://schema.org/AlignmentObject
* @package Sohophp\SchemaOrg\Thing\Intangible

*
*/
class AlignmentObject extends Intangible
{

    /**
    * The description of a node in an established educational framework.
    * @param string|array $value
    * @return $this
    */
    public function targetDescription(?string $value)
    {
        $this->setProperty('targetDescription', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTargetDescription(?string $value)
    {
        $this->setProperty('targetDescription', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTargetDescription()
    {
       return $this->getProperty('targetDescription');
    }

    /**
    * A category of alignment between the learning resource and the framework node. Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity', 'readingLevel', 'educationalSubject', and 'educationalLevel'.
    * @param string|array $value
    * @return $this
    */
    public function alignmentType(?string $value)
    {
        $this->setProperty('alignmentType', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setAlignmentType(?string $value)
    {
        $this->setProperty('alignmentType', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAlignmentType()
    {
       return $this->getProperty('alignmentType');
    }

    /**
    * The URL of a node in an established educational framework.
    * @param string|array $value
    * @return $this
    */
    public function targetUrl(?string $value)
    {
        $this->setProperty('targetUrl', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTargetUrl(?string $value)
    {
        $this->setProperty('targetUrl', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTargetUrl()
    {
       return $this->getProperty('targetUrl');
    }

    /**
    * The name of a node in an established educational framework.
    * @param string|array $value
    * @return $this
    */
    public function targetName(?string $value)
    {
        $this->setProperty('targetName', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setTargetName(?string $value)
    {
        $this->setProperty('targetName', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTargetName()
    {
       return $this->getProperty('targetName');
    }

    /**
    * The framework to which the resource being described is aligned.
    * @param string|array $value
    * @return $this
    */
    public function educationalFramework(?string $value)
    {
        $this->setProperty('educationalFramework', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setEducationalFramework(?string $value)
    {
        $this->setProperty('educationalFramework', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getEducationalFramework()
    {
       return $this->getProperty('educationalFramework');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Intangible\\AlignmentObject','Thing\\AlignmentObject');

