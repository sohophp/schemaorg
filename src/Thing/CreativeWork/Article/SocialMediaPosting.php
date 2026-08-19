<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Article;
  use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
  * A post to a social media platform, including blog posts, tweets, Facebook
 * posts, etc.
  * @see schema:SocialMediaPosting
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
*/
class SocialMediaPosting extends Article
{


  /**
      * A CreativeWork such as an image, video, or audio clip shared as part of this
 * posting.
    * @param CreativeWork|array $value
  * @return $this
  */
  public function sharedContent($value)
  {
  $this->setProperty('sharedContent', $value);
  return $this;
  }

  /**
  * @param CreativeWork|array $value
  * @return $this
  */
  public function setSharedContent($value)
  {
  $this->setProperty('sharedContent', $value);
  return $this;
  }

  /**
  * @param CreativeWork $value
  * @return $this
  */
  public function addSharedContent($value)
  {
  $current = $this->getProperty('sharedContent');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('sharedContent', $current);
  return $this;
  }

  /**
  * @return CreativeWork|array
  */
  public function getSharedContent()
  {
  return $this->getProperty('sharedContent');
  }


}
