<?php declare(strict_types=1);
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
    * Prerequisites needed to fulfill steps in article.
    * @param string $value
    * @return $this
    */
    public function dependencies(?string $value)
    {
        $this->setProperty('dependencies', $value);
        return $this;
    }

    /**
    * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
    * @param string $value
    * @return $this
    */
    public function proficiencyLevel(?string $value)
    {
        $this->setProperty('proficiencyLevel', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Article\\TechArticle','Thing\\TechArticle');

