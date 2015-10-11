<?php

namespace Blog\UserBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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
}
