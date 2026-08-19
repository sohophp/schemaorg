<?php
namespace Sohophp\SchemaOrg\Thing\Intangible;

  use Sohophp\SchemaOrg\Thing\Intangible;
  use Sohophp\SchemaOrg\Thing;

/**
  * A Property value specification.
  * @see schema:PropertyValueSpecification
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class PropertyValueSpecification extends Intangible
{


  /**
      * Specifies the allowed range for number of characters in a literal value.
    * @param mixed $value
  * @return $this
  */
  public function valueMaxLength($value)
  {
  $this->setProperty('valueMaxLength', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setValueMaxLength($value)
  {
  $this->setProperty('valueMaxLength', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addValueMaxLength($value)
  {
  $current = $this->getProperty('valueMaxLength');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('valueMaxLength', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getValueMaxLength()
  {
  return $this->getProperty('valueMaxLength');
  }


  /**
      * The stepValue attribute indicates the granularity that is expected (and
 * required) of the value in a PropertyValueSpecification.
    * @param mixed $value
  * @return $this
  */
  public function stepValue($value)
  {
  $this->setProperty('stepValue', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setStepValue($value)
  {
  $this->setProperty('stepValue', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addStepValue($value)
  {
  $current = $this->getProperty('stepValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('stepValue', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getStepValue()
  {
  return $this->getProperty('stepValue');
  }


  /**
      * Indicates the name of the PropertyValueSpecification to be used in URL
 * templates and form encoding in a manner analogous to HTML's input@name.
    * @param string|array $value
  * @return $this
  */
  public function valueName($value)
  {
  $this->setProperty('valueName', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setValueName($value)
  {
  $this->setProperty('valueName', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addValueName($value)
  {
  $current = $this->getProperty('valueName');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('valueName', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getValueName()
  {
  return $this->getProperty('valueName');
  }


  /**
      * Whether or not a property is mutable.  Default is false. Specifying this for
 * a property that also has a value makes it act similar to a "hidden" input in
 * an HTML form.
    * @param bool|array $value
  * @return $this
  */
  public function readonlyValue($value)
  {
  $this->setProperty('readonlyValue', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setReadonlyValue($value)
  {
  $this->setProperty('readonlyValue', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addReadonlyValue($value)
  {
  $current = $this->getProperty('readonlyValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('readonlyValue', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getReadonlyValue()
  {
  return $this->getProperty('readonlyValue');
  }


  /**
      * Specifies the minimum allowed range for number of characters in a literal
 * value.
    * @param mixed $value
  * @return $this
  */
  public function valueMinLength($value)
  {
  $this->setProperty('valueMinLength', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setValueMinLength($value)
  {
  $this->setProperty('valueMinLength', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addValueMinLength($value)
  {
  $current = $this->getProperty('valueMinLength');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('valueMinLength', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getValueMinLength()
  {
  return $this->getProperty('valueMinLength');
  }


  /**
      * Whether the property must be filled in to complete the action.  Default is
 * false.
    * @param bool|array $value
  * @return $this
  */
  public function valueRequired($value)
  {
  $this->setProperty('valueRequired', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setValueRequired($value)
  {
  $this->setProperty('valueRequired', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addValueRequired($value)
  {
  $current = $this->getProperty('valueRequired');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('valueRequired', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getValueRequired()
  {
  return $this->getProperty('valueRequired');
  }


  /**
      * Whether multiple values are allowed for the property.  Default is false.
    * @param bool|array $value
  * @return $this
  */
  public function multipleValues($value)
  {
  $this->setProperty('multipleValues', $value);
  return $this;
  }

  /**
  * @param bool|array $value
  * @return $this
  */
  public function setMultipleValues($value)
  {
  $this->setProperty('multipleValues', $value);
  return $this;
  }

  /**
  * @param bool $value
  * @return $this
  */
  public function addMultipleValues($value)
  {
  $current = $this->getProperty('multipleValues');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('multipleValues', $current);
  return $this;
  }

  /**
  * @return bool|array
  */
  public function getMultipleValues()
  {
  return $this->getProperty('multipleValues');
  }


  /**
      * The default value of the input.  For properties that expect a literal, the
 * default is a literal value, for properties that expect an object, it's an ID
 * reference to one of the current values.
    * @param string|Thing|array $value
  * @return $this
  */
  public function defaultValue($value)
  {
  $this->setProperty('defaultValue', $value);
  return $this;
  }

  /**
  * @param string|Thing|array $value
  * @return $this
  */
  public function setDefaultValue($value)
  {
  $this->setProperty('defaultValue', $value);
  return $this;
  }

  /**
  * @param string|Thing $value
  * @return $this
  */
  public function addDefaultValue($value)
  {
  $current = $this->getProperty('defaultValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('defaultValue', $current);
  return $this;
  }

  /**
  * @return string|Thing|array
  */
  public function getDefaultValue()
  {
  return $this->getProperty('defaultValue');
  }


  /**
      * Specifies a regular expression for testing literal values according to the
 * HTML spec.
    * @param string|array $value
  * @return $this
  */
  public function valuePattern($value)
  {
  $this->setProperty('valuePattern', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setValuePattern($value)
  {
  $this->setProperty('valuePattern', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addValuePattern($value)
  {
  $current = $this->getProperty('valuePattern');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('valuePattern', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getValuePattern()
  {
  return $this->getProperty('valuePattern');
  }


  /**
      * The upper value of some characteristic or property.
    * @param mixed $value
  * @return $this
  */
  public function maxValue($value)
  {
  $this->setProperty('maxValue', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setMaxValue($value)
  {
  $this->setProperty('maxValue', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addMaxValue($value)
  {
  $current = $this->getProperty('maxValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('maxValue', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getMaxValue()
  {
  return $this->getProperty('maxValue');
  }


  /**
      * The lower value of some characteristic or property.
    * @param mixed $value
  * @return $this
  */
  public function minValue($value)
  {
  $this->setProperty('minValue', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setMinValue($value)
  {
  $this->setProperty('minValue', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addMinValue($value)
  {
  $current = $this->getProperty('minValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('minValue', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getMinValue()
  {
  return $this->getProperty('minValue');
  }


}
