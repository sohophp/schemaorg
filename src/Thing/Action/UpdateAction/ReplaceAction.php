<?php declare(strict_types=1);
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
    * @param Thing|array $value
    * @return $this
    */
    public function replacee(?Thing $value)
    {
        $this->setProperty('replacee', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setReplacee(?Thing $value)
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
    * @param Thing|array $value
    * @return $this
    */
    public function replacer(?Thing $value)
    {
        $this->setProperty('replacer', $value);
        return $this;
    }
   /**
    * @param Thing|array $value
    * @return $this
    */
    public function setReplacer(?Thing $value)
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


class_alias('Sohophp\\SchemaOrg\\Thing\\Action\\UpdateAction\\ReplaceAction','Thing\\ReplaceAction');

