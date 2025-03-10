<?php
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
        * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
 * statement about public engagement activities (for news media, the
 * newsroom’s), including involving the public - digitally or otherwise -- in
 * coverage decisions, reporting and activities after publication.
        * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function actionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function setActionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getActionableFeedbackPolicy()
    {
       return $this->getProperty('actionableFeedbackPolicy');
    }


    /**
        * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement
 * about policy on use of unnamed sources and the decision process required.
        * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function unnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
    * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function setUnnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getUnnamedSourcesPolicy()
    {
       return $this->getProperty('unnamedSourcesPolicy');
    }


    /**
        * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement
 * describing (in news media, the newsroom’s) disclosure and correction policy
 * for errors.
        * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function correctionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function setCorrectionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getCorrectionsPolicy()
    {
       return $this->getProperty('correctionsPolicy');
    }


    /**
        * Statement on diversity policy by an [[Organization]] e.g. a
 * [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement
 * describing the newsroom’s diversity policy on both staffing and sources,
 * typically providing staffing data.
        * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function diversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function setDiversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiversityPolicy()
    {
       return $this->getProperty('diversityPolicy');
    }


    /**
        * For an [[Organization]] (often but not necessarily a
 * [[NewsMediaOrganization]]), a description of organizational ownership
 * structure; funding and grants. In a news/media setting, this is with
 * particular reference to editorial independence.   Note that the [[funder]] is
 * also available and can be used to make basic funder information
 * machine-readable.
        * @param string|CreativeWork|AboutPage|string|array|mixed $value
    * @return $this
    */
    public function ownershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|AboutPage|string|array|mixed $value
    * @return $this
    */
    public function setOwnershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getOwnershipFundingInfo()
    {
       return $this->getProperty('ownershipFundingInfo');
    }


    /**
        * For a [[NewsMediaOrganization]], a link to the masthead page or a page
 * listing top editorial management.
        * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function masthead($value)
    {
        $this->setProperty('masthead', $value);
        return $this;
    }

    /**
    * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function setMasthead($value)
    {
        $this->setProperty('masthead', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMasthead()
    {
       return $this->getProperty('masthead');
    }


    /**
        * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
 * statement explaining when authors of articles are not named in bylines.
        * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function noBylinesPolicy($value)
    {
        $this->setProperty('noBylinesPolicy', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function setNoBylinesPolicy($value)
    {
        $this->setProperty('noBylinesPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getNoBylinesPolicy()
    {
       return $this->getProperty('noBylinesPolicy');
    }


    /**
        * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding
 * journalistic and publishing practices, or of a [[Restaurant]], a page
 * describing food source policies. In the case of a [[NewsMediaOrganization]],
 * an ethicsPolicy is typically a statement describing the personal,
 * organizational, and corporate standards of behavior expected by the
 * organization.
        * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function ethicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
    * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function setEthicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getEthicsPolicy()
    {
       return $this->getProperty('ethicsPolicy');
    }


    /**
        * Disclosure about verification and fact-checking processes for a
 * [[NewsMediaOrganization]] or other fact-checking [[Organization]].
        * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function verificationFactCheckingPolicy($value)
    {
        $this->setProperty('verificationFactCheckingPolicy', $value);
        return $this;
    }

    /**
    * @param string|CreativeWork|array|mixed $value
    * @return $this
    */
    public function setVerificationFactCheckingPolicy($value)
    {
        $this->setProperty('verificationFactCheckingPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getVerificationFactCheckingPolicy()
    {
       return $this->getProperty('verificationFactCheckingPolicy');
    }


    /**
        * For an [[Organization]] (often but not necessarily a
 * [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news
 * context this might be for example ASNE or RTDNA (US) reports, or
 * self-reported.
        * @param string|Article|array|mixed $value
    * @return $this
    */
    public function diversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
    * @param string|Article|array|mixed $value
    * @return $this
    */
    public function setDiversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getDiversityStaffingReport()
    {
       return $this->getProperty('diversityStaffingReport');
    }


    /**
        * For a [[NewsMediaOrganization]], a statement on coverage priorities,
 * including any public agenda or stance on issues.
        * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function missionCoveragePrioritiesPolicy($value)
    {
        $this->setProperty('missionCoveragePrioritiesPolicy', $value);
        return $this;
    }

    /**
    * @param CreativeWork|string|array|mixed $value
    * @return $this
    */
    public function setMissionCoveragePrioritiesPolicy($value)
    {
        $this->setProperty('missionCoveragePrioritiesPolicy', $value);
        return $this;
    }

    /**
    * @return string|array|mixed
    */
    public function getMissionCoveragePrioritiesPolicy()
    {
       return $this->getProperty('missionCoveragePrioritiesPolicy');
    }


}
