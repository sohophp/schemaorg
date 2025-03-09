<?php
namespace Sohophp\SchemaOrg\Thing\Action\UpdateAction;

use Sohophp\SchemaOrg\Thing\Action\UpdateAction;

/**
* The act of editing a recipient by replacing an old object with a new object.
* @see schema:ReplaceAction
* @package Sohophp\SchemaOrg\Thing\Action\UpdateAction
*/
class ReplaceAction extends UpdateAction
{
   /**
        * A sub property of object. The object that replaces.
        */
    protected $replacer = null;

   /**
        * A sub property of object. The object that is being replaced.
        */
    protected $replacee = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setReplacer($value)
    {
        $this->setProperty('replacer', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReplacer()
    {
       return $this->getProperty('replacer');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setReplacee($value)
    {
        $this->setProperty('replacee', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getReplacee()
    {
       return $this->getProperty('replacee');
    }


}
