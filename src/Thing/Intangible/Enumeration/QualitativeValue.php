<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible\Enumeration;

use Sohophp\SchemaOrg\Thing\Intangible\Enumeration;
/**
* A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
* @see http://schema.org/QualitativeValue
* @package Sohophp\SchemaOrg\Thing\Intangible\Enumeration
*/
class QualitativeValue extends Enumeration
{

     
     /**
     * This ordering relation for qualitative values indicates that the subject is greater than the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function greater(?QualitativeValue $value):self
     {
        $this->setProperty("greater",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is equal to the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function equal(?QualitativeValue $value):self
     {
        $this->setProperty("equal",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is not equal to the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function nonEqual(?QualitativeValue $value):self
     {
        $this->setProperty("nonEqual",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is lesser than the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function lesser(?QualitativeValue $value):self
     {
        $this->setProperty("lesser",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function lesserOrEqual(?QualitativeValue $value):self
     {
        $this->setProperty("lesserOrEqual",$value);
        return $this;
     }

     
     /**
     * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
     * @param QualitativeValue $value
     * @return $this
     */

     public function greaterOrEqual(?QualitativeValue $value):self
     {
        $this->setProperty("greaterOrEqual",$value);
        return $this;
     }

     
}

