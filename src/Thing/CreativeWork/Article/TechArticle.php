<?php

declare (strict_types=1);

namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;
/**
* A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting, specifications, etc.
* @see http://schema.org/TechArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
*/
class TechArticle extends Article
{

     
     /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     * @param string $value
     * @return $this
     */

     public function proficiencyLevel(?string $value):self
     {
        $this->setProperty("proficiencyLevel",$value);
        return $this;
     }

     
     /**
     * Prerequisites needed to fulfill steps in article.
     * @param string $value
     * @return $this
     */

     public function dependencies(?string $value):self
     {
        $this->setProperty("dependencies",$value);
        return $this;
     }

     
}

