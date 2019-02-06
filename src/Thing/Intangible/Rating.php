<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Person;
/**
* A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
* @see http://schema.org/Rating
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Rating extends Intangible
{

     
     /**
     * The rating for the content.
     * @param string $value
     * @return $this
     */

     public function ratingValue(?string $value):self
     {
        $this->setProperty("ratingValue",$value);
        return $this;
     }

     
     /**
     * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
     * @param string $value
     * @return $this
     */

     public function bestRating(?string $value):self
     {
        $this->setProperty("bestRating",$value);
        return $this;
     }

     
     /**
     * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
     * @param Organization|Person $value
     * @return $this
     */

     public function author( $value):self
     {
        $this->setProperty("author",$value);
        return $this;
     }

     
     /**
     * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
     * @param string $value
     * @return $this
     */

     public function worstRating(?string $value):self
     {
        $this->setProperty("worstRating",$value);
        return $this;
     }

     
}

