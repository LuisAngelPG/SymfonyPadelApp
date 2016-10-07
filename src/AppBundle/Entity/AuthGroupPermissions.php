<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthGroupPermissions
 *
 * @ORM\Table(name="auth_group_permissions", uniqueConstraints={@ORM\UniqueConstraint(name="auth_group_permissions_group_id_permission_id_key", columns={"group_id", "permission_id"})}, indexes={@ORM\Index(name="auth_group_permissions_8373b171", columns={"permission_id"}), @ORM\Index(name="auth_group_permissions_0e939a4f", columns={"group_id"})})
 * @ORM\Entity
 */
class AuthGroupPermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="auth_group_permissions_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * Set permission
     *
     * @param \AppBundle\Entity\AuthPermission $permission
     *
     * @return AuthGroupPermissions
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

    /**
     * Set group
     *
     * @param \AppBundle\Entity\AuthGroup $group
     *
     * @return AuthGroupPermissions
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
