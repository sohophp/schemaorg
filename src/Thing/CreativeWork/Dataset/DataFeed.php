<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

  use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;
  use Sohophp\SchemaOrg\Thing\Intangible\DataFeedItem;
  use Sohophp\SchemaOrg\Thing;

/**
  * A single feed providing structured information about one or more entities or
 * topics.
  * @see schema:DataFeed
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Dataset
*/
class DataFeed extends Dataset
{


  /**
      * An item within a data feed. Data feeds may have many elements.
    * @param string|DataFeedItem|Thing|array $value
  * @return $this
  */
  public function dataFeedElement($value)
  {
  $this->setProperty('dataFeedElement', $value);
  return $this;
  }

  /**
  * @param string|DataFeedItem|Thing|array $value
  * @return $this
  */
  public function setDataFeedElement($value)
  {
  $this->setProperty('dataFeedElement', $value);
  return $this;
  }

  /**
  * @param string|DataFeedItem|Thing $value
  * @return $this
  */
  public function addDataFeedElement($value)
  {
  $current = $this->getProperty('dataFeedElement');
  if ($current === null) {
  $current = [];
  } elseif (!is_array($current)) {
  $current = [$current];
  }
  $current[] = $value;
  $this->setProperty('dataFeedElement', $current);
  return $this;
  }

  /**
  * @return string|DataFeedItem|Thing|array
  */
  public function getDataFeedElement()
  {
  return $this->getProperty('dataFeedElement');
  }


}
