<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A math solver which is capable of solving a subset of mathematical problems.
* @see schema:MathSolver
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class MathSolver extends CreativeWork
{


    /**
        * A mathematical expression (e.g. 'x^2-3x=0') that may be solved for a specific
 * variable, simplified, or transformed. This can take many formats, e.g. LaTeX,
 * Ascii-Math, or math as you would write with a keyboard.
        * @param array|string|mixed $value
    * @return $this
    */
    public function mathExpression($value)
    {
        $this->setProperty('mathExpression', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
    * @return $this
    */
    public function setMathExpression($value)
    {
        $this->setProperty('mathExpression', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMathExpression()
    {
       return $this->getProperty('mathExpression');
    }


}
