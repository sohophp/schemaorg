<?php declare(strict_types=1);
namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage\AboutPage;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article;

/**
* A News/Media organization such as a newspaper or TV station.
* @see http://schema.org/NewsMediaOrganization
* @package Sohophp\SchemaOrg\Thing\Organization
*/
class NewsMediaOrganization extends Organization
{

    /**
    * For a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a> or other news-related <a class="localLink" href="http://schema.org/Organization">Organization</a>, a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
    * @param string|CreativeWork $value
    * @return $this
    */
    public function actionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
    * For an <a class="localLink" href="http://schema.org/Organization">Organization</a> (typically a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>), a statement about policy on use of unnamed sources and the decision process required.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function unnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
    * For an <a class="localLink" href="http://schema.org/Organization">Organization</a> (e.g. <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
    * @param string|CreativeWork $value
    * @return $this
    */
    public function correctionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
    * Statement on diversity policy by an <a class="localLink" href="http://schema.org/Organization">Organization</a> e.g. a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>. For a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>, a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
    * @param string|CreativeWork $value
    * @return $this
    */
    public function diversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
    * For an <a class="localLink" href="http://schema.org/Organization">Organization</a> (often but not necessarily a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the <a class="localLink" href="http://schema.org/funder">funder</a> is also available and can be used to make basic funder information machine-readable.
    * @param string|CreativeWork|AboutPage|string $value
    * @return $this
    */
    public function ownershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
    * For a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>, a link to the masthead page or a page listing top editorial management.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function masthead($value)
    {
        $this->setProperty('masthead', $value);
        return $this;
    }

    /**
    * For a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a> or other news-related <a class="localLink" href="http://schema.org/Organization">Organization</a>, a statement explaining when authors of articles are not named in bylines.
    * @param string|CreativeWork $value
    * @return $this
    */
    public function noBylinesPolicy($value)
    {
        $this->setProperty('noBylinesPolicy', $value);
        return $this;
    }

    /**
    * Statement about ethics policy, e.g. of a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a> regarding journalistic and publishing practices, or of a <a class="localLink" href="http://schema.org/Restaurant">Restaurant</a>, a page describing food source policies. In the case of a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>, an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function ethicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
    * Disclosure about verification and fact-checking processes for a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a> or other fact-checking <a class="localLink" href="http://schema.org/Organization">Organization</a>.
    * @param string|CreativeWork $value
    * @return $this
    */
    public function verificationFactCheckingPolicy($value)
    {
        $this->setProperty('verificationFactCheckingPolicy', $value);
        return $this;
    }

    /**
    * For an <a class="localLink" href="http://schema.org/Organization">Organization</a> (often but not necessarily a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
    * @param string|Article $value
    * @return $this
    */
    public function diversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
    * For a <a class="localLink" href="http://schema.org/NewsMediaOrganization">NewsMediaOrganization</a>, a statement on coverage priorities, including any public agenda or stance on issues.
    * @param CreativeWork|string $value
    * @return $this
    */
    public function missionCoveragePrioritiesPolicy($value)
    {
        $this->setProperty('missionCoveragePrioritiesPolicy', $value);
        return $this;
    }


}


class_alias('Sohophp\\SchemaOrg\\Thing\\Organization\\NewsMediaOrganization','Thing\\NewsMediaOrganization');

