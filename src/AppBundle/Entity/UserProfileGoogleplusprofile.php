<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProfileGoogleplusprofile
 *
 * @ORM\Table(name="user_profile_googleplusprofile", uniqueConstraints={@ORM\UniqueConstraint(name="user_profile_googleplusprofile_google_plus_id_key", columns={"google_plus_id"}), @ORM\UniqueConstraint(name="user_profile_googleplusprofile_user_id_key", columns={"user_id"})})
 * @ORM\Entity
 */
class UserProfileGoogleplusprofile
{
    /**
     * @var string
     *
     * @ORM\Column(name="google_plus_id", type="string", length=250, nullable=false)
     */
    private $googlePlusId;

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
     * @ORM\SequenceGenerator(sequenceName="user_profile_googleplusprofile_id_seq", allocationSize=1, initialValue=1)
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
     * Set googlePlusId
     *
     * @param string $googlePlusId
     *
     * @return UserProfileGoogleplusprofile
     */
    public function setGooglePlusId($googlePlusId)
    {
        $this->googlePlusId = $googlePlusId;

        return $this;
    }

    /**
     * Get googlePlusId
     *
     * @return string
     */
    public function getGooglePlusId()
    {
        return $this->googlePlusId;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserProfileGoogleplusprofile
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
     * @return UserProfileGoogleplusprofile
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return UserProfileGoogleplusprofile
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
     * @return UserProfileGoogleplusprofile
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
     * @return UserProfileGoogleplusprofile
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
