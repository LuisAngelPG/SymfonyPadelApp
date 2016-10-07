<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProfilePlayerprofileFriends
 *
 * @ORM\Table(name="user_profile_playerprofile_friends", uniqueConstraints={@ORM\UniqueConstraint(name="user_profile_playerprofile_fr_from_playerprofile_id_to_play_key", columns={"from_playerprofile_id", "to_playerprofile_id"})}, indexes={@ORM\Index(name="user_profile_playerprofile_friends_278b4c35", columns={"to_playerprofile_id"}), @ORM\Index(name="user_profile_playerprofile_friends_8b2e29e0", columns={"from_playerprofile_id"})})
 * @ORM\Entity
 */
class UserProfilePlayerprofileFriends
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="user_profile_playerprofile_friends_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\UserProfilePlayerprofile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserProfilePlayerprofile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="from_playerprofile_id", referencedColumnName="id")
     * })
     */
    private $fromPlayerprofile;

    /**
     * @var \AppBundle\Entity\UserProfilePlayerprofile
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserProfilePlayerprofile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="to_playerprofile_id", referencedColumnName="id")
     * })
     */
    private $toPlayerprofile;

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
     * Set fromPlayerprofile
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $fromPlayerprofile
     *
     * @return UserProfilePlayerprofileFriends
     */
    public function setFromPlayerprofile(\AppBundle\Entity\UserProfilePlayerprofile $fromPlayerprofile = null)
    {
        $this->fromPlayerprofile = $fromPlayerprofile;

        return $this;
    }

    /**
     * Get fromPlayerprofile
     *
     * @return \AppBundle\Entity\UserProfilePlayerprofile
     */
    public function getFromPlayerprofile()
    {
        return $this->fromPlayerprofile;
    }

    /**
     * Set toPlayerprofile
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $toPlayerprofile
     *
     * @return UserProfilePlayerprofileFriends
     */
    public function setToPlayerprofile(\AppBundle\Entity\UserProfilePlayerprofile $toPlayerprofile = null)
    {
        $this->toPlayerprofile = $toPlayerprofile;

        return $this;
    }

    /**
     * Get toPlayerprofile
     *
     * @return \AppBundle\Entity\UserProfilePlayerprofile
     */
    public function getToPlayerprofile()
    {
        return $this->toPlayerprofile;
    }
}
