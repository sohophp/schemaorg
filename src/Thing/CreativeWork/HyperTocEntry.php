<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A HyperToEntry is an item within a [[HyperToc]], which represents a hypertext table of contents for complex media objects, such as [[VideoObject]], [[AudioObject]]. The media object itself is indicated using [[associatedMedia]]. Each section of interest within that content can be described with a [[HyperTocEntry]], with associated [[startOffset]] and [[endOffset]]. When several entries are all from the same file, [[associatedMedia]] is used on the overarching [[HyperTocEntry]]; if the content has been split into multiple files, they can be referenced using [[associatedMedia]] on each [[HyperTocEntry]].
* @see schema:HyperTocEntry
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class HyperTocEntry extends CreativeWork
{
   /**
        * Text of an utterances (spoken words, lyrics etc.) that occurs at a certain section of a media object, represented as a [[HyperTocEntry]].
        */
    protected $utterances = null;

   /**
        * A media object that encodes this CreativeWork. This property is a synonym for encoding.
        */
    protected $associatedMedia = null;

   /**
        * A [[HyperTocEntry]] can have a [[tocContinuation]] indicated, which is another [[HyperTocEntry]] that would be the default next item to play or render.
        */
    protected $tocContinuation = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setUtterances($value)
    {
        $this->setProperty('utterances', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUtterances()
    {
       return $this->getProperty('utterances');
    }

    /**
    * @param array|string $value
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
    * @param array|string $value
    * @return $this
    */
    public function setTocContinuation($value)
    {
        $this->setProperty('tocContinuation', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTocContinuation()
    {
       return $this->getProperty('tocContinuation');
    }


}
