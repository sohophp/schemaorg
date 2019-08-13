<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;

use Sohophp\SchemaOrg\Thing\CreativeWork\Dataset;
use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Intangible\DataFeedItem;

/**
* A single feed providing structured information about one or more entities or topics.
* @see http://schema.org/DataFeed
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Dataset
*/
class DataFeed extends Dataset
{

    /**
    * An item within in a data feed. Data feeds may have many elements.
    * @param string|Thing|DataFeedItem $value
    * @return $this
    */
    public function dataFeedElement($value)
    {
        $this->setProperty('dataFeedElement', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Dataset\\DataFeed','Thing\\DataFeed');

