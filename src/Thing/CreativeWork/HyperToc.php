<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A HyperToc represents a hypertext table of contents for complex media
 * objects, such as [[VideoObject]], [[AudioObject]]. Items in the table of
 * contents are indicated using the [[tocEntry]] property, and typed
 * [[HyperTocEntry]]. For cases where the same larger work is split into
 * multiple files, [[associatedMedia]] can be used on individual
 * [[HyperTocEntry]] items.
* @see schema:HyperToc
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class HyperToc extends CreativeWork
{


    /**
        * A media object that encodes this CreativeWork. This property is a synonym for
 * encoding.
        * @param array|string|mixed $value
    * @return $this
    */
    public function associatedMedia($value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setAssociatedMedia($value)
    {
        $this->setProperty('associatedMedia', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getAssociatedMedia()
    {
       return $this->getProperty('associatedMedia');
    }


    /**
        * Indicates a [[HyperTocEntry]] in a [[HyperToc]].
        * @param array|string|mixed $value
    * @return $this
    */
    public function tocEntry($value)
    {
        $this->setProperty('tocEntry', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setTocEntry($value)
    {
        $this->setProperty('tocEntry', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTocEntry()
    {
       return $this->getProperty('tocEntry');
    }


}
