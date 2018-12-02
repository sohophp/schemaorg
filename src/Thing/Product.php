<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing;

use Sohophp\SchemaOrg\Thing;
use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\Product\ProductModel;
/**
* Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.
* @see http://schema.org/Product
* @package Sohophp\SchemaOrg\Thing
*/
class Product extends Thing
{

     
     /**
     * The manufacturer of the product.
     * @param Organization $value
     * @return $this
     */

     public function manufacturer(?Organization $value):self
     {
        $this->setProperty("manufacturer",$value);
        return $this;
     }

     
     /**
     * A pointer to another product (or multiple products) for which this product is a consumable.
     * @param Product $value
     * @return $this
     */

     public function isConsumableFor(?Product $value):self
     {
        $this->setProperty("isConsumableFor",$value);
        return $this;
     }

     
     /**
     * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
     * @param Product $value
     * @return $this
     */

     public function isAccessoryOrSparePartFor(?Product $value):self
     {
        $this->setProperty("isAccessoryOrSparePartFor",$value);
        return $this;
     }

     
     /**
     * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
     * @param string|ProductModel $value
     * @return $this
     */

     public function model( $value):self
     {
        $this->setProperty("model",$value);
        return $this;
     }

     
     /**
     * The color of the product.
     * @param string $value
     * @return $this
     */

     public function color(?string $value):self
     {
        $this->setProperty("color",$value);
        return $this;
     }

     
     /**
     * The product identifier, such as ISBN. For example: <code>meta itemprop="productID" content="isbn:123-456-789"</code>.
     * @param string $value
     * @return $this
     */

     public function productID(?string $value):self
     {
        $this->setProperty("productID",$value);
        return $this;
     }

     
     /**
     * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
     * @param \DateTimeInterface $value
     * @return $this
     */

     public function releaseDate(?\DateTimeInterface $value):self
     {
        $this->setProperty("releaseDate",$value);
        return $this;
     }

     
}

