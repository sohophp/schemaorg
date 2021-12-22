<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;
use Sohophp\SchemaOrg\Thing;

/**
* The act of managing by changing/editing the state of the object.
* @see http://schema.org/UpdateAction
* @package Sohophp\SchemaOrg\Thing\Action

*
*/
class UpdateAction extends Action
{

    /**
    * A sub property of object. The collection target of the action.
    * @param Thing|array $value
    * @return $this
    */
    public function collection(?Thing $value)
    {
        $this->setProperty('collection', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setCollection(?Thing $value)
    {
        $this->setProperty('collection', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getCollection()
    {
       return $this->getProperty('collection');
    }

    /**
    * A sub property of object. The collection target of the action.
    * @param Thing|array $value
    * @return $this
    */
    public function targetCollection(?Thing $value)
    {
        $this->setProperty('targetCollection', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setTargetCollection(?Thing $value)
    {
        $this->setProperty('targetCollection', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getTargetCollection()
    {
       return $this->getProperty('targetCollection');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\UpdateAction','Thing\\UpdateAction');

