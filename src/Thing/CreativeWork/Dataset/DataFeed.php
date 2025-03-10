<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

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
        * @param array|string|mixed $value
    * @return $this
    */
    public function dataFeedElement($value)
    {
        $this->setProperty('dataFeedElement', $value);
        return $this;
    }

    /**
    * @param array|string|mixed $value
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
