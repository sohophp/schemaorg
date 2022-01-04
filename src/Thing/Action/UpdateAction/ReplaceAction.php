<?php
namespace Sohophp\SchemaOrg\Thing\Action\UpdateAction;

use Sohophp\SchemaOrg\Thing\Action\UpdateAction;
use Sohophp\SchemaOrg\Thing;

/**
* The act of editing a recipient by replacing an old object with a new object.
* @see http://schema.org/ReplaceAction
* @package Sohophp\SchemaOrg\Thing\Action\UpdateAction

*
*/
class ReplaceAction extends UpdateAction
{

    /**
    * A sub property of object. The object that is being replaced.
    * @param Thing|array|string $value
    * @return $this
    * @deprecated use setReplacee
    */
    public function replacee($value)
    {
        $this->setProperty('replacee', $value);
        return $this;
    }
   /**
    * @param Thing|array|string $value
    * @return $this
    */
    public function setReplacee($value)
    {
        $this->setProperty('replacee', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReplacee()
    {
       return $this->getProperty('replacee');
    }

    /**
    * A sub property of object. The object that replaces.
    * @param Thing|array|string $value
    * @return $this
    * @deprecated use setReplacer
    */
    public function replacer($value)
    {
        $this->setProperty('replacer', $value);
        return $this;
    }
   /**
    * @param Thing|array|string $value
    * @return $this
    */
    public function setReplacer($value)
    {
        $this->setProperty('replacer', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getReplacer()
    {
       return $this->getProperty('replacer');
    }


}
