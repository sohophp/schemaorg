<?php
namespace Sohophp\SchemaOrg\Thing\Action;

use Sohophp\SchemaOrg\Thing\Action;

/**
* The act of searching for an object.
 * 
 * Related actions:
 * 
 * * [[FindAction]]: SearchAction generally leads to a FindAction, but not
 * necessarily.
* @see schema:SearchAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class SearchAction extends Action
{


    /**
        * A sub property of instrument. The query used on this action.
        * @param array|string|mixed $value
    * @return $this
    */
    public function query($value)
    {
        $this->setProperty('query', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setQuery($value)
    {
        $this->setProperty('query', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getQuery()
    {
       return $this->getProperty('query');
    }


}
