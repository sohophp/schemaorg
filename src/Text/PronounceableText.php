<?php
namespace Sohophp\SchemaOrg\Text;

  use Sohophp\SchemaOrg\Text;
  use Sohophp\SchemaOrg\Thing\Intangible\Language;

/**
  * Data type: PronounceableText.
  * @see schema:PronounceableText
* @package Sohophp\SchemaOrg\Text
*/
class PronounceableText extends Text
{


  /**
      * Representation of a text [[textValue]] using the specified
 * [[speechToTextMarkup]]. For example the city name of Houston in IPA:
 * /ˈhjuːstən/.
    * @param string|array $value
  * @return $this
  */
  public function phoneticText($value)
  {
  $this->setProperty('phoneticText', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPhoneticText($value)
  {
  $this->setProperty('phoneticText', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPhoneticText($value)
  {
  $current = $this->getProperty('phoneticText');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('phoneticText', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPhoneticText()
  {
  return $this->getProperty('phoneticText');
  }


  /**
      * Text value being annotated.
    * @param string|array $value
  * @return $this
  */
  public function textValue($value)
  {
  $this->setProperty('textValue', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setTextValue($value)
  {
  $this->setProperty('textValue', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addTextValue($value)
  {
  $current = $this->getProperty('textValue');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('textValue', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getTextValue()
  {
  return $this->getProperty('textValue');
  }


  /**
      * Form of markup used. eg. [SSML](https://www.w3.org/TR/speech-synthesis11) or
 * [IPA](https://www.wikidata.org/wiki/Property:P898).
    * @param string|array $value
  * @return $this
  */
  public function speechToTextMarkup($value)
  {
  $this->setProperty('speechToTextMarkup', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setSpeechToTextMarkup($value)
  {
  $this->setProperty('speechToTextMarkup', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addSpeechToTextMarkup($value)
  {
  $current = $this->getProperty('speechToTextMarkup');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('speechToTextMarkup', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getSpeechToTextMarkup()
  {
  return $this->getProperty('speechToTextMarkup');
  }


  /**
      * The language of the content or performance or used in an action. Please use
 * one of the language codes from the [IETF BCP 47
 * standard](http://tools.ietf.org/html/bcp47). See also [[availableLanguage]].
    * @param string|Language|array $value
  * @return $this
  */
  public function inLanguage($value)
  {
  $this->setProperty('inLanguage', $value);
  return $this;
  }

  /**
  * @param string|Language|array $value
  * @return $this
  */
  public function setInLanguage($value)
  {
  $this->setProperty('inLanguage', $value);
  return $this;
  }

  /**
  * @param string|Language $value
  * @return $this
  */
  public function addInLanguage($value)
  {
  $current = $this->getProperty('inLanguage');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('inLanguage', $current);
  return $this;
  }

  /**
  * @return string|Language|array
  */
  public function getInLanguage()
  {
  return $this->getProperty('inLanguage');
  }


}
