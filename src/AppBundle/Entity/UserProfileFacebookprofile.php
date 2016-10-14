<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProfileFacebookprofile
 *
 * @ORM\Table(name="user_profile_facebookprofile", uniqueConstraints={@ORM\UniqueConstraint(name="user_profile_facebookprofile_facebook_id_key", columns={"facebook_id"}), @ORM\UniqueConstraint(name="user_profile_facebookprofile_user_id_key", columns={"user_id"})})
 * @ORM\Entity
 */
class UserProfileFacebookprofile
{
    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", length=250, nullable=false)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=254, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="granted_permissions", type="string", length=100, nullable=true)
     */
    private $grantedPermissions;

    /**
     * @var string
     *
     * @ORM\Column(name="access_token", type="text", nullable=true)
     */
    private $accessToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetimetz", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetimetz", nullable=false)
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="user_profile_facebookprofile_id_seq", allocationSize=1, initialValue=1)
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
     * Set facebookId
     *
     * @param string $facebookId
     *
     * @return UserProfileFacebookprofile
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserProfileFacebookprofile
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return UserProfileFacebookprofile
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set grantedPermissions
     *
     * @param string $grantedPermissions
     *
     * @return UserProfileFacebookprofile
     */
    public function setGrantedPermissions($grantedPermissions)
    {
        $this->grantedPermissions = $grantedPermissions;

        return $this;
    }

    /**
     * Get grantedPermissions
     *
     * @return string
     */
    public function getGrantedPermissions()
    {
        return $this->grantedPermissions;
    }

    /**
     * Set accessToken
     *
     * @param string $accessToken
     *
     * @return UserProfileFacebookprofile
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Get accessToken
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return UserProfileFacebookprofile
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
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return UserProfileFacebookprofile
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
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
     * Set user
     *
     * @param \AppBundle\Entity\AuthUser $user
     *
     * @return UserProfileFacebookprofile
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
}
