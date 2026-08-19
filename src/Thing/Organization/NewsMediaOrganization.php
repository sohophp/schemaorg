<?php

declare(strict_types=1);

namespace Sohophp\SchemaOrg\Thing\Organization;

use Sohophp\SchemaOrg\Thing\Organization;
use Sohophp\SchemaOrg\Thing\CreativeWork;
use Sohophp\SchemaOrg\Thing\CreativeWork\Article;
use Sohophp\SchemaOrg\Thing\CreativeWork\WebPage\AboutPage;

/**
 * A News/Media organization such as a newspaper or TV station.
 * @see https://schema.org/NewsMediaOrganization
 * @package Sohophp\SchemaOrg\Thing\Organization
 */
class NewsMediaOrganization extends Organization
{
    /**
     * Disclosure about verification and fact-checking processes for a [[NewsMediaOrganization]] or other fact-checking [[Organization]].
     * @see https://schema.org/verificationFactCheckingPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function verificationFactCheckingPolicy($value)
    {
        $this->setProperty('verificationFactCheckingPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setVerificationFactCheckingPolicy($value)
    {
        $this->setProperty('verificationFactCheckingPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addVerificationFactCheckingPolicy($value)
    {
        $current = $this->getProperty('verificationFactCheckingPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('verificationFactCheckingPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getVerificationFactCheckingPolicy()
    {
        return $this->getProperty('verificationFactCheckingPolicy');
    }
    /**
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
     * @see https://schema.org/correctionsPolicy
     * @param string|CreativeWork|array $value
     * @return $this
     */
    public function correctionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
     * @param string|CreativeWork|array $value
     * @return $this
     */
    public function setCorrectionsPolicy($value)
    {
        $this->setProperty('correctionsPolicy', $value);
        return $this;
    }

    /**
     * @param string|CreativeWork $value
     * @return $this
     */
    public function addCorrectionsPolicy($value)
    {
        $current = $this->getProperty('correctionsPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('correctionsPolicy', $current);
        return $this;
    }

    /**
     * @return string|CreativeWork|array
     */
    public function getCorrectionsPolicy()
    {
        return $this->getProperty('correctionsPolicy');
    }
    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement explaining when authors of articles are not named in bylines.
     * @see https://schema.org/noBylinesPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function noBylinesPolicy($value)
    {
        $this->setProperty('noBylinesPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setNoBylinesPolicy($value)
    {
        $this->setProperty('noBylinesPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addNoBylinesPolicy($value)
    {
        $current = $this->getProperty('noBylinesPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('noBylinesPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getNoBylinesPolicy()
    {
        return $this->getProperty('noBylinesPolicy');
    }
    /**
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a statement about policy on use of unnamed sources and the decision process required.
     * @see https://schema.org/unnamedSourcesPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function unnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setUnnamedSourcesPolicy($value)
    {
        $this->setProperty('unnamedSourcesPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addUnnamedSourcesPolicy($value)
    {
        $current = $this->getProperty('unnamedSourcesPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('unnamedSourcesPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getUnnamedSourcesPolicy()
    {
        return $this->getProperty('unnamedSourcesPolicy');
    }
    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]] regarding journalistic and publishing practices, or of a [[Restaurant]], a page describing food source policies. In the case of a [[NewsMediaOrganization]], an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
     * @see https://schema.org/ethicsPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function ethicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setEthicsPolicy($value)
    {
        $this->setProperty('ethicsPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addEthicsPolicy($value)
    {
        $current = $this->getProperty('ethicsPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ethicsPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getEthicsPolicy()
    {
        return $this->getProperty('ethicsPolicy');
    }
    /**
     * For a [[NewsMediaOrganization]], a statement on coverage priorities, including any public agenda or stance on issues.
     * @see https://schema.org/missionCoveragePrioritiesPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function missionCoveragePrioritiesPolicy($value)
    {
        $this->setProperty('missionCoveragePrioritiesPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setMissionCoveragePrioritiesPolicy($value)
    {
        $this->setProperty('missionCoveragePrioritiesPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addMissionCoveragePrioritiesPolicy($value)
    {
        $current = $this->getProperty('missionCoveragePrioritiesPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('missionCoveragePrioritiesPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getMissionCoveragePrioritiesPolicy()
    {
        return $this->getProperty('missionCoveragePrioritiesPolicy');
    }
    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
     * @see https://schema.org/diversityStaffingReport
     * @param string|Article|array $value
     * @return $this
     */
    public function diversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
     * @param string|Article|array $value
     * @return $this
     */
    public function setDiversityStaffingReport($value)
    {
        $this->setProperty('diversityStaffingReport', $value);
        return $this;
    }

    /**
     * @param string|Article $value
     * @return $this
     */
    public function addDiversityStaffingReport($value)
    {
        $current = $this->getProperty('diversityStaffingReport');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('diversityStaffingReport', $current);
        return $this;
    }

    /**
     * @return string|Article|array
     */
    public function getDiversityStaffingReport()
    {
        return $this->getProperty('diversityStaffingReport');
    }
    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
     * @see https://schema.org/actionableFeedbackPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function actionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setActionableFeedbackPolicy($value)
    {
        $this->setProperty('actionableFeedbackPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addActionableFeedbackPolicy($value)
    {
        $current = $this->getProperty('actionableFeedbackPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('actionableFeedbackPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getActionableFeedbackPolicy()
    {
        return $this->getProperty('actionableFeedbackPolicy');
    }
    /**
     * For a [[NewsMediaOrganization]], a link to the masthead page or a page listing top editorial management.
     * @see https://schema.org/masthead
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function masthead($value)
    {
        $this->setProperty('masthead', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setMasthead($value)
    {
        $this->setProperty('masthead', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addMasthead($value)
    {
        $current = $this->getProperty('masthead');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('masthead', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getMasthead()
    {
        return $this->getProperty('masthead');
    }
    /**
     * Statement on diversity policy by an [[Organization]] e.g. a [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
     * @see https://schema.org/diversityPolicy
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function diversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string|array $value
     * @return $this
     */
    public function setDiversityPolicy($value)
    {
        $this->setProperty('diversityPolicy', $value);
        return $this;
    }

    /**
     * @param CreativeWork|string $value
     * @return $this
     */
    public function addDiversityPolicy($value)
    {
        $current = $this->getProperty('diversityPolicy');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('diversityPolicy', $current);
        return $this;
    }

    /**
     * @return CreativeWork|string|array
     */
    public function getDiversityPolicy()
    {
        return $this->getProperty('diversityPolicy');
    }
    /**
     * For an [[Organization]] (often but not necessarily a [[NewsMediaOrganization]]), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence. Note that the [[funder]] is also available and can be used to make basic funder information machine-readable.
     * @see https://schema.org/ownershipFundingInfo
     * @param AboutPage|CreativeWork|string|array $value
     * @return $this
     */
    public function ownershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
     * @param AboutPage|CreativeWork|string|array $value
     * @return $this
     */
    public function setOwnershipFundingInfo($value)
    {
        $this->setProperty('ownershipFundingInfo', $value);
        return $this;
    }

    /**
     * @param AboutPage|CreativeWork|string $value
     * @return $this
     */
    public function addOwnershipFundingInfo($value)
    {
        $current = $this->getProperty('ownershipFundingInfo');
        if ($current === null) {
            $current = [];
        } elseif (!is_array($current)) {
            $current = [$current];
        }
        $current[] = $value;
        $this->setProperty('ownershipFundingInfo', $current);
        return $this;
    }

    /**
     * @return AboutPage|CreativeWork|string|array
     */
    public function getOwnershipFundingInfo()
    {
        return $this->getProperty('ownershipFundingInfo');
    }
}
