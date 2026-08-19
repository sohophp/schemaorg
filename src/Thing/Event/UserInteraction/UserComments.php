<?php
namespace Sohophp\SchemaOrg\Thing\Event\UserInteraction;

  use Sohophp\SchemaOrg\Thing\Event\UserInteraction;
  use Sohophp\SchemaOrg\Thing\Organization;
  use Sohophp\SchemaOrg\Thing\Person;
  use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
  * UserInteraction and its subtypes is an old way of talking about users
 * interacting with pages. It is generally better to use [[Action]]-based
 * vocabulary, alongside types such as [[Comment]].
  * @see schema:UserComments
* @package Sohophp\SchemaOrg\Thing\Event\UserInteraction
*/
class UserComments extends UserInteraction
{


  /**
      * The creator/author of this CreativeWork. This is the same as the Author
 * property for CreativeWork.
    * @param Organization|Person|array $value
  * @return $this
  */
  public function creator($value)
  {
  $this->setProperty('creator', $value);
  return $this;
  }

  /**
  * @param Organization|Person|array $value
  * @return $this
  */
  public function setCreator($value)
  {
  $this->setProperty('creator', $value);
  return $this;
  }

  /**
  * @param Organization|Person $value
  * @return $this
  */
  public function addCreator($value)
  {
  $current = $this->getProperty('creator');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('creator', $current);
  return $this;
  }

  /**
  * @return Organization|Person|array
  */
  public function getCreator()
  {
  return $this->getProperty('creator');
  }


  /**
      * The text of the UserComment.
    * @param string|array $value
  * @return $this
  */
  public function commentText($value)
  {
  $this->setProperty('commentText', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setCommentText($value)
  {
  $this->setProperty('commentText', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addCommentText($value)
  {
  $current = $this->getProperty('commentText');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('commentText', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getCommentText()
  {
  return $this->getProperty('commentText');
  }


  /**
      * The URL at which a reply may be posted to the specified UserComment.
    * @param string|array $value
  * @return $this
  */
  public function replyToUrl($value)
  {
  $this->setProperty('replyToUrl', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setReplyToUrl($value)
  {
  $this->setProperty('replyToUrl', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addReplyToUrl($value)
  {
  $current = $this->getProperty('replyToUrl');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('replyToUrl', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getReplyToUrl()
  {
  return $this->getProperty('replyToUrl');
  }


  /**
      * The time at which the UserComment was made.
    * @param mixed $value
  * @return $this
  */
  public function commentTime($value)
  {
  $this->setProperty('commentTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function setCommentTime($value)
  {
  $this->setProperty('commentTime', $value);
  return $this;
  }

  /**
  * @param mixed $value
  * @return $this
  */
  public function addCommentTime($value)
  {
  $current = $this->getProperty('commentTime');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('commentTime', $current);
  return $this;
  }

  /**
  * @return mixed
  */
  public function getCommentTime()
  {
  return $this->getProperty('commentTime');
  }


  /**
      * Specifies the CreativeWork associated with the UserComment.
    * @param CreativeWork|array $value
  * @return $this
  */
  public function discusses($value)
  {
  $this->setProperty('discusses', $value);
  return $this;
  }

  /**
  * @param CreativeWork|array $value
  * @return $this
  */
  public function setDiscusses($value)
  {
  $this->setProperty('discusses', $value);
  return $this;
  }

  /**
  * @param CreativeWork $value
  * @return $this
  */
  public function addDiscusses($value)
  {
  $current = $this->getProperty('discusses');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('discusses', $current);
  return $this;
  }

  /**
  * @return CreativeWork|array
  */
  public function getDiscusses()
  {
  return $this->getProperty('discusses');
  }


}
