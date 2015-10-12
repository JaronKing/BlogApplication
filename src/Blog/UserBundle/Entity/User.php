<?php

namespace Blog\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->postsCreated = new ArrayCollection();
        $this->tagsCreated = new ArrayCollection();
        // your own logic
    }

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $postsCreated;


    /**
     * Add postsCreated
     *
     * @param \Blog\AdminBundle\Entity\Post $postsCreated
     *
     * @return User
     */
    public function addPostsCreated(\Blog\AdminBundle\Entity\Post $postsCreated)
    {
        $this->postsCreated[] = $postsCreated;

        return $this;
    }

    /**
     * Remove postsCreated
     *
     * @param \Blog\AdminBundle\Entity\Post $postsCreated
     */
    public function removePostsCreated(\Blog\AdminBundle\Entity\Post $postsCreated)
    {
        $this->postsCreated->removeElement($postsCreated);
    }

    /**
     * Get postsCreated
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPostsCreated()
    {
        return $this->postsCreated;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tagsCreated;


    /**
     * Add tagsCreated
     *
     * @param \Blog\AdminBundle\Entity\Tag $tagsCreated
     *
     * @return User
     */
    public function addTagsCreated(\Blog\AdminBundle\Entity\Tag $tagsCreated)
    {
        $this->tagsCreated[] = $tagsCreated;

        return $this;
    }

    /**
     * Remove tagsCreated
     *
     * @param \Blog\AdminBundle\Entity\Tag $tagsCreated
     */
    public function removeTagsCreated(\Blog\AdminBundle\Entity\Tag $tagsCreated)
    {
        $this->tagsCreated->removeElement($tagsCreated);
    }

    /**
     * Get tagsCreated
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTagsCreated()
    {
        return $this->tagsCreated;
    }
}
