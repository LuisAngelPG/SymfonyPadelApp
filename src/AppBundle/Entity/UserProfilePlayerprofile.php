<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\JoinTable as JoinTable;
use Doctrine\ORM\JoinColumn as JoinColumn;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * UserProfilePlayerprofile
 *
 * @ORM\Table(name="user_profile_playerprofile", uniqueConstraints={@ORM\UniqueConstraint(name="user_profile_playerprofile_user_id_key", columns={"user_id"})}, indexes={@ORM\Index(name="user_profile_playerprofile_288bb964", columns={"equipment_id"}), @ORM\Index(name="user_profile_playerprofile_phone_number_291c576a9932b0a5_uniq", columns={"phone_number"})})
 * @ORM\Entity
 */
class UserProfilePlayerprofile extends Player
{

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=3, nullable=true)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=250, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="level", type="string", length=2, nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="equipment_model", type="string", length=250, nullable=true)
     */
    private $equipmentModel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_trainer", type="boolean", nullable=false)
     */
    private $isTrainer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_dummy", type="boolean", nullable=false)
     */
    private $isDummy;

    /**
     * @ORM\ManyToOne(targetEntity="UserProfilePlayerprofile")
     */
    private $creator;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetimetz", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetimetz", nullable=true)
     */
    private $updated;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="user_profile_playerprofile_id_seq", allocationSize=1, initialValue=1)
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
     * @var \AppBundle\Entity\UserProfileEquipment
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserProfileEquipment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipment_id", referencedColumnName="id")
     * })
     */
    private $equipment;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\TournamentClub", inversedBy="user")
     * @ORM\JoinTable(name="user_profile_playerprofile_tournament_club")
     */
    private $favClubs;

    /**
     * @ORM\ManyToMany(targetEntity="UserProfilePlayerprofile", mappedBy="myFriends")
     */
    private $friendsWithMe;

    /**
     * @ORM\ManyToMany(targetEntity="UserProfilePlayerprofile", inversedBy="friendsWithMe")
     * @ORM\JoinTable(name="UserProfilePlayerprofileFriends")
     *   
     */
    private $myFriends;

     /**
     * Constructor
     */
    public function __construct()
    {
        $this->favClubs = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function setNulls() {
        $this->setIsTrainer(false);
        $this->setIsDummy(false);
        $date = new \DateTime();
        $this->setCreated($date);
        $this->setUpdated($date);
    }

  
    /**
     * Set age
     *
     * @param integer $age
     *
     * @return UserProfilePlayerprofile
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return UserProfilePlayerprofile
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return UserProfilePlayerprofile
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set level
     *
     * @param string $level
     *
     * @return UserProfilePlayerprofile
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }


    /**
     * Set equipmentModel
     *
     * @param string $equipmentModel
     *
     * @return UserProfilePlayerprofile
     */
    public function setEquipmentModel($equipmentModel)
    {
        $this->equipmentModel = $equipmentModel;

        return $this;
    }

    /**
     * Get equipmentModel
     *
     * @return string
     */
    public function getEquipmentModel()
    {
        return $this->equipmentModel;
    }

    /**
     * Set isTrainer
     *
     * @param boolean $isTrainer
     *
     * @return UserProfilePlayerprofile
     */
    public function setIsTrainer($isTrainer)
    {
        $this->isTrainer = $isTrainer;

        return $this;
    }

    /**
     * Get isTrainer
     *
     * @return boolean
     */
    public function getIsTrainer()
    {
        return $this->isTrainer;
    }

    /**
     * Set isDummy
     *
     * @param boolean $isDummy
     *
     * @return UserProfilePlayerprofile
     */
    public function setIsDummy($isDummy)
    {
        $this->isDummy = $isDummy;

        return $this;
    }

    /**
     * Get isDummy
     *
     * @return boolean
     */
    public function getIsDummy()
    {
        return $this->isDummy;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return UserProfilePlayerprofile
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
     * @return UserProfilePlayerprofile
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
     * @return UserProfilePlayerprofile
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
     * Set equipment
     *
     * @param \AppBundle\Entity\UserProfileEquipment $equipment
     *
     * @return UserProfilePlayerprofile
     */
    public function setEquipment(\AppBundle\Entity\UserProfileEquipment $equipment = null)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Get equipment
     *
     * @return \AppBundle\Entity\UserProfileEquipment
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Add favClub
     *
     * @param \AppBundle\Entity\TournamentClub $favClub
     *
     * @return UserProfilePlayerprofile
     */
    public function addFavClub(\AppBundle\Entity\TournamentClub $favClub)
    {
        $this->favClubs[] = $favClub;
        return $this;
    }

    /**
     * Remove favClub
     *
     * @param \AppBundle\Entity\TournamentClub $favClub
     */
    public function removeFavClub(\AppBundle\Entity\TournamentClub $favClub)
    {
        $this->favClubs->removeElement($favClub);
    }

    /**
     * Get favClubs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFavClubs()
    {
        return $this->favClubs;
    }

    private $idFavClubs;
    public function setIdFavClubs($idFavClubs) {
        $this->idFavClubs = $idFavClubs;
    }

    public function getIdFavClubs() {
        return $this->idFavClubs;
    }

    private $idFriends;
    public function setIdFriends($idFriends) {
        $this->idFriends = $idFriends;
    }

    public function getIdFriends() {
        return $this->idFriends;
    }

    /**
     * Add friendsWithMe
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $friendsWithMe
     *
     * @return UserProfilePlayerprofile
     */
    public function addFriendsWithMe(\AppBundle\Entity\UserProfilePlayerprofile $friendsWithMe)
    {
        $this->friendsWithMe[] = $friendsWithMe;

        return $this;
    }

    /**
     * Remove friendsWithMe
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $friendsWithMe
     */
    public function removeFriendsWithMe(\AppBundle\Entity\UserProfilePlayerprofile $friendsWithMe)
    {
        $this->friendsWithMe->removeElement($friendsWithMe);
    }

    /**
     * Get friendsWithMe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriendsWithMe()
    {
        return $this->friendsWithMe;
    }

    /**
     * Add myFriend
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $myFriend
     *
     * @return UserProfilePlayerprofile
     */
    public function addMyFriend(\AppBundle\Entity\UserProfilePlayerprofile $myFriend)
    {
        $this->myFriends[] = $myFriend;

        return $this;
    }

    /**
     * Remove myFriend
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $myFriend
     */
    public function removeMyFriend(\AppBundle\Entity\UserProfilePlayerprofile $myFriend)
    {
        $this->myFriends->removeElement($myFriend);
    }

    /**
     * Get myFriends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMyFriends()
    {
        return $this->myFriends;
    }

    /**
     * Set creator
     *
     * @param \AppBundle\Entity\UserProfilePlayerprofile $creator
     *
     * @return UserProfilePlayerprofile
     */
    public function setCreator(\AppBundle\Entity\UserProfilePlayerprofile $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return \AppBundle\Entity\UserProfilePlayerprofile
     */
    public function getCreator()
    {
        return $this->creator;
    }
}
