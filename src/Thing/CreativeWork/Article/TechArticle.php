<?php
namespace Sohophp\SchemaOrg\Thing\CreativeWork\Article;

use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
* A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting, specifications, etc.
* @see http://schema.org/TechArticle
* @package Sohophp\SchemaOrg\Thing\CreativeWork\Article

*
*/
class TechArticle extends Article
{

    /**
    * Prerequisites needed to fulfill steps in article.
    * @param string|array $value
    * @return $this
    * @deprecated use setDependencies
    */
    public function dependencies($value)
    {
        $this->setProperty('dependencies', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setDependencies($value)
    {
        $this->setProperty('dependencies', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getDependencies()
    {
       return $this->getProperty('dependencies');
    }

    /**
    * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
    * @param string|array $value
    * @return $this
    * @deprecated use setProficiencyLevel
    */
    public function proficiencyLevel($value)
    {
        $this->setProperty('proficiencyLevel', $value);
        return $this;
    }
   /**
    * @param string|array $value
    * @return $this
    */
    public function setProficiencyLevel($value)
    {
        $this->setProperty('proficiencyLevel', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getProficiencyLevel()
    {
       return $this->getProperty('proficiencyLevel');
    }


}
