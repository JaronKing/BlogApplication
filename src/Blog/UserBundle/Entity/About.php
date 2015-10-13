<?php

namespace Blog\UserBundle\Entity;

/**
 * About
 */
class About
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \DateTime
     */
    private $lastEdited;

    /**
     * @var string
     */
    private $lastEditedBy;


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
     * Set body
     *
     * @param string $body
     *
     * @return About
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
     * Set lastEdited
     *
     * @param \DateTime $lastEdited
     *
     * @return About
     */
    public function setLastEdited($lastEdited)
    {
        $this->lastEdited = $lastEdited;

        return $this;
    }

    /**
     * Get lastEdited
     *
     * @return \DateTime
     */
    public function getLastEdited()
    {
        return $this->lastEdited;
    }

    /**
     * Set lastEditedBy
     *
     * @param string $lastEditedBy
     *
     * @return About
     */
    public function setLastEditedBy($lastEditedBy)
    {
        $this->lastEditedBy = $lastEditedBy;

        return $this;
    }

    /**
     * Get lastEditedBy
     *
     * @return string
     */
    public function getLastEditedBy()
    {
        return $this->lastEditedBy;
    }
}

