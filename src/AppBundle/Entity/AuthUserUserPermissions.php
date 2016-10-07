<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthUserUserPermissions
 *
 * @ORM\Table(name="auth_user_user_permissions", uniqueConstraints={@ORM\UniqueConstraint(name="auth_user_user_permissions_user_id_permission_id_key", columns={"user_id", "permission_id"})}, indexes={@ORM\Index(name="auth_user_user_permissions_e8701ad4", columns={"user_id"}), @ORM\Index(name="auth_user_user_permissions_8373b171", columns={"permission_id"})})
 * @ORM\Entity
 */
class AuthUserUserPermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="auth_user_user_permissions_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AppBundle\Entity\AuthPermission
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\AuthPermission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;



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
     * @return AuthUserUserPermissions
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
     * Set permission
     *
     * @param \AppBundle\Entity\AuthPermission $permission
     *
     * @return AuthUserUserPermissions
     */
    public function setPermission(\AppBundle\Entity\AuthPermission $permission = null)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return \AppBundle\Entity\AuthPermission
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
