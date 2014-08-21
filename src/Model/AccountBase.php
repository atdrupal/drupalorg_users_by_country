<?php

namespace AndyTruong\DrupalOrgScan\Model;

use Model;

abstract class AccountBase extends Model
{

    public $uid;
    public $name;
    public $pic;
    public $drupalContributions;
    public $mentors;
    public $rolesInWorkingWithDrupal;
    public $fullName;
    public $firstOrGivenName;
    public $languagesSpoken;
    public $website;
    public $interests;
    public $gender;
    public $country;
    public $linkedinProfile;
    public $facebookPage;
    public $twitterURL;
    public $googleProfileURL;
    public $drupalAnswersProfileURL;
    public $jobTitle;
    public $currentCompanyOrOrganization;
    public $companyWorked;
    public $memberFor;
    public $documentation;
    public $projects;
    public $totalCommits;

    public function getUid()
    {
        return $this->uid;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPic()
    {
        return $this->pic;
    }

    public function getDrupalContributions()
    {
        return $this->drupalContributions;
    }

    public function getMentors()
    {
        return $this->mentors;
    }

    public function getRolesInWorkingWithDrupal()
    {
        return $this->rolesInWorkingWithDrupal;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function getFirstOrGivenName()
    {
        return $this->firstOrGivenName;
    }

    public function getLanguagesSpoken()
    {
        return $this->languagesSpoken;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function getInterests()
    {
        return $this->interests;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getLinkedinProfile()
    {
        return $this->linkedinProfile;
    }

    public function getFacebookPage()
    {
        return $this->facebookPage;
    }

    public function getTwitterURL()
    {
        return $this->twitterURL;
    }

    public function getGoogleProfileURL()
    {
        return $this->googleProfileURL;
    }

    public function getDrupalAnswersProfileURL()
    {
        return $this->drupalAnswersProfileURL;
    }

    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    public function getCurrentCompanyOrOrganization()
    {
        return $this->currentCompanyOrOrganization;
    }

    public function getCompanyWorked()
    {
        return $this->companyWorked;
    }

    public function getMemberFor()
    {
        return $this->memberFor;
    }

    public function getDocumentation()
    {
        return $this->documentation;
    }

    public function getProjects()
    {
        return $this->projects;
    }

    public function getTotalCommits()
    {
        return $this->totalCommits;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPic($pic)
    {
        $this->pic = $pic;
    }

    public function setDrupalContributions($drupalContributions)
    {
        $this->drupalContributions = $drupalContributions;
    }

    public function setMentors($mentors)
    {
        $this->mentors = $mentors;
    }

    public function setRolesInWorkingWithDrupal($rolesInWorkingWithDrupal)
    {
        $this->rolesInWorkingWithDrupal = $rolesInWorkingWithDrupal;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    public function setFirstOrGivenName($firstOrGivenName)
    {
        $this->firstOrGivenName = $firstOrGivenName;
    }

    public function setLanguagesSpoken($languagesSpoken)
    {
        $this->languagesSpoken = $languagesSpoken;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
    }

    public function setInterests($interests)
    {
        $this->interests = $interests;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setLinkedinProfile($linkedinProfile)
    {
        $this->linkedinProfile = $linkedinProfile;
    }

    public function setFacebookPage($facebookPage)
    {
        $this->facebookPage = $facebookPage;
    }

    public function setTwitterURL($twitterURL)
    {
        $this->twitterURL = $twitterURL;
    }

    public function setGoogleProfileURL($googleProfileURL)
    {
        $this->googleProfileURL = $googleProfileURL;
    }

    public function setDrupalAnswersProfileURL($drupalAnswersProfileURL)
    {
        $this->drupalAnswersProfileURL = $drupalAnswersProfileURL;
    }

    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    public function setCurrentCompanyOrOrganization($currentCompanyOrOrganization)
    {
        $this->currentCompanyOrOrganization = $currentCompanyOrOrganization;
    }

    public function setCompanyWorked($companyWorked)
    {
        $this->companyWorked = $companyWorked;
    }

    public function setMemberFor($memberFor)
    {
        $this->memberFor = $memberFor;
    }

    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
    }

    public function setProjects($projects)
    {
        $this->projects = $projects;
    }

    public function setTotalCommits($totalCommits)
    {
        $this->totalCommits = $totalCommits;
    }

}
