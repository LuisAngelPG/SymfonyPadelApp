<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AuthUser
 *
 * @ORM\Table(name="auth_user", uniqueConstraints={@ORM\UniqueConstraint(name="auth_user_username_key", columns={"username"})})
 * @ORM\Entity
 */
class AuthUser implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @Assert\NotBlank(message = "password.not_blank")
     * @ORM\Column(name="password", type="string", length=128, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetimetz", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_superuser", type="boolean", nullable=false)
     */
    private $isSuperuser;

    /**
     * @var string
     *
     * @Assert\NotBlank(message = "username.not_blank")
     * @ORM\Column(name="username", type="string", length=30, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=30, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=30, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=254, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=3, nullable=true)
     */
    private $locale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_staff", type="boolean", nullable=false)
     */
    private $isStaff;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_joined", type="datetimetz", nullable=true)
     */
    private $dateJoined;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="auth_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set password
     *
     * @param string $password
     *
     * @return AuthUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastLogin
     *
     * @param \DateTime $lastLogin
     *
     * @return AuthUser
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set isSuperuser
     *
     * @param boolean $isSuperuser
     *
     * @return AuthUser
     */
    public function setIsSuperuser($isSuperuser)
    {
        if ($isSuperuser != null) {
            $this->isSuperuser = $isSuperuser;
        } else {
            $this->isSuperuser = false;
        }

        return $this;
    }

    /**
     * Get isSuperuser
     *
     * @return boolean
     */
    public function getIsSuperuser()
    {
        return $this->isSuperuser;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return AuthUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return AuthUser
     */
    public function setFirstName($firstName)
    {
        if ($firstName != null) {
            $this->firstName = $firstName;    
        } else {
            $this->firstName = " ";
        }

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return AuthUser
     */
    public function setLastName($lastName)
    {
        if ($lastName != null) {
            $this->lastName = $lastName;    
        } else {
            $this->lastName = " ";
        }
        
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return AuthUser
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
     * Set isStaff
     *
     * @param boolean $isStaff
     *
     * @return AuthUser
     */
    public function setIsStaff($isStaff)
    {
        if ($isStaff != null){
            $this->isStaff = $isStaff;    
        } else {
            $this->isStaff = false;
        }
        
        return $this;
    }

    /**
     * Get isStaff
     *
     * @return boolean
     */
    public function getIsStaff()
    {
        return $this->isStaff;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return AuthUser
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set dateJoined
     *
     * @param \DateTime $dateJoined
     *
     * @return AuthUser
     */
    private function setDateJoined()
    {
        $date = new \DateTime();
        $this->dateJoined = $date;

        return $this;
    }

    /**
     * Get dateJoined
     *
     * @return \DateTime
     */
    public function getDateJoined()
    {
        return $this->dateJoined;
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

    public function getSalt() {
        return null;
    }

    public function getRoles() {
        if ($this->getIsSuperuser() == true) {
            return array('ROLE_ADMIN');
        }
        if ($this->getIsStaff() == true) {
            return array("ROLE_STAFF");
        }
        return array('ROLE_USER');
    }

    public function eraseCredentials() {
        
    }

      /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }

    public function setNulls() {
        $this->setIsSuperuser(null);
        $this->setIsStaff(null);
        $this->setFirstName(null);
        $this->setLastName(null);
        $this->setIsActive(false);
        $this->setDateJoined();
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return AuthUser
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
