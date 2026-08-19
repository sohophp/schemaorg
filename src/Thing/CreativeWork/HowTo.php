<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\MonetaryAmount;
  use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem\HowToSupply;
  use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToStep;
  use Sohophp\SchemaOrg\Thing\CreativeWork\HowToSection;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\QuantitativeValue;
  use Sohophp\SchemaOrg\Thing\Intangible\ItemList;
  use Sohophp\SchemaOrg\Thing\Intangible\ListItem\HowToItem\HowToTool;
  use Sohophp\SchemaOrg\Quantity\Duration;

/**
  * Instructions that explain how to achieve a result by performing a sequence of
 * steps.
  * @see schema:HowTo
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class HowTo extends CreativeWork
{


  /**
      * The estimated cost of the supply or supplies consumed when performing
 * instructions.
    * @param string|MonetaryAmount|array $value
  * @return $this
  */
  public function estimatedCost($value)
  {
  $this->setProperty('estimatedCost', $value);
  return $this;
  }

  /**
  * @param string|MonetaryAmount|array $value
  * @return $this
  */
  public function setEstimatedCost($value)
  {
  $this->setProperty('estimatedCost', $value);
  return $this;
  }

  /**
  * @param string|MonetaryAmount $value
  * @return $this
  */
  public function addEstimatedCost($value)
  {
  $current = $this->getProperty('estimatedCost');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('estimatedCost', $current);
  return $this;
  }

  /**
  * @return string|MonetaryAmount|array
  */
  public function getEstimatedCost()
  {
  return $this->getProperty('estimatedCost');
  }


  /**
      * A sub-property of instrument. A supply consumed when performing instructions
 * or a direction.
    * @param string|HowToSupply|array $value
  * @return $this
  */
  public function supply($value)
  {
  $this->setProperty('supply', $value);
  return $this;
  }

  /**
  * @param string|HowToSupply|array $value
  * @return $this
  */
  public function setSupply($value)
  {
  $this->setProperty('supply', $value);
  return $this;
  }

  /**
  * @param string|HowToSupply $value
  * @return $this
  */
  public function addSupply($value)
  {
  $current = $this->getProperty('supply');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('supply', $current);
  return $this;
  }

  /**
  * @return string|HowToSupply|array
  */
  public function getSupply()
  {
  return $this->getProperty('supply');
  }


  /**
      * A single step item (as HowToStep, text, document, video, etc.) or a
 * HowToSection.
    * @param string|CreativeWork|HowToStep|HowToSection|array $value
  * @return $this
  */
  public function step($value)
  {
  $this->setProperty('step', $value);
  return $this;
  }

  /**
  * @param string|CreativeWork|HowToStep|HowToSection|array $value
  * @return $this
  */
  public function setStep($value)
  {
  $this->setProperty('step', $value);
  return $this;
  }

  /**
  * @param string|CreativeWork|HowToStep|HowToSection $value
  * @return $this
  */
  public function addStep($value)
  {
  $current = $this->getProperty('step');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('step', $current);
  return $this;
  }

  /**
  * @return string|CreativeWork|HowToStep|HowToSection|array
  */
  public function getStep()
  {
  return $this->getProperty('step');
  }


  /**
      * The quantity that results by performing instructions. For example, a paper
 * airplane, 10 personalized candles.
    * @param string|QuantitativeValue|array $value
  * @return $this
  */
  public function yield($value)
  {
  $this->setProperty('yield', $value);
  return $this;
  }

  /**
  * @param string|QuantitativeValue|array $value
  * @return $this
  */
  public function setYield($value)
  {
  $this->setProperty('yield', $value);
  return $this;
  }

  /**
  * @param string|QuantitativeValue $value
  * @return $this
  */
  public function addYield($value)
  {
  $current = $this->getProperty('yield');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('yield', $current);
  return $this;
  }

  /**
  * @return string|QuantitativeValue|array
  */
  public function getYield()
  {
  return $this->getProperty('yield');
  }


  /**
      * A single step item (as HowToStep, text, document, video, etc.) or a
 * HowToSection (originally misnamed 'steps'; 'step' is preferred).
    * @param CreativeWork|ItemList|string|array $value
  * @return $this
  */
  public function steps($value)
  {
  $this->setProperty('steps', $value);
  return $this;
  }

  /**
  * @param CreativeWork|ItemList|string|array $value
  * @return $this
  */
  public function setSteps($value)
  {
  $this->setProperty('steps', $value);
  return $this;
  }

  /**
  * @param CreativeWork|ItemList|string $value
  * @return $this
  */
  public function addSteps($value)
  {
  $current = $this->getProperty('steps');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('steps', $current);
  return $this;
  }

  /**
  * @return CreativeWork|ItemList|string|array
  */
  public function getSteps()
  {
  return $this->getProperty('steps');
  }


  /**
      * A sub property of instrument. An object used (but not consumed) when
 * performing instructions or a direction.
    * @param HowToTool|string|array $value
  * @return $this
  */
  public function tool($value)
  {
  $this->setProperty('tool', $value);
  return $this;
  }

  /**
  * @param HowToTool|string|array $value
  * @return $this
  */
  public function setTool($value)
  {
  $this->setProperty('tool', $value);
  return $this;
  }

  /**
  * @param HowToTool|string $value
  * @return $this
  */
  public function addTool($value)
  {
  $current = $this->getProperty('tool');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('tool', $current);
  return $this;
  }

  /**
  * @return HowToTool|string|array
  */
  public function getTool()
  {
  return $this->getProperty('tool');
  }


  /**
      * The total time required to perform instructions or a direction (including
 * time to prepare the supplies), in [ISO 8601 duration
 * format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param Duration|array $value
  * @return $this
  */
  public function totalTime($value)
  {
  $this->setProperty('totalTime', $value);
  return $this;
  }

  /**
  * @param Duration|array $value
  * @return $this
  */
  public function setTotalTime($value)
  {
  $this->setProperty('totalTime', $value);
  return $this;
  }

  /**
  * @param Duration $value
  * @return $this
  */
  public function addTotalTime($value)
  {
  $current = $this->getProperty('totalTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('totalTime', $current);
  return $this;
  }

  /**
  * @return Duration|array
  */
  public function getTotalTime()
  {
  return $this->getProperty('totalTime');
  }


  /**
      * The length of time it takes to perform instructions or a direction (not
 * including time to prepare the supplies), in [ISO 8601 duration
 * format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param Duration|array $value
  * @return $this
  */
  public function performTime($value)
  {
  $this->setProperty('performTime', $value);
  return $this;
  }

  /**
  * @param Duration|array $value
  * @return $this
  */
  public function setPerformTime($value)
  {
  $this->setProperty('performTime', $value);
  return $this;
  }

  /**
  * @param Duration $value
  * @return $this
  */
  public function addPerformTime($value)
  {
  $current = $this->getProperty('performTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('performTime', $current);
  return $this;
  }

  /**
  * @return Duration|array
  */
  public function getPerformTime()
  {
  return $this->getProperty('performTime');
  }


  /**
      * The length of time it takes to prepare the items to be used in instructions
 * or a direction, in [ISO 8601 duration
 * format](http://en.wikipedia.org/wiki/ISO_8601).
    * @param Duration|array $value
  * @return $this
  */
  public function prepTime($value)
  {
  $this->setProperty('prepTime', $value);
  return $this;
  }

  /**
  * @param Duration|array $value
  * @return $this
  */
  public function setPrepTime($value)
  {
  $this->setProperty('prepTime', $value);
  return $this;
  }

  /**
  * @param Duration $value
  * @return $this
  */
  public function addPrepTime($value)
  {
  $current = $this->getProperty('prepTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('prepTime', $current);
  return $this;
  }

  /**
  * @return Duration|array
  */
  public function getPrepTime()
  {
  return $this->getProperty('prepTime');
  }


}
