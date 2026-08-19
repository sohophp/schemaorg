<?php
namespace Sohophp\SchemaOrg\Thing\Action\InteractAction;

  use Sohophp\SchemaOrg\Thing\Action\InteractAction;
  use Sohophp\SchemaOrg\Thing\Intangible\Language;
  use Sohophp\SchemaOrg\Thing;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\Intangible\StructuredValue\ContactPoint;
  use Sohophp\SchemaOrg\Thing\Intangible\Audience;

/**
  * The act of conveying information to another person via a communication medium
 * (instrument) such as speech, email, or telephone conversation.
  * @see schema:CommunicateAction
* @package Sohophp\SchemaOrg\Thing\Action\InteractAction
*/
class CommunicateAction extends InteractAction
{


  /**
      * A sub property of instrument. The language used on this action.
    * @param Language|array $value
  * @return $this
  */
  public function language($value)
  {
  $this->setProperty('language', $value);
  return $this;
  }

  /**
  * @param Language|array $value
  * @return $this
  */
  public function setLanguage($value)
  {
  $this->setProperty('language', $value);
  return $this;
  }

  /**
  * @param Language $value
  * @return $this
  */
  public function addLanguage($value)
  {
  $current = $this->getProperty('language');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('language', $current);
  return $this;
  }

  /**
  * @return Language|array
  */
  public function getLanguage()
  {
  return $this->getProperty('language');
  }


  /**
      * The subject matter of an object.
    * @param Thing|array $value
  * @return $this
  */
  public function about($value)
  {
  $this->setProperty('about', $value);
  return $this;
  }

  /**
  * @param Thing|array $value
  * @return $this
  */
  public function setAbout($value)
  {
  $this->setProperty('about', $value);
  return $this;
  }

  /**
  * @param Thing $value
  * @return $this
  */
  public function addAbout($value)
  {
  $current = $this->getProperty('about');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('about', $current);
  return $this;
  }

  /**
  * @return Thing|array
  */
  public function getAbout()
  {
  return $this->getProperty('about');
  }


  /**
      * A sub property of participant. The participant who is at the receiving end of
 * the action.
    * @param Organization|Person|ContactPoint|Audience|array $value
  * @return $this
  */
  public function recipient($value)
  {
  $this->setProperty('recipient', $value);
  return $this;
  }

  /**
  * @param Organization|Person|ContactPoint|Audience|array $value
  * @return $this
  */
  public function setRecipient($value)
  {
  $this->setProperty('recipient', $value);
  return $this;
  }

  /**
  * @param Organization|Person|ContactPoint|Audience $value
  * @return $this
  */
  public function addRecipient($value)
  {
  $current = $this->getProperty('recipient');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('recipient', $current);
  return $this;
  }

  /**
  * @return Organization|Person|ContactPoint|Audience|array
  */
  public function getRecipient()
  {
  return $this->getProperty('recipient');
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
