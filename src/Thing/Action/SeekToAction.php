<?php
namespace Sohophp\SchemaOrg\Thing\Action;

  use Sohophp\SchemaOrg\Thing\Action;
  use Sohophp\SchemaOrg\Thing\CreativeWork\HyperTocEntry;

/**
  * This is the [[Action]] of navigating to a specific [[startOffset]] timestamp
 * within a [[VideoObject]], typically represented with a URL template
 * structure.
  * @see schema:SeekToAction
* @package Sohophp\SchemaOrg\Thing\Action
*/
class SeekToAction extends Action
{


  /**
      * The start time of the clip expressed as the number of seconds from the
 * beginning of the work.
    * @param HyperTocEntry|array $value
  * @return $this
  */
  public function startOffset($value)
  {
  $this->setProperty('startOffset', $value);
  return $this;
  }

  /**
  * @param HyperTocEntry|array $value
  * @return $this
  */
  public function setStartOffset($value)
  {
  $this->setProperty('startOffset', $value);
  return $this;
  }

  /**
  * @param HyperTocEntry $value
  * @return $this
  */
  public function addStartOffset($value)
  {
  $current = $this->getProperty('startOffset');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('startOffset', $current);
  return $this;
  }

  /**
  * @return HyperTocEntry|array
  */
  public function getStartOffset()
  {
  return $this->getProperty('startOffset');
  }


}
