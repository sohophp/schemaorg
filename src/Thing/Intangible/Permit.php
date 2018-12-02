<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Intangible;

use Sohophp\SchemaOrg\Thing\Intangible;
use Sohophp\SchemaOrg\Thing\Intangible\Quantity\Duration;
use Sohophp\SchemaOrg\Thing\Intangible\Service;
use Sohophp\SchemaOrg\Thing\Intangible\Audience;
use Sohophp\SchemaOrg\Thing\Place\AdministrativeArea;
/**
* A permit issued by an organization, e.g. a parking pass.
* @see http://schema.org/Permit
* @package Sohophp\SchemaOrg\Thing\Intangible
*/
class Permit extends Intangible
{

     
     /**
     * The time validity of the permit.
     * @param Duration $value
     * @return $this
     */

     public function validFor(?Duration $value):self
     {
        $this->setProperty("validFor",$value);
        return $this;
     }

     
     /**
     * The date when the item is no longer valid.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function validUntil(?\DateTimeInterface $value):self
     {
        $this->setProperty("validUntil",$value);
        return $this;
     }

     
     /**
     * The service through with the permit was granted.
     * @param Service $value
     * @return $this
     */

     public function issuedThrough(?Service $value):self
     {
        $this->setProperty("issuedThrough",$value);
        return $this;
     }

     
     /**
     * The target audience for this permit.
     * @param Audience $value
     * @return $this
     */

     public function permitAudience(?Audience $value):self
     {
        $this->setProperty("permitAudience",$value);
        return $this;
     }

     
     /**
     * The geographic area where the permit is valid.
     * @param AdministrativeArea $value
     * @return $this
     */

     public function validIn(?AdministrativeArea $value):self
     {
        $this->setProperty("validIn",$value);
        return $this;
     }

     
}

