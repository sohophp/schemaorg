<?php
namespace Sohophp\SchemaOrg\Thing\Action\AssessAction;

use Sohophp\SchemaOrg\Thing\Action\AssessAction;
use Sohophp\SchemaOrg\Thing;

/**
* The act of expressing a preference from a set of options or a large or
 * unbounded set of choices/options.
* @see http://schema.org/ChooseAction
* @package Sohophp\SchemaOrg\Thing\Action\AssessAction
*/
class ChooseAction extends AssessAction
{


    /**
        * A sub property of object. The options subject to this action.
        * @param Thing|string|array|mixed $value
    * @return $this
    */
    public function actionOption($value)
    {
        $this->setProperty('actionOption', $value);
        return $this;
    }

    /**
    * @param Thing|string|array|mixed $value
    * @return $this
    */
    public function setActionOption($value)
    {
        $this->setProperty('actionOption', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActionOption()
    {
       return $this->getProperty('actionOption');
    }


    /**
        * A sub property of object. The options subject to this action.
        * @param string|Thing|array|mixed $value
    * @return $this
    */
    public function option($value)
    {
        $this->setProperty('option', $value);
        return $this;
    }

    /**
    * @param string|Thing|array|mixed $value
    * @return $this
    */
    public function setOption($value)
    {
        $this->setProperty('option', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOption()
    {
       return $this->getProperty('option');
    }


}
