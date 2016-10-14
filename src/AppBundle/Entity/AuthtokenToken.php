<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthtokenToken
 *
 * @ORM\Table(name="authtoken_token", uniqueConstraints={@ORM\UniqueConstraint(name="authtoken_token_user_id_key", columns={"user_id"})}, indexes={@ORM\Index(name="authtoken_token_key_7222ec672cd32dcd_like", columns={"key"})})
 * @ORM\Entity
 */
class AuthtokenToken
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetimetz", nullable=true)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=40)
     * @ORM\Id
     */
    private $key;

    /**
     * @var \AppBundle\Entity\AuthUser
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AuthUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return AuthtokenToken
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\AuthUser $user
     *
     * @return AuthtokenToken
     */
    public function setUser(\AppBundle\Entity\AuthUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\AuthUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set key
     *
     * @param string $key
     *
     * @return AuthtokenToken
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}
