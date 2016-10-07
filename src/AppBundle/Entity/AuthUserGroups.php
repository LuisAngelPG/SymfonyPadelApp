<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthUserGroups
 *
 * @ORM\Table(name="auth_user_groups", uniqueConstraints={@ORM\UniqueConstraint(name="auth_user_groups_user_id_group_id_key", columns={"user_id", "group_id"})}, indexes={@ORM\Index(name="auth_user_groups_e8701ad4", columns={"user_id"}), @ORM\Index(name="auth_user_groups_0e939a4f", columns={"group_id"})})
 * @ORM\Entity
 */
class AuthUserGroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="auth_user_groups_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \AppBundle\Entity\AuthGroup
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AuthGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;



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
     * Set user
     *
     * @param \AppBundle\Entity\AuthUser $user
     *
     * @return AuthUserGroups
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
     * Set group
     *
     * @param \AppBundle\Entity\AuthGroup $group
     *
     * @return AuthUserGroups
     */
    public function setGroup(\AppBundle\Entity\AuthGroup $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \AppBundle\Entity\AuthGroup
     */
    public function getGroup()
    {
        return $this->group;
    }
}
