<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\CreativeWork;

use Sohophp\SchemaOrg\Thing\CreativeWork;

/**
* A <a class="localLink" href="http://schema.org/Claim">Claim</a> in Schema.org represents a specific, factually-oriented claim that could be the <a class="localLink" href="http://schema.org/itemReviewed">itemReviewed</a> in a <a class="localLink" href="http://schema.org/ClaimReview">ClaimReview</a>. The content of a claim can be summarized with the <a class="localLink" href="http://schema.org/text">text</a> property. Variations on well known claims can have their common identity indicated via <a class="localLink" href="http://schema.org/sameAs">sameAs</a> links, and summarized with a <a class="localLink" href="http://schema.org/name">name</a>. Ideally, a <a class="localLink" href="http://schema.org/Claim">Claim</a> description includes enough contextual information to minimize the risk of ambiguity or inclarity. In practice, many claims are better understood in the context in which they appear or the interpretations provided by claim reviews.<br/><br/>

Beyond <a class="localLink" href="http://schema.org/ClaimReview">ClaimReview</a>, the Claim type can be associated with related creative works - for example a <a class="localLink" href="http://schema.org/ScholaryArticle">ScholaryArticle</a> or <a class="localLink" href="http://schema.org/Question">Question</a> might be <a class="localLink" href="http://schema.org/about">about</a> some <a class="localLink" href="http://schema.org/Claim">Claim</a>.<br/><br/>

At this time, Schema.org does not define any types of relationship between claims. This is a natural area for future exploration.
* @see http://schema.org/Claim
* @package Sohophp\SchemaOrg\Thing\CreativeWork

*
*/
class Claim extends CreativeWork
{

    /**
    * Indicates the first known occurence of a <a class="localLink" href="http://schema.org/Claim">Claim</a> in some <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function firstAppearance(?CreativeWork $value)
    {
        $this->setProperty('firstAppearance', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setFirstAppearance(?CreativeWork $value)
    {
        $this->setProperty('firstAppearance', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getFirstAppearance()
    {
       return $this->getProperty('firstAppearance');
    }

    /**
    * Indicates an occurence of a <a class="localLink" href="http://schema.org/Claim">Claim</a> in some <a class="localLink" href="http://schema.org/CreativeWork">CreativeWork</a>.
    * @param CreativeWork|array $value
    * @return $this
    */
    public function appearance(?CreativeWork $value)
    {
        $this->setProperty('appearance', $value);
        return $this;
    }
   /**
    * @param CreativeWork|array $value
    * @return $this
    */
    public function setAppearance(?CreativeWork $value)
    {
        $this->setProperty('appearance', $value);
        return $this;
    }
    /**
    * @return $this|string|array
    */
    public function getAppearance()
    {
       return $this->getProperty('appearance');
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\CreativeWork\\Claim','Thing\\Claim');

