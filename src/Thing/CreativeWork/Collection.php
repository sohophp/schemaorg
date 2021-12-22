<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A created collection of Creative Works or other artefacts.
* @see http://schema.org/Collection
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Collection extends CreativeWork
{

    /**
    * The number of items in the <a class="localLink" href="http://schema.org/Collection">Collection</a>.
    * @param int|array $value
    * @return $this
    */
    public function collectionSize(?int $value)
    {
        $this->setProperty('collectionSize', $value);
        return $this;
    }
   /**
    * @param int|array $value
    * @return $this
    */
    public function setCollectionSize(?int $value)
    {
        $this->setProperty('collectionSize', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCollectionSize()
    {
       return $this->getProperty('collectionSize');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Collection','Thing\\Collection');

