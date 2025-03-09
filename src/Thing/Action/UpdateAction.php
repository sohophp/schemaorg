<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
* The act of managing by changing/editing the state of the object.
* @see schema:UpdateAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class UpdateAction extends Action
{
   /**
        * A sub property of object. The collection target of the action.
        */
    protected $targetCollection = null;

   /**
        * A sub property of object. The collection target of the action.
        */
    protected $collection = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setTargetCollection($value)
    {
        $this->setProperty('targetCollection', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getTargetCollection()
    {
       return $this->getProperty('targetCollection');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setCollection($value)
    {
        $this->setProperty('collection', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCollection()
    {
       return $this->getProperty('collection');
    }


}
