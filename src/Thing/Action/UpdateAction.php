<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing;

/**
* The act of managing by changing/editing the state of the object.
* @see http://schema.org/UpdateAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class UpdateAction extends Action
{


    /**
        * A sub property of object. The collection target of the action.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function collection($value)
    {
        $this->setProperty('collection', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
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


    /**
        * A sub property of object. The collection target of the action.
        * @param Thing|array|string|mixed $value
    * @return $this
    */
    public function targetCollection($value)
    {
        $this->setProperty('targetCollection', $value);
        return $this;
    }

    /**
    * @param Thing|array|string|mixed $value
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


}
