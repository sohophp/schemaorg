<?php
namespace Sohophp\SchemaOrg\Thing\Intangible\ItemList;

use Sohophp\SchemaOrg\Thing\Intangible\ItemList;

/**
* A sub-grouping of steps in the instructions for how to achieve a result (e.g. steps for making a pie crust within a pie recipe).
* @see schema:HowToSection
* @package Sohophp\SchemaOrg\Thing\Intangible\ItemList
*/
class HowToSection extends ItemList
{
   /**
        * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection (originally misnamed 'steps'; 'step' is preferred).
        */
    protected $steps = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setSteps($value)
    {
        $this->setProperty('steps', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getSteps()
    {
       return $this->getProperty('steps');
    }


}
