<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;

/**
* An intangible item that describes an alignment between a learning resource and a node in an educational framework.
* @see http://schema.org/AlignmentObject
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class AlignmentObject extends Intangible
{

    /**
    * The description of a node in an established educational framework.
    * @param string $value
    * @return $this
    */
    public function targetDescription(?string $value)
    {
        $this->setProperty('targetDescription', $value);
        return $this;
    }

    /**
    * A category of alignment between the learning resource and the framework node. Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity', 'readingLevel', 'educationalSubject', and 'educationalLevel'.
    * @param string $value
    * @return $this
    */
    public function alignmentType(?string $value)
    {
        $this->setProperty('alignmentType', $value);
        return $this;
    }

    /**
    * The URL of a node in an established educational framework.
    * @param string $value
    * @return $this
    */
    public function targetUrl(?string $value)
    {
        $this->setProperty('targetUrl', $value);
        return $this;
    }

    /**
    * The name of a node in an established educational framework.
    * @param string $value
    * @return $this
    */
    public function targetName(?string $value)
    {
        $this->setProperty('targetName', $value);
        return $this;
    }

    /**
    * The framework to which the resource being described is aligned.
    * @param string $value
    * @return $this
    */
    public function educationalFramework(?string $value)
    {
        $this->setProperty('educationalFramework', $value);
        return $this;
    }


}

