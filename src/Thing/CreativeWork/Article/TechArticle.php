<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
* A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting, specifications, etc.
* @see schema:TechArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article
*/
class TechArticle extends Article
{
   /**
        * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
        */
    protected $proficiencyLevel = null;

   /**
        * Prerequisites needed to fulfill steps in article.
        */
    protected $dependencies = null;


    /**
    * @param array|string $value
    * @return $this
    */
    public function setProficiencyLevel($value)
    {
        $this->setProperty('proficiencyLevel', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getProficiencyLevel()
    {
       return $this->getProperty('proficiencyLevel');
    }

    /**
    * @param array|string $value
    * @return $this
    */
    public function setDependencies($value)
    {
        $this->setProperty('dependencies', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDependencies()
    {
       return $this->getProperty('dependencies');
    }


}
