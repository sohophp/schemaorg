<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

  use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
  * One of the sections into which a book is divided. A chapter usually has a
 * section number or a name.
  * @see schema:Chapter
* @package Sohophp\SchemaOrg\Thing\CreativeWork
*/
class Chapter extends CreativeWork
{


  /**
      * Any description of pages that is not separated into pageStart and pageEnd;
 * for example, "1-6, 9, 55" or "10-12, 46-49".
    * @param string|array $value
  * @return $this
  */
  public function pagination($value)
  {
  $this->setProperty('pagination', $value);
  return $this;
  }

  /**
  * @param string|array $value
  * @return $this
  */
  public function setPagination($value)
  {
  $this->setProperty('pagination', $value);
  return $this;
  }

  /**
  * @param string $value
  * @return $this
  */
  public function addPagination($value)
  {
  $current = $this->getProperty('pagination');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('pagination', $current);
  return $this;
  }

  /**
  * @return string|array
  */
  public function getPagination()
  {
  return $this->getProperty('pagination');
  }


  /**
      * The page on which the work ends; for example "138" or "xvi".
    * @param int|string|array $value
  * @return $this
  */
  public function pageEnd($value)
  {
  $this->setProperty('pageEnd', $value);
  return $this;
  }

  /**
  * @param int|string|array $value
  * @return $this
  */
  public function setPageEnd($value)
  {
  $this->setProperty('pageEnd', $value);
  return $this;
  }

  /**
  * @param int|string $value
  * @return $this
  */
  public function addPageEnd($value)
  {
  $current = $this->getProperty('pageEnd');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('pageEnd', $current);
  return $this;
  }

  /**
  * @return int|string|array
  */
  public function getPageEnd()
  {
  return $this->getProperty('pageEnd');
  }


  /**
      * The page on which the work starts; for example "135" or "xiii".
    * @param int|string|array $value
  * @return $this
  */
  public function pageStart($value)
  {
  $this->setProperty('pageStart', $value);
  return $this;
  }

  /**
  * @param int|string|array $value
  * @return $this
  */
  public function setPageStart($value)
  {
  $this->setProperty('pageStart', $value);
  return $this;
  }

  /**
  * @param int|string $value
  * @return $this
  */
  public function addPageStart($value)
  {
  $current = $this->getProperty('pageStart');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('pageStart', $current);
  return $this;
  }

  /**
  * @return int|string|array
  */
  public function getPageStart()
  {
  return $this->getProperty('pageStart');
  }


}
