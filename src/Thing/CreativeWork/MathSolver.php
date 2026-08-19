<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Action\SolveMathAction;

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
    * @param string|SolveMathAction|array $value
  * @return $this
  */
  public function mathExpression($value)
  {
  $this->setProperty('mathExpression', $value);
  return $this;
  }

  /**
  * @param string|SolveMathAction|array $value
  * @return $this
  */
  public function setMathExpression($value)
  {
  $this->setProperty('mathExpression', $value);
  return $this;
  }

  /**
  * @param string|SolveMathAction $value
  * @return $this
  */
  public function addMathExpression($value)
  {
  $current = $this->getProperty('mathExpression');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('mathExpression', $current);
  return $this;
  }

  /**
  * @return string|SolveMathAction|array
  */
  public function getMathExpression()
  {
  return $this->getProperty('mathExpression');
  }


}
