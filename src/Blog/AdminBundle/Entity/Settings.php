<?php

namespace Blog\AdminBundle\Entity;

/**
 * Settings
 */
class Settings
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var string
     */
    private $metaName;

    /**
     * @var string
     */
    private $metaDescription;

    /**
     * @var string
     */
    private $pages;

    /**
     * @var string
     */
    private $adSpaceHorizontal;

    /**
     * @var string
     */
    private $adSpaceVertical;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Settings
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Settings
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set metaName
     *
     * @param string $metaName
     *
     * @return Settings
     */
    public function setMetaName($metaName)
    {
        $this->metaName = $metaName;

        return $this;
    }

    /**
     * Get metaName
     *
     * @return string
     */
    public function getMetaName()
    {
        return $this->metaName;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Settings
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set pages
     *
     * @param string $pages
     *
     * @return Settings
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return string
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set adSpaceHorizontal
     *
     * @param string $adSpaceHorizontal
     *
     * @return Settings
     */
    public function setAdSpaceHorizontal($adSpaceHorizontal)
    {
        $this->adSpaceHorizontal = $adSpaceHorizontal;

        return $this;
    }

    /**
     * Get adSpaceHorizontal
     *
     * @return string
     */
    public function getAdSpaceHorizontal()
    {
        return $this->adSpaceHorizontal;
    }

    /**
     * Set adSpaceVertical
     *
     * @param string $adSpaceVertical
     *
     * @return Settings
     */
    public function setAdSpaceVertical($adSpaceVertical)
    {
        $this->adSpaceVertical = $adSpaceVertical;

        return $this;
    }

    /**
     * Get adSpaceVertical
     *
     * @return string
     */
    public function getAdSpaceVertical()
    {
        return $this->adSpaceVertical;
    }
    /**
     * @var string
     */
    private $github;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $facebook;


    /**
     * Set github
     *
     * @param string $github
     *
     * @return Settings
     */
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }

    /**
     * Get github
     *
     * @return string
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Settings
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Settings
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @var string
     */
    private $sidebarAbout;


    /**
     * Set sidebarAbout
     *
     * @param string $sidebarAbout
     *
     * @return Settings
     */
    public function setSidebarAbout($sidebarAbout)
    {
        $this->sidebarAbout = $sidebarAbout;

        return $this;
    }

    /**
     * Get sidebarAbout
     *
     * @return string
     */
    public function getSidebarAbout()
    {
        return $this->sidebarAbout;
    }
    /**
     * @var string
     */
    private $linkedin;


    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return Settings
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }
}
