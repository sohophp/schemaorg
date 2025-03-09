<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A collection of items, e.g. creative works or products.
* @see schema:Collection
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Collection extends CreativeWork
{
   /**
        * The number of items in the [[Collection]].
        */
    protected $collectionSize = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setCollectionSize($value)
    {
        $this->setProperty('collectionSize', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCollectionSize()
    {
       return $this->getProperty('collectionSize');
    }


}
