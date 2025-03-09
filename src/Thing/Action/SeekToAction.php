<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
* This is the [[Action]] of navigating to a specific [[startOffset]] timestamp within a [[VideoObject]], typically represented with a URL template structure.
* @see schema:SeekToAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class SeekToAction extends Action
{
   /**
        * The start time of the clip expressed as the number of seconds from the beginning of the work.
        */
    protected $startOffset = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setStartOffset($value)
    {
        $this->setProperty('startOffset', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getStartOffset()
    {
       return $this->getProperty('startOffset');
    }


}
