<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

/**
* A single feed providing structured information about one or more entities or topics.
* @see schema:DataFeed
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Dataset
*/
class DataFeed extends Dataset
{
   /**
        * An item within a data feed. Data feeds may have many elements.
        */
    protected $dataFeedElement = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setDataFeedElement($value)
    {
        $this->setProperty('dataFeedElement', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDataFeedElement()
    {
       return $this->getProperty('dataFeedElement');
    }


}
