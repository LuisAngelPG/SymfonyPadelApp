<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PushNotificationsApnsdevice
 *
 * @ORM\Table(name="push_notifications_apnsdevice", uniqueConstraints={@ORM\UniqueConstraint(name="push_notifications_apnsdevice_registration_id_key", columns={"registration_id"})}, indexes={@ORM\Index(name="push_notifications_apnsdevice_e8701ad4", columns={"user_id"}), @ORM\Index(name="push_notifications_apnsdevice_9379346c", columns={"device_id"})})
 * @ORM\Entity
 */
class PushNotificationsApnsdevice
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetimetz", nullable=true)
     */
    private $dateCreated;

    /**
     * @var guid
     *
     * @ORM\Column(name="device_id", type="guid", nullable=true)
     */
    private $deviceId;

    /**
     * @var string
     *
     * @ORM\Column(name="registration_id", type="string", length=200, nullable=false)
     */
    private $registrationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="push_notifications_apnsdevice_id_seq", allocationSize=1, initialValue=1)
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
     * Set name
     *
     * @param string $name
     *
     * @return PushNotificationsApnsdevice
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
     * Set active
     *
     * @param boolean $active
     *
     * @return PushNotificationsApnsdevice
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return PushNotificationsApnsdevice
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set deviceId
     *
     * @param guid $deviceId
     *
     * @return PushNotificationsApnsdevice
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * Get deviceId
     *
     * @return guid
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set registrationId
     *
     * @param string $registrationId
     *
     * @return PushNotificationsApnsdevice
     */
    public function setRegistrationId($registrationId)
    {
        $this->registrationId = $registrationId;

        return $this;
    }

    /**
     * Get registrationId
     *
     * @return string
     */
    public function getRegistrationId()
    {
        return $this->registrationId;
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
     * @return PushNotificationsApnsdevice
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
